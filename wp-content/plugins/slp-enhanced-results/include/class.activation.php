<?php
if (! class_exists('SLPES_Activation')) {
    require_once( SLPLUS_PLUGINDIR . '/include/base_class.activation.php' );

    /**
     * Manage plugin activation.
     *
     * @package StoreLocatorPlus\EnhancedResults\Activation
     * @author Lance Cleveland <lance@charlestonsw.com>
     * @copyright 2014-2015 Charleston Software Associates, LLC
     *
     */
    class SLPER_Activation extends SLP_BaseClass_Activation {

        //----------------------------------
        // Methods
        //----------------------------------

        /**
         * The plugin object
         *
         * @var \SLPEnhancedResults $plugin
         */
        public $addon;

        /**
         * Extended data fields that were updated during an upgrade.
         *
         * @var string[] $updated_slugs
         */
        private $updated_slugs = array();

        /**
         * Update or create the data tables.
         *
         * This can be run as a static function or as a class method.
         */
        function update() {

            // Version specific updates
            // Options do not need to be written/updated as the calling admin_init will do that.
            //
            $original_option_prefix = 'csl-slplus';
            $original_version = $this->addon->options['installed_version'];
            if (    isset( $this->addon->options['extended_data_version'] ) ) {
                $original_version = $this->addon->options['extended_data_version'];
                unset($this->addon->options['extended_data_version']);
            }

            // Upgrade To 4.2.07
            //
            // Move enhanced_results_hide_distance_in_table into serialized array.
            //
            if (  version_compare( $original_version , '4.2.07' , '<' )  ) {
                $optionName = $original_option_prefix.'-enhanced_results_hide_distance_in_table';
                $this->addon->options['hide_distance'] = get_option( $optionName , $this->addon->options['hide_distance'] );
                delete_option($optionName);

                $optionName = $original_option_prefix.'_disable_initialdirectory';
                $this->addon->options['disable_initial_directory'] = get_option( $optionName , $this->addon->options['disable_initial_directory'] );
                delete_option($optionName);

            }


            // Upgrade To 4.1.10
            //
            // Move enhanced_results_orderby into serialized array.
            // Move SLPLUS_PREFIX.'_slper' into csl-slplus-ER-options
            //
            if (  version_compare( $original_version , '4.1.10' , '<' )  ){
                $optionName = $original_option_prefix.'-enhanced_results_orderby';
                $this->addon->options['orderby'] = get_option($optionName,$this->addon->options['orderby']);
                delete_option($optionName);

                $optionName = $original_option_prefix.'-enhanced_results_add_tel_to_phone';
                $this->addon->options['add_tel_to_phone'] = get_option($optionName,$this->addon->options['add_tel_to_phone']);
                delete_option($optionName);

                $optionName = $original_option_prefix.'-enhanced_results_show_country';
                $this->addon->options['show_country'] = get_option($optionName,$this->addon->options['show_country']);
                delete_option($optionName);

                // Migrate old csl-slplu
                $optionName = $original_option_prefix . '_slper';
                $this->addon->options = array_merge( (array) get_option( $optionName , array() ) , $this->addon->options );
                delete_option($optionName);
            }

            // Upgrade To 4.0.012
            //
            if ( version_compare( $original_version , '4.0.012', '<') ){
                $optionName = $original_option_prefix.'-enhanced_results_show_hours';
                $this->addon->options['show_hours'] = get_option($optionName,$this->addon->options['show_hours']);
                delete_option($optionName);
            }

            // Extended Location Data Enhancements
            //
            if ( $this->slplus->database->is_Extended() ) {

                // Upgrade To 4.1.09
                // In this version we make the field name fixed at 'featured' not the translated version of __('featured')
                //
                if ( version_compare( $original_version , '4.1.09' , '<' ) ){
                    add_filter('sanitize_title', array($this->slplus->database->extension, 'filter_SanitizeTitleForMySQLField'), 10, 3);

                    $this->update_MetaData(   __('Featured','csa-slp-er') , 'featured'             );
                    $this->update_MetaData(   __('Rank'    ,'csa-slp-er') , 'rank'                 );
                    $this->data_RenameColumn( __('Featured','csa-slp-er') , 'featured' , 'boolean' );
                    $this->data_RenameColumn( __('Rank'    ,'csa-slp-er') , 'rank'     , 'int'     );

                    add_filter('remove_title', array($this->slplus->database->extension, 'filter_SanitizeTitleForMySQLField'));
                }

                // Any change in data version
                //
                $this->slplus->database->extension->add_field( __('Featured','csa-slp-er'),'boolean', array( 'slug' => 'featured' ), 'wait' );
                $this->slplus->database->extension->add_field( __('Rank'    ,'csa-slp-er'),'int'    , array( 'slug' => 'rank'     ), 'wait' );

                $this->slplus->database->extension->update_data_table();

            }
        }

        /**
         * Create the SQL command to rename a column.
         *
         * @param string $label
         * @param string $slug
         * @param string $type
         * @return string
         */
        function data_RenameColumn( $label , $slug , $type ) {
            if ( ! in_array( $slug , $this->updated_slugs ) ) { return; }
            if ( $type === 'varchar' ) { $type = 'varchar(250)'; }
            $sql_command =
                sprintf(
                    'ALTER TABLE %s change %s %s %s',
                    $this->slplus->database->extension->plugintable['name'],
                    sanitize_title($label, '', 'save'),
                    $slug,
                    $type
                   );
            return $this->slplus->db->query( $sql_command );
        }

        /**
         * Update the extended data table meta data.
         *
         * @param type $label
         * @param type $slug
         */
        function update_MetaData( $label , $slug ) {
            if (
                $this->slplus->database->extension->has_field( sanitize_title( $label ) ) &&
                ! $this->slplus->database->extension->has_field(  $slug )
               ) {
                $this->slplus->db->update(
                    $this->slplus->database->extension->metatable['name'],
                    array(
                        'label' => $label ,
                        'slug'  =>  $slug
                    ) ,
                    array(
                        'slug' => sanitize_title($label, '', 'save')
                    ) ,
                    array ( '%s' , '%s' )
                );
                $this->updated_slugs[] = $slug;
            }
        }
    }
}
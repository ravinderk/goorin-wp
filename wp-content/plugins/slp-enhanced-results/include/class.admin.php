<?php
if (! class_exists('SLPEnhancedResults_Admin')) {
    require_once(SLPLUS_PLUGINDIR.'/include/base_class.admin.php');

    /**
     * Holds the admin-only code.
     *
     * This allows the main plugin to only include this file in admin mode
     * via the admin_menu call.   Reduces the front-end footprint.
     *
     * @package StoreLocatorPlus\SLPEnhancedResults\Admin
     * @author Lance Cleveland <lance@charlestonsw.com>
     * @copyright 2014 Charleston Software Associates, LLC
     */
    class SLPEnhancedResults_Admin extends SLP_BaseClass_Admin {

        //-------------------------------------
        // Properties
        //-------------------------------------

        /**
         * List of option keys that are checkboxes.
         *
         * Helps with processing during save of form posts.
         *
         * @var string[] $cb_options
         */
        private $cb_options = array (
            'add_tel_to_phone'          ,
            'disable_initial_directory' ,
            'hide_distance'             ,
            'show_country'              ,
            'show_hours'                ,
        );

        //-------------------------------------
        // Methods : Base Override
        //-------------------------------------

        /**
         * Admin specific hooks and filters.
         *
         */
        function add_hooks_and_filters() {
            // Admin : Locations
            //
            add_filter('slp_locations_manage_cssclass'      ,array($this,'filter_HighlightFeatured'                     )           );
            
            // Pro Pack Imports
            //
            add_filter('slp_csv_locationdata_added'         ,array($this,'filter_CSVImportLocationFeatures'             ), 90 , 2   );

            // Admin : User Experience
            //
            add_filter('slp_settings_results_locationinfo'  ,array($this,'filter_AddResultsSettingsPanel'               ), 20       );
            add_filter('slp_settings_results_labels'        ,array($this,'filter_AddLabelSettings'                      )           );

            // Data Saving
            // TODO: convert to slp_save_ux_settings filter in base plugin, after removing legacy settings.
            //
            add_filter('slp_save_map_settings_inputs'       ,array($this,'filter_SaveMapInputSettings'                  )           );
            add_action('slp_save_map_settings'              ,array($this,'filter_SaveSerialData'                        ),  9       );

            // Location bulk action
            //
            add_filter('slp_locations_manage_bulkactions'   ,array($this,'filter_LocationsBulkAction'                   )           );
            add_action('slp_manage_locations_action'        ,array($this,'action_ManageLocationsProcessing'             )           );
        }

        /**
         * Execute some admin startup things for this add-on pack.
         */
        function do_admin_startup() {
            $this->check_for_updates();
            $this->update_install_info();
        }

        /**
         * Set base class properties so we can have more cross-add-on methods.
         */
        function set_addon_properties() {
            $this->admin_page_slug = $this->addon->slug;
        }

        //-------------------------------------
        // Methods : Custom : String Creation
        //-------------------------------------

        /**
         * Create the email output drowndown selection.
         */
        function createstring_EmailOutputDropdown() {
            $selections[__('Email Label with Email Link'    ,'csa-slp-er')]  = 'label_link';
            $selections[__('Email Address with Email Link'  ,'csa-slp-er')]  = 'email_link';
            $selections[__('Popup Form Linked To Email'     ,'csa-slp-er')]  = 'popup_form';

            $content =
                "<div class='form_entry'>"                  .
                "<label for='".SLPLUS_PREFIX."-ER-options[email_link_format]'>"         .
                __('Email Format: ', 'csa-slp-er')  .
                "</label>"                              .
                "<select name='".SLPLUS_PREFIX."-ER-options[email_link_format]'>"
            ;
            foreach ($selections as $key=>$value) {
                $selected=($this->addon->options['email_link_format']==$value)?" selected " : "";
                $content .= "<option value='$value' $selected>$key</option>\n";
            }
            $content .= "</select></div>";

            return $content;
        }

        /**
         * Create the order by setting string section.
         *
         * Selections include:
         * - Featured, Rank, Closest
         * - Featured, Rank, A..Z
         * - Featured Then Closest
         * - Featured Then A..Z
         * - Rank Then Closest
         * - Rank Then A..Z
         * - Closest..Furthest
         * - A..Z
         * - Random
         *
         */
        function createstring_OrderByDropdown() {
            $selections[__('Featured, Rank, Closest','csa-slp-er')] = 'featured DESC,rank ASC,sl_distance ASC';
            $selections[__('Featured, Rank, A..Z'   ,'csa-slp-er')] = 'featured DESC,rank ASC,sl_store ASC';
            $selections[__('Featured Then Closest','csa-slp-er')] = 'featured DESC,sl_distance ASC';
            $selections[__('Featured Then A..Z'   ,'csa-slp-er')] = 'featured DESC,sl_store ASC';
            $selections[__('Rank Then Closest','csa-slp-er')] = 'rank ASC,sl_distance ASC';
            $selections[__('Rank Then A..Z'   ,'csa-slp-er')] = 'rank ASC,sl_store ASC';
            $selections[__('Closest..Furthest'  ,'csa-slp-er')]  = 'sl_distance ASC';
            $selections[__('Name A..Z'          ,'csa-slp-er')]  = 'sl_store ASC';
            $selections[__('Random'             ,'csa-slp-er')]  = 'random';

            $content =
                "<div class='form_entry'>"                  .
                    "<label for='".SLPLUS_PREFIX."-ER-options[orderby]'>"         .
                    __('Order Results By: ', 'csa-slp-er')  .
                    "</label>"                              .
                    "<select name='".SLPLUS_PREFIX."-ER-options[orderby]'>"
                    ;
            foreach ($selections as $key=>$value) {
                $selected=($this->addon->options['orderby']==$value)?" selected " : "";
                $content .= "<option value='$value' $selected>$key</option>\n";
            }
            $content .= "</select></div>";

            return $content;
        }

        //-------------------------------------
        // Methods : Custom : Filters
        //-------------------------------------

        /**
         * Add more settings to the Result / Label section of Map Setings.
         *
         * @param string $HTML the initial form HTML
         * @return string the modified form HTML
         */
        function filter_AddLabelSettings($HTML) {
            return
                $HTML .

                '<strong>'.$this->addon->name.'</strong><br/>'.

                $this->slplus->AdminUI->MapSettings->CreateInputDiv(
                        '_message_noresultsfound',
                        __('No Results Message', 'csa-slp-er'),
                        __('No results found message that appears under the map.','csa-slp-er'),
                        SLPLUS_PREFIX,
                        __('No results found.','csa-slp-er')
                        ) .

                $this->slplus->AdminUI->MapSettings->CreateInputDiv(
                    'popup_email_title',
                    __('Popup Email Title', 'csa-slp-er'),
                    __('The title on the popup email dialogue form.','csa-slp-er'),
                    '',
                    $this->addon->options_defaults['popup_email_title']
                ) .

                $this->slplus->AdminUI->MapSettings->CreateInputDiv(
                    'popup_email_from_placeholder',
                    __('Popup From Placeholder', 'csa-slp-er'),
                    __('The placeholder for the from field on the popup email dialogue form.','csa-slp-er'),
                    '',
                    $this->addon->options_defaults['popup_email_from_placeholder']
                ) .

                $this->slplus->AdminUI->MapSettings->CreateInputDiv(
                    'popup_email_subject_placeholder',
                    __('Popup Subject Placeholder', 'csa-slp-er'),
                    __('The placeholder for the subject field on the popup email dialogue form.','csa-slp-er'),
                    '',
                    $this->addon->options_defaults['popup_email_subject_placeholder']
                ) .

                $this->slplus->AdminUI->MapSettings->CreateInputDiv(
                    'popup_email_message_placeholder',
                    __('Popup Message Placeholder', 'csa-slp-er'),
                    __('The placeholder for the message box on the popup email dialogue form.','csa-slp-er'),
                    '',
                    $this->addon->options_defaults['popup_email_message_placeholder']
                );
        }

        /**
         * Add settings the the SLP Map Settings Results panel.
         *
         * @param string $HTML - the default (or current) results string HTML
         * @return string - the modified HTML
         */
        function filter_AddResultsSettingsPanel($HTML) {
            $this->msUI = $this->slplus->AdminUI->MapSettings;
            $this->UI   = $this->slplus->helper;

            return
                $HTML .
                $this->UI->create_SubheadingLabel(__('Enhanced Results','csa-slp-er')).
                $this->UI->CreateCheckboxDiv(
                    '-ER-options[disable_initial_directory]',
                    __('Disable Initial Directory','csa-slp-er'),
                    __('Do not display the listings under the map when "immediately show locations" is checked.', 'csa-slp-er'),
                    null,false,0,
                    $this->addon->options['disable_initial_directory']
                    ) .
                $this->UI->CreateCheckboxDiv(
                    '-ER-options[add_tel_to_phone]',
                    __('Use tel URI','csa-slp-er'),
                    __('When checked, wraps the phone number in the results in a tel: href tag.', 'csa-slp-er'),
                    null,false,0,
                    $this->addon->options['add_tel_to_phone']
                    ) .
                $this->UI->CreateCheckboxDiv(
                    '-ER-options[hide_distance]',
                    __('Hide Distance','csa-slp-er'),
                    __('Do not show the distance to the location in the results table.', 'csa-slp-er'),
                    null,false,0,
                    $this->addon->options['hide_distance']
                    ) .
                $this->UI->CreateCheckboxDiv(
                    '-ER-options[show_country]',
                    __('Show Country','csa-slp-er'),
                    __('Display the country in the results table address.', 'csa-slp-er'),
                    null,false,0,
                    $this->addon->options['show_country']
                    ) .
                $this->UI->CreateCheckboxDiv(
                    '-ER-options[show_hours]',
                    __('Show Hours','csa-slp-er'),
                    __('Display the hours in the results table under the Directions link.', 'csa-slp-er'),
                    null,false,0,
                    $this->addon->options['show_hours']
                    ) .

                $this->createstring_EmailOutputDropdown().

                $this->createstring_OrderByDropdown().

                $this->slplus->helper->createstring_DropDownDiv(array(
                                                                'id'               => 'featured_location_display_type',
                                                                'name'             => 'featured_location_display_type',
                                                                'label'            => __('Featured Locations' , 'csa-slp-er') ,
                                                                'helptext'         => sprintf("%s<br/>%s<br/>%s"
                                                                                     ,__('Set if the featured location should be showed:', 'csa-slp-er')
                                                                                     ,__('Show If In Radius - Only when the location are in radius.', 'csa-slp-er')
                                                                                     ,__('Always Show - Always show featured locations.', 'csa-slp-er')),
                                                                'onchange'         => '',
                                                                'selectedVal'      => (empty($this->addon->options['featured_location_display_type'])?''
                                                                                      :$this->addon->options['featured_location_display_type']),
                                                                'items'            => array(
                                                                    array( 'label' => __('Show If In Radius', 'csa-slp-er'), 'value' => 'show_within_radius' ),
                                                                    array( 'label' => __('Always Show',       'csa-slp-er'), 'value' => 'show_always'),
                                                                ))).
                $this->msUI->CreateTextAreaDiv(
                    '-ER-options[resultslayout]',
                    __('Results Layout','csa-slp-er'),
                    __('Enter your custom results area layout for the location results. ','csa-slp-er') .
                        sprintf('<a href="%s/user-experience/results/results-layout/" target="csa">%s</a> ',
                                $this->slplus->support_url,
                                sprintf(__('Uses HTML plus %s shortcodes.','csa-slp-er'),$this->addon->name)
                                ) .
                        __('Set it to blank to reset to the default layout. ','csa-slp-er') .
                        __('Overrides all other results settings.','csa-slp-er')
                        ,
                    SLPLUS_PREFIX,
                    empty( $this->addon->options['resultslayout'] ) ? $this->slplus->defaults['resultslayout'] : $this->addon->options['resultslayout'],
                    true
                    )
               ;
        }

        /**
         * Process incoming CSV import data and add our extended field attributes.
         *
         * note: CSV import field names always get the sl_ prefixed.
         *
         * @param mixed[] $locationData
         * @param string $result
         * @return the original data, unchanged
         */
        function filter_CSVImportLocationFeatures($locationData, $result) {
            $newData = array();
            $extended_data_fields = array('featured', 'rank');
            foreach ($extended_data_fields as $field) {
                if ( isset($locationData['sl_'.$field]) ) { $newData[$field] = $locationData['sl_'.$field]; }
            }
            if ( count( $newData ) > 0 ) {
                $this->slplus->database->extension->update_data(
                    $this->slplus->currentLocation->id,
                    $newData
                 );
            }
            return array($locationData,$result);
        }

        /**
         * Highlight the featured elements on the manage locations panel.
         *
         * @param string $extraCSSClasses
         * @return string
         */
        function filter_HighlightFeatured($extraCSSClasses) {
            return $extraCSSClasses . (($this->slplus->currentLocation->featured)?' featured ':'');
        }

        /**
         * Add the input settings to be saved on the map settings page.
         *
         * TODO: Get rid of legacy settings.
         * TODO: merge with plugin save_ux_settings() method.
         *
         * @param string[] $inArray names of inputs already to be saved
         * @return string[] modified array with our Pro Pack inputs added.
         */
        function filter_SaveMapInputSettings($inArray) {
            array_walk($_REQUEST,array($this,'set_ValidOptions'));
            update_option($this->addon->option_name, $this->addon->options);
            return array_merge($inArray,
                    array(
                        SLPLUS_PREFIX.'-enhanced_results_string',
                        SLPLUS_PREFIX.'_message_noresultsfound' ,
                        'popup_email_title' ,
                        'popup_email_from_placeholder' ,
                        'popup_email_subject_placeholder' ,
                        'popup_email_message_placeholder'
                        )
                    );
        }

        /**
         * Save the serialized data an drop down to the database.
         *
         * TODO: use base plugin save_ux_settings() method.
         */
        function filter_SaveSerialData() {
            $this->addon->options =
                $this->slplus->AdminUI->save_SerializedOption(
                    $this->addon->option_name,
                    $this->addon->options,
                    $this->cb_options
                    );
            $this->slplus->initOptions(true);
        }

        /**
         * Add more actions to the Bulk Action drop down on the admin Locations/Manage Locations interface.
         *
         * @param mixed[] $BulkActions
         * @return mixed[]
         */
        function filter_LocationsBulkAction($items) {
            return
                array_merge(
                    $items,
                    array(
                        array(
                            'label'     =>  __('Feature Location','csa-slp-er')      ,
                            'value'     => 'feature_location'                        ,
                        ),
                        array(
                            'label'     =>  __('Stop Featuring Location','csa-slp-er') ,
                            'value'     => 'remove_feature_location'                 ,
                        ),
                    )
                );
        }

        /**
         * Additional location processing on manage locations admin page.
         *
         */
        function action_ManageLocationsProcessing() {
            switch ($_REQUEST['act']) {

                // Add tags to locations
                case 'feature_location':
                    if (isset($_REQUEST['sl_id'])) { $this->feature_Locations('add'); }
                    break;

                // Remove tags from locations
                case 'remove_feature_location':
                    if (isset($_REQUEST['sl_id'])) { $this->feature_Locations('remove'); }
                    break;

                default:
                    break;
            }
        }

        /**
         * feature a location
         *
         * @param string $action = add or remove
         */
        function feature_Locations($action) {

            // Setup the location ID array
            //
            if ( is_array( $_REQUEST['sl_id'] ) ) {
                $locationIDs = $_REQUEST['sl_id'];
            } else {
                $locationIDs = array();
                $locationIDs[] = $_REQUEST['sl_id'];
            }
            foreach ( $locationIDs as $locationID ) {
                $this->slplus->database->extension->update_data(
                    $locationID,
                    array('featured' => ( $action === 'add' ) ? '1' : '0' )
                 );
            }
        }

    }
}
// Dad. Explorer. Rum Lover. Code Geek. Not necessarily in that order.

<?php 
$group = array (
  'id' => '559b80571b291',
  'title' => 'Slider',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_559b7fd168466',
      'label' => 'Slider Images',
      'name' => 'slider_images',
      '_name' => 'slider_images',
      'type' => 'repeater',
      'order_no' => 0,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-slider_images',
      'class' => 'repeater',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
          ),
        ),
        'allorany' => 'all',
      ),
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_559b7fe468467',
          'label' => 'Image',
          'name' => 'image',
          '_name' => 'image',
          'type' => 'image',
          'order_no' => 0,
          'instructions' => '',
          'required' => 0,
          'id' => 'acf-field-image',
          'class' => 'image',
          'conditional_logic' => 
          array (
            'status' => 0,
            'rules' => 
            array (
              0 => 
              array (
                'field' => 'null',
                'operator' => '==',
              ),
            ),
            'allorany' => 'all',
          ),
          'column_width' => '',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
      ),
      'row_min' => '',
      'row_limit' => '',
      'layout' => 'table',
      'button_label' => 'Add Row',
      'field_group' => 30,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'shops',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
    ),
  ),
  'menu_order' => 0,
);
<?php 
$group = array (
  'id' => '5598bd250602a',
  'title' => 'Shop',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_559784de8fc53',
      'label' => 'Hours of operation',
      'name' => 'hours_of_operation',
      '_name' => 'hours_of_operation',
      'type' => 'textarea',
      'order_no' => 0,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-hours_of_operation',
      'class' => 'textarea',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
            'value' => '',
          ),
        ),
        'allorany' => 'all',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'formatting' => 'br',
      'field_group' => 5,
    ),
    1 => 
    array (
      'key' => 'field_5597853d8fc54',
      'label' => 'Phone',
      'name' => 'phone',
      '_name' => 'phone',
      'type' => 'text',
      'order_no' => 1,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-phone',
      'class' => 'text',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
            'value' => '',
          ),
        ),
        'allorany' => 'all',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'field_group' => 5,
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
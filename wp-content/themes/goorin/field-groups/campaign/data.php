<?php 
$group = array (
  'id' => '5549f5ede7198',
  'title' => 'Campaign',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_5549f037ecf86',
      'label' => 'Layout',
      'name' => 'layout',
      '_name' => 'layout',
      'type' => 'flexible_content',
      'order_no' => 0,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-layout',
      'class' => 'flexible_content',
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
      'layouts' => 
      array (
        0 => 
        array (
          'label' => 'Hero Section',
          'name' => 'hero_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_5549f096ecf87',
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
                    'value' => '',
                  ),
                ),
                'allorany' => 'all',
              ),
              'column_width' => '',
              'save_format' => 'object',
              'preview_size' => 'thumbnail',
              'library' => 'all',
            ),
            1 => 
            array (
              'key' => 'field_5549f0acecf88',
              'label' => 'Small Heading',
              'name' => 'small_heading',
              '_name' => 'small_heading',
              'type' => 'wysiwyg',
              'order_no' => 1,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-small_heading',
              'class' => 'wysiwyg',
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
              'column_width' => '',
              'default_value' => '',
              'toolbar' => 'basic',
              'media_upload' => 'no',
            ),
            2 => 
            array (
              'key' => 'field_5549f0b9ecf89',
              'label' => 'Heading',
              'name' => 'heading',
              '_name' => 'heading',
              'type' => 'text',
              'order_no' => 2,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-heading',
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
              'column_width' => '',
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
            ),
            3 => 
            array (
              'key' => 'field_5549f0dcecf8a',
              'label' => 'Content',
              'name' => 'content',
              '_name' => 'content',
              'type' => 'wysiwyg',
              'order_no' => 3,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-content',
              'class' => 'wysiwyg',
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
              'column_width' => '',
              'default_value' => '',
              'toolbar' => 'basic',
              'media_upload' => 'no',
            ),
          ),
        ),
        1 => 
        array (
          'label' => 'Showcase Section',
          'name' => 'showcase_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_5549f1553e444',
              'label' => 'Left Column Entry',
              'name' => 'left_column_entry',
              '_name' => 'left_column_entry',
              'type' => 'repeater',
              'order_no' => 0,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-left_column_entry',
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
                    'value' => '',
                  ),
                ),
                'allorany' => 'all',
              ),
              'column_width' => '',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_5549f16d3e445',
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
                        'value' => '',
                      ),
                    ),
                    'allorany' => 'all',
                  ),
                  'column_width' => '',
                  'save_format' => 'object',
                  'preview_size' => 'thumbnail',
                  'library' => 'all',
                ),
                1 => 
                array (
                  'key' => 'field_5549f17d3e446',
                  'label' => 'Heading',
                  'name' => 'heading',
                  '_name' => 'heading',
                  'type' => 'text',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-heading',
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
                  'column_width' => '',
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'formatting' => 'html',
                  'maxlength' => '',
                ),
                2 => 
                array (
                  'key' => 'field_5549f1803e447',
                  'label' => 'Content',
                  'name' => 'content',
                  '_name' => 'content',
                  'type' => 'wysiwyg',
                  'order_no' => 2,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-content',
                  'class' => 'wysiwyg',
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
                  'column_width' => '',
                  'default_value' => '',
                  'toolbar' => 'basic',
                  'media_upload' => 'no',
                ),
              ),
              'row_min' => '',
              'row_limit' => '',
              'layout' => 'row',
              'button_label' => 'Add Entry',
            ),
            1 => 
            array (
              'key' => 'field_5549f1a23e448',
              'label' => 'Right Column Entry',
              'name' => 'right_column_entry',
              '_name' => 'right_column_entry',
              'type' => 'repeater',
              'order_no' => 1,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-right_column_entry',
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
                    'value' => '',
                  ),
                ),
                'allorany' => 'all',
              ),
              'column_width' => '',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_5549f1a23e449',
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
                        'value' => '',
                      ),
                    ),
                    'allorany' => 'all',
                  ),
                  'column_width' => '',
                  'save_format' => 'object',
                  'preview_size' => 'thumbnail',
                  'library' => 'all',
                ),
                1 => 
                array (
                  'key' => 'field_5549f1a23e44a',
                  'label' => 'Heading',
                  'name' => 'heading',
                  '_name' => 'heading',
                  'type' => 'text',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-heading',
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
                  'column_width' => '',
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'formatting' => 'html',
                  'maxlength' => '',
                ),
                2 => 
                array (
                  'key' => 'field_5549f1a23e44b',
                  'label' => 'Content',
                  'name' => 'content',
                  '_name' => 'content',
                  'type' => 'wysiwyg',
                  'order_no' => 2,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-content',
                  'class' => 'wysiwyg',
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
                  'column_width' => '',
                  'default_value' => '',
                  'toolbar' => 'basic',
                  'media_upload' => 'no',
                ),
              ),
              'row_min' => '',
              'row_limit' => '',
              'layout' => 'row',
              'button_label' => 'Add Entry',
            ),
          ),
        ),
        2 => 
        array (
          'label' => 'Product Section',
          'name' => 'product_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_5549f1e186564',
              'label' => 'Heading',
              'name' => 'heading',
              '_name' => 'heading',
              'type' => 'wysiwyg',
              'order_no' => 0,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-heading',
              'class' => 'wysiwyg',
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
              'column_width' => '',
              'default_value' => '',
              'toolbar' => 'basic',
              'media_upload' => 'no',
            ),
            1 => 
            array (
              'key' => 'field_5549f1ea86565',
              'label' => 'Products Count',
              'name' => 'products_count',
              '_name' => 'products_count',
              'type' => 'select',
              'order_no' => 1,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-products_count',
              'class' => 'select',
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
              'column_width' => '',
              'choices' => 
              array (
                4 => 4,
                8 => 8,
                12 => 12,
              ),
              'default_value' => 8,
              'allow_null' => 0,
              'multiple' => 0,
            ),
          ),
        ),
        3 => 
        array (
          'label' => 'Raise Your Glass Section',
          'name' => 'raise_your_glass_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_5549f27e86567',
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
                    'value' => '',
                  ),
                ),
                'allorany' => 'all',
              ),
              'column_width' => '',
              'save_format' => 'object',
              'preview_size' => 'thumbnail',
              'library' => 'all',
            ),
            1 => 
            array (
              'key' => 'field_5549f2a786568',
              'label' => 'Left Column Heading',
              'name' => 'left_column_heading',
              '_name' => 'left_column_heading',
              'type' => 'text',
              'order_no' => 1,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-left_column_heading',
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
              'column_width' => '',
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
            ),
            2 => 
            array (
              'key' => 'field_5549f2b686569',
              'label' => 'Left Column Content',
              'name' => 'left_column_content',
              '_name' => 'left_column_content',
              'type' => 'wysiwyg',
              'order_no' => 2,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-left_column_content',
              'class' => 'wysiwyg',
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
              'column_width' => '',
              'default_value' => '',
              'toolbar' => 'basic',
              'media_upload' => 'no',
            ),
            3 => 
            array (
              'key' => 'field_5549f2c38656a',
              'label' => 'Right Column Heading',
              'name' => 'right_column_heading',
              '_name' => 'right_column_heading',
              'type' => 'text',
              'order_no' => 3,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-right_column_heading',
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
              'column_width' => '',
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
            ),
            4 => 
            array (
              'key' => 'field_5549f2d58656b',
              'label' => 'Right Column Content',
              'name' => 'right_column_content',
              '_name' => 'right_column_content',
              'type' => 'wysiwyg',
              'order_no' => 4,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-right_column_content',
              'class' => 'wysiwyg',
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
              'column_width' => '',
              'default_value' => '',
              'toolbar' => 'basic',
              'media_upload' => 'no',
            ),
          ),
        ),
      ),
      'button_label' => 'Add Section',
      'min' => '',
      'max' => '',
      'field_group' => 2849,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-campaign.php',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'no_box',
    'hide_on_screen' => 
    array (
      0 => 'the_content',
      1 => 'excerpt',
    ),
  ),
  'menu_order' => 0,
);
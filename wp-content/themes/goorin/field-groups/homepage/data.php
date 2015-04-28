<?php 
$group = array (
  'id' => '553e599c075a3',
  'title' => 'Homepage',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_553e4ac0698c7',
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
          'label' => 'Hero Slider Section',
          'name' => 'hero_slider_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_553e4b8a698ca',
              'label' => 'Slides',
              'name' => 'slides',
              '_name' => 'slides',
              'type' => 'repeater',
              'order_no' => 0,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-slides',
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
                  'key' => 'field_553e4ba6698cb',
                  'label' => 'Content',
                  'name' => 'content',
                  '_name' => 'content',
                  'type' => 'wysiwyg',
                  'order_no' => 0,
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
                  'toolbar' => 'full',
                  'media_upload' => 'no',
                ),
                1 => 
                array (
                  'key' => 'field_553e4bb2698cc',
                  'label' => 'Background Image',
                  'name' => 'background_image',
                  '_name' => 'background_image',
                  'type' => 'image',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-background_image',
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
              ),
              'row_min' => '',
              'row_limit' => '',
              'layout' => 'row',
              'button_label' => 'Add Slide',
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
              'key' => 'field_553e4c0c698ce',
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
                  'key' => 'field_553e4caa698d2',
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
                  'key' => 'field_553e4c87698cf',
                  'label' => 'Pre-Heading Text',
                  'name' => 'pre-heading_text',
                  '_name' => 'pre-heading_text',
                  'type' => 'text',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-pre-heading_text',
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
                  'key' => 'field_553e4c93698d0',
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
                  'key' => 'field_553e4c9c698d1',
                  'label' => 'Post-Heading Text',
                  'name' => 'post-heading_text',
                  '_name' => 'post-heading_text',
                  'type' => 'text',
                  'order_no' => 3,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-post-heading_text',
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
                  'key' => 'field_553e4cb6698d3',
                  'label' => 'Content',
                  'name' => 'content',
                  '_name' => 'content',
                  'type' => 'wysiwyg',
                  'order_no' => 4,
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
              'key' => 'field_553e4cd4698d4',
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
                  'key' => 'field_553e4cd4698d5',
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
                  'key' => 'field_553e4cd4698d6',
                  'label' => 'Pre-Heading Text',
                  'name' => 'pre-heading_text',
                  '_name' => 'pre-heading_text',
                  'type' => 'text',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-pre-heading_text',
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
                  'key' => 'field_553e4cd4698d7',
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
                  'key' => 'field_553e4cd4698d8',
                  'label' => 'Post-Heading Text',
                  'name' => 'post-heading_text',
                  '_name' => 'post-heading_text',
                  'type' => 'text',
                  'order_no' => 3,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-post-heading_text',
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
                  'key' => 'field_553e4cd4698d9',
                  'label' => 'Content',
                  'name' => 'content',
                  '_name' => 'content',
                  'type' => 'wysiwyg',
                  'order_no' => 4,
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
          'label' => 'Products Section',
          'name' => 'products_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_553e4d25ab7c5',
              'label' => 'Featured Product',
              'name' => 'featured_product',
              '_name' => 'featured_product',
              'type' => 'repeater',
              'order_no' => 0,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-featured_product',
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
                  'key' => 'field_553e4d40ab7c6',
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
                  'key' => 'field_553e4d59ab7c7',
                  'label' => 'Pre-Heading Text',
                  'name' => 'pre-heading_text',
                  '_name' => 'pre-heading_text',
                  'type' => 'text',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-pre-heading_text',
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
                  'key' => 'field_553e4d61ab7c8',
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
                  'key' => 'field_553e4d6aab7c9',
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
                4 => 
                array (
                  'key' => 'field_553e4dcfab7cc',
                  'label' => 'Link',
                  'name' => 'link',
                  '_name' => 'link',
                  'type' => 'text',
                  'order_no' => 4,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-link',
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
              ),
              'row_min' => 1,
              'row_limit' => '',
              'layout' => 'row',
              'button_label' => 'Add Featured Product',
            ),
            1 => 
            array (
              'key' => 'field_553e4d9cab7ca',
              'label' => 'Product',
              'name' => 'product',
              '_name' => 'product',
              'type' => 'repeater',
              'order_no' => 1,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-product',
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
                  'key' => 'field_553e4da9ab7cb',
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
                  'key' => 'field_553e4ddfab7cd',
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
                  'key' => 'field_553e4debab7ce',
                  'label' => 'Post-Heading Text',
                  'name' => 'post-heading_text',
                  '_name' => 'post-heading_text',
                  'type' => 'text',
                  'order_no' => 2,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-post-heading_text',
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
                  'key' => 'field_553e4df9ab7cf',
                  'label' => 'Link',
                  'name' => 'link',
                  '_name' => 'link',
                  'type' => 'text',
                  'order_no' => 3,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-link',
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
              ),
              'row_min' => '',
              'row_limit' => '',
              'layout' => 'row',
              'button_label' => 'Add Product',
            ),
          ),
        ),
        3 => 
        array (
          'label' => 'Sneak Preview Section',
          'name' => 'sneak_preview_section',
          'display' => 'row',
          'min' => '',
          'max' => '',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_553e4e1d90090',
              'label' => 'Heading',
              'name' => 'heading',
              '_name' => 'heading',
              'type' => 'text',
              'order_no' => 0,
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
            1 => 
            array (
              'key' => 'field_553e4e2990091',
              'label' => 'Content',
              'name' => 'content',
              '_name' => 'content',
              'type' => 'wysiwyg',
              'order_no' => 1,
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
            2 => 
            array (
              'key' => 'field_553e4e3490092',
              'label' => 'Main Image',
              'name' => 'main_image',
              '_name' => 'main_image',
              'type' => 'text',
              'order_no' => 2,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-main_image',
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
              'key' => 'field_553e4e4e90093',
              'label' => 'Related Features',
              'name' => 'related_features',
              '_name' => 'related_features',
              'type' => 'repeater',
              'order_no' => 3,
              'instructions' => '',
              'required' => 0,
              'id' => 'acf-field-related_features',
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
              'column_width' => '',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_553e4ec090094',
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
                  'key' => 'field_553e4ec590095',
                  'label' => 'Pre-Heading Text',
                  'name' => 'pre-heading_text',
                  '_name' => 'pre-heading_text',
                  'type' => 'text',
                  'order_no' => 1,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-pre-heading_text',
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
                  'key' => 'field_553e4ecd90096',
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
                  'key' => 'field_553e4ed290097',
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
                4 => 
                array (
                  'key' => 'field_553e4edd90098',
                  'label' => 'Link',
                  'name' => 'link',
                  '_name' => 'link',
                  'type' => 'text',
                  'order_no' => 4,
                  'instructions' => '',
                  'required' => 0,
                  'id' => 'acf-field-link',
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
              ),
              'row_min' => '',
              'row_limit' => '',
              'layout' => 'row',
              'button_label' => 'Add Row',
            ),
          ),
        ),
      ),
      'button_label' => 'Add Section',
      'min' => '',
      'max' => '',
      'field_group' => 2739,
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
        'value' => 'page-homepage.php',
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
    ),
  ),
  'menu_order' => 0,
);
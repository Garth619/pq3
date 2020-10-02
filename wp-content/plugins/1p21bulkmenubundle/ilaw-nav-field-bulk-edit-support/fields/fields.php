<?php 

/********************************************************************************************
* SUBDIRECTORY / SETTINGS FIELDS
DO NOT EDIT THE acf-sm-fields.json FILE
read fordev.md if you think you are ThatBitch(TM) and you need to edit the fields
*********************************************************************************************/

$_ilaw_sm_opts_fields = array(
	'key' => 'group_9999999999999',
	'title' => 'iLawyer Sidebars Settings',
	'fields' => array(
		array(
			'key' => 'field_5d7959d3fc885',
			'label' => 'Settings',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d795a16fc886',
			'label' => 'Widget Class',
			'name' => 'sm_widget_class',
			'type' => 'text',
			'instructions' => 'classes to append to widget instances',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'show_column' => 0,
			'show_column_sortable' => 0,
			'show_column_weight' => 1000,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array(
			'key' => 'field_5d795dbdebd7c',
			'label' => 'Title Class',
			'name' => 'sm_title_class',
			'type' => 'text',
			'instructions' => 'classes to add on sidebar titles',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'show_column' => 0,
			'show_column_sortable' => 0,
			'show_column_weight' => 1000,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array(
			'key' => 'field_5d795e34ebd7d',
			'label' => 'Title Tag',
			'name' => 'sm_title_tag',
			'type' => 'text',
			'instructions' => 'html tag for sidebar titles',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'h3',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'show_column' => 0,
			'show_column_sortable' => 0,
			'show_column_weight' => 1000,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array(
			'key' => 'field_5d7a6ae078cc1',
			'label' => 'Default Title',
			'name' => 'sm_default_title',
			'type' => 'text',
			'instructions' => 'Title a page sidebar will default to if a custom title is not set',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Useful Links',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d7a6c2978cc2',
			'label' => 'Menu Depth',
			'name' => 'sm_depth',
			'type' => 'number',
			'instructions' => 'maximum depth of sidebar menus',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 2,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5cc09834f5834',
			'label' => 'Subdirectory Sidebars',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5cc09842f5835',
			'label' => 'Sidebars',
			'name' => 'sm_sidebars',
			'type' => 'repeater',
			'instructions' => 'Set up default widget areas for pages and its descendants. <br>Row placement of sidebar influences which one to prioritize output.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Widget Area',
			'sub_fields' => array(
				array(
					'key' => 'field_5cc0984cf5836',
					'label' => 'Sidebar Name',
					'name' => 'name',
					'type' => 'text',
					'instructions' => 'Must be unique',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d7a725c6573b',
					'label' => 'Pages',
					'name' => 'pages',
					'type' => 'repeater',
					'instructions' => 'Page/s that will utilize the sidebar',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 1,
					'max' => 0,
					'layout' => 'table',
					'button_label' => 'Add Page',
					'sub_fields' => array(
						array(
							'key' => 'field_5cc098e5f5838',
							'label' => 'Page',
							'name' => 'page',
							'type' => 'post_object',
							'instructions' => 'Page that will default itself and its descendants to this sidebar instead of the default sidebar',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'post_type' => array(
								0 => 'page',
							),
							'taxonomy' => '',
							'allow_null' => 0,
							'multiple' => 0,
							'return_format' => 'id',
							'ui' => 1,
						),
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'ilaw-sidebar-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
);





/********************************************************************************************
* PAGE FIELDS
*********************************************************************************************/

$_ilaw_sm_page_fields = array(
	'key' => 'group_5c366a793a9df',
	'title' => 'iLawyer Page Sidebar',
	'fields' => array(
		array(
			'key' => 'field_5c36777f31fd1',
			'label' => 'Sidebar Title',
			'name' => 'sm_custom_title',
			'type' => 'text',
			'instructions' => 'defaults to declared default in `Global Sidebars` settings',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array(
			'key' => 'field_5c366a82c27f7',
			'label' => 'Sidebar Menu',
			'name' => 'sm_custom_menu',
			'type' => 'nav_menu',
			'instructions' => 'Select sidebar menu.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'save_format' => 'id',
			'container' => 'div',
			'allow_null' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
);
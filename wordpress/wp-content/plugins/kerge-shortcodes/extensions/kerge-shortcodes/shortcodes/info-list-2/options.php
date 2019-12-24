<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'label' => esc_html__( 'Title', 'kerge-shortcodes' ),
		'desc'  => esc_html__( 'Option Info List Title', 'kerge-shortcodes' ),
		'type'  => 'text',
	),
	'infolist_with_icons' => array(
		'label'         => esc_html__( 'Info List', 'kerge-shortcodes' ),
		'popup-title'   => esc_html__( 'Add/Edit Info List Item', 'kerge-shortcodes' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Info List.', 'kerge-shortcodes' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'icon'    => array(
				'type'  => 'icon-v2',
				'label' => esc_html__('Choose an Icon', 'kerge-shortcodes'),
			),
			'title'       => array(
				'label' => esc_html__( 'Title', 'kerge-shortcodes' ),
				'type'  => 'text',
			),
			'text'       => array(
				'label' => esc_html__( 'Text', 'kerge-shortcodes' ),
				'type'  => 'textarea',
			),
		)
	)
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'    => array(
		'type'  => 'icon-v2',
		'label' => esc_html__('Choose an Icon', 'kerge-shortcodes'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'kerge-shortcodes' ),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Highlighted Content', 'kerge-shortcodes' ),
	),
	'text' => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Text', 'kerge-shortcodes' ),
	),
	'style'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Box Style', 'kerge-shortcodes'),
		'choices' => array(
			'gray-default' => esc_html__('Default Background', 'kerge-shortcodes'),
			'gray-bg' => esc_html__('Gray Background', 'kerge-shortcodes')
		)
	),
);
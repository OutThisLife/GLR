<?php
/**
 * replaceMe
 *
 * Main Functions
 */

require_once 'classes/sys/autoloader.php';

$tmpl = new BaseTheme();
$tmpl->debug(0)->adminBar(0)

// -----------------------------------------------

/**
 * Set up our front-end systems
 */
->addStyles(array(
	'//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
	'//cdn.jsdelivr.net/g/foundation@5.4.7(css/foundation.min.css),normalize@3.0.0',
	assetDir . '/css/core.css',
))

->addImageSizes(array(array(
	//
)))

->addSidebars(array(
	//
))

// -----------------------------------------------

/**
 * Set up our back-end systems
 */
->addMenus(array(array(
	'header' => 'Header Menu',
	'footer' => 'Footer Menu',
)))

->addSettings(array(array(
	# General settings tab
	'General' => array(
		'phone' => array(
			'name' => 'Phone #',
			'type' => 'text',
			'desc' => 'Use [phone] to retrieve this value.',
		),
	),

	# Footer settings tab
	'Footer' => array(
		'scripts' => array(
			'name' => 'Extra Scripts',
			'type' => 'textarea',
			'desc' => 'If used, these scripts will be loaded in the footer. Put things like Google Analytics in here.',
		),
	),
)))

->addShortcodes(array(array(
	# [phone]
	'phone' => function() {
		return BackEnd::getOption('phone');
	},

	# [flex_video]
	'flex_video' => function($args, $content) {
		return '<div class="flex-video">'. $content .'</div>';
	},

	# [map]
	'map' => function($args) {
		ob_start();

		if (!($address = $args['address'])) return;
		$address = urlencode($address);

		echo '
		<div class="flex-video is-map">
			<iframe src="https://www.google.com/maps/?&amp;q=', $address, '&amp;output=embed" width="100%" height="auto" frameborder="0" style="border: 0"></iframe>
		</div>';

		return ob_get_clean();
	},

	# [button]
	'button' => function($args, $content = '') {
		ob_start();

		echo '<a href="', $args['url'], '" class="button-', $args['style'], '">', $content, '</a>';

		return ob_get_clean();
	},

	# [grid]
	'grid' => function($args, $content) {
		ob_start();

		echo '<div class="grid grid-', $args['cols'], '">', do_shortcode($content), '</div>';

		return ob_get_clean();
	},

	# [grid_item]
	'grid_item' => function($args, $content) {
		return '<div class="item">'. do_shortcode($content) .'</div>';
	},
)))

->addWidgets(array(
	# Just a test box
	array(
		'id' => 'testbox',
		'title' => 'testbox',
		'desc' => 'Keep a secret!',
		'fields' => array(
			array(
				'name' => 'title',
				'id' => 'title',
				'type' => 'text',
			),
		),

		'output' => '',
	),
))

// -----------------------------------------------

->render();

// -----------------------------------------------
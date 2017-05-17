<?php
class Footer_Block extends WP_Widget {
	function __construct() {
		parent::__construct(
			false,
			"Footer",
			["description" => "Add Footer information"]
		);
	}

	function widget($args, $data) {
		include "views/widget.php";
	}

	function form($data) {
		include "views/edit.php";
		wp_enqueue_media();
		
        wp_enqueue_script(
			"item_widget",
			"/wp-content/themes/Sebastian/widgets/footer/js/main.js",
			array("jquery")
       );
	}

	function update($new, $old) {
		$data = [];
		$fields = [
			"phone_number",
			"email_address",
			"website_url",
			"street_address"
		];
		foreach ($fields as $i) {
			$data[$i] = $new[$i];
		}
		return $data;
	}
};

if (!function_exists("array_get")) {
	function array_get($arr, $key, $default = "") {
		$value = &$arr[$key];
		if ($value) {
			return $value;
		} else {
			return $default;
		}
	}
}

add_action(
	"widgets_init",
	function() {
		register_widget("Footer_Block");
	}
);
?>
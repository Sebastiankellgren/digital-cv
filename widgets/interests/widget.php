<?php
class Interests_Block extends WP_Widget {
	function __construct() {
		parent::__construct(
			false,
			"Interest",
			["description" => "Add an interest"]
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
			"/wp-content/themes/Sebastian/widgets/interests/js/main.js",
			array("jquery")
       );
	}

	function update($new, $old) {
		$data = [];
		$fields = [
			"interest_header",
			"interest_icon",
			"interest_background",
			"interest_description"
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
		register_widget("Interests_Block");
	}
);
?>
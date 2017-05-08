<?php
class Colors_Block extends WP_Widget {
	function __construct() {
		parent::__construct(
			false,
			"Colors",
			["description" => "Add colors to the blocks"]
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
			"/wp-content/themes/Sebastian/widgets/colors/js/main.js",
			array("jquery")
       );
	}

	function update($new, $old) {
		$data = [];
		$fields = [
			"top_color",
			"interests_color",
			"education_color",
			"knowledge_color",
			"employment_color",
			"contact_color",
			"footer_color",
			"interests_background_color",
			"education_background_color",
			"knowledge_background_color",
			"employment_background_color",
			"contact_background_color",
			"footer_background_color"
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
		register_widget("Colors_Block");
	}
);
?>
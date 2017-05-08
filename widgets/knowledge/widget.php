<?php
class Knowledge_Block extends WP_Widget {
	function __construct() {
		parent::__construct(
			false,
			"Knowledge",
			["description" => "Add a knowledge"]
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
			"/wp-content/themes/Sebastian/widgets/knowledge/js/main.js",
			array("jquery")
       );
	}

	function update($new, $old) {
		$data = [];
		$fields = [
			"knowledge_header",
			"knowledge_level"
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
		register_widget("Knowledge_Block");
	}
);
?>
<script>
	var baseUrl = "<?php echo get_bloginfo("url"); ?>/Sebastian";
</script>

<div class="item-widget-form">
	<p class="attr">
		<label>Top image:</label>
		<input name="<?= $this->get_field_name("top_background"); ?>" class="widefat" type="text" value="<?= array_get($data, "top_background"); ?>">
		<input class="upload_image_button button button-primary" type="button" value="Välj bild" style="margin-top: 10px;">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Middle image:</label>
		<input name="<?= $this->get_field_name("middle_background"); ?>" class="widefat" type="text" value="<?= array_get($data, "middle_background"); ?>">
		<input class="upload_image_button button button-primary" type="button" value="Välj bild" style="margin-top: 10px;">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Bottom image:</label>
		<input name="<?= $this->get_field_name("bottom_background"); ?>" class="widefat" type="text" value="<?= array_get($data, "bottom_background"); ?>">
		<input class="upload_image_button button button-primary" type="button" value="Välj bild" style="margin-top: 10px;">
	</p>
</div>


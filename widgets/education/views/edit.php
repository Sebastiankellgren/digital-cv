<script>
	var baseUrl = "<?php echo get_bloginfo("url"); ?>/Sebastian";
</script>

<div class="item-widget-form">
	<p class="attr">
		<label>Header:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("education_header"); ?>"
			value="<?= array_get($data, "education_header"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Type of education:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("education_type"); ?>"
			value="<?= array_get($data, "education_type"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Description:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("education_description"); ?>"
			value="<?= array_get($data, "education_description"); ?>">
	</p>
</div>


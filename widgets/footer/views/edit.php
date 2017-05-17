<script>
	var baseUrl = "<?php echo get_bloginfo("url"); ?>/Sebastian";
</script>

<div class="item-widget-form">
	<p class="attr">
		<label>Phone number:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("phone_number"); ?>"
			value="<?= array_get($data, "phone_number"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Email address:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("email_address"); ?>"
			value="<?= array_get($data, "email_address"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Website:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("website_url"); ?>"
			value="<?= array_get($data, "website_url"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Street address:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("street_address"); ?>"
			value="<?= array_get($data, "street_address"); ?>">
	</p>
</div>


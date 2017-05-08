<script>
	var baseUrl = "<?php echo get_bloginfo("url"); ?>/Sebastian";
</script>

<script type='text/javascript'>
	jQuery(document).ready(function($) {
		$('.color-picker').wpColorPicker();
	});
</script>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Top-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("top_color"); ?>"
			value="<?= array_get($data, "top_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Interests-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("interests_color"); ?>"
			value="<?= array_get($data, "interests_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Interests-background color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("interests_background_color"); ?>"
			value="<?= array_get($data, "interests_background_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Educations-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("education_color"); ?>"
			value="<?= array_get($data, "education_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Educations-background color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("education_background_color"); ?>"
			value="<?= array_get($data, "education_background_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Knowledges-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("knowledge_color"); ?>"
			value="<?= array_get($data, "knowledge_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Knowledges-background color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("knowledge_background_color"); ?>"
			value="<?= array_get($data, "knowledge_background_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Employments-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("employment_color"); ?>"
			value="<?= array_get($data, "employment_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Employments-background color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("employment_background_color"); ?>"
			value="<?= array_get($data, "employment_background_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Contact-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("contact_color"); ?>"
			value="<?= array_get($data, "contact_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Contact-background color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("contact_background_color"); ?>"
			value="<?= array_get($data, "contact_background_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Footer-color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("footer_color"); ?>"
			value="<?= array_get($data, "footer_color"); ?>">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label style="margin-bottom: 10px; display: block;">Footer-background color:</label>
		<input type="text" class="color-picker"
			name="<?= $this->get_field_name("footer_background_color"); ?>"
			value="<?= array_get($data, "footer_background_color"); ?>">
	</p>
</div>


<script>
	var baseUrl = "<?php echo get_bloginfo("url"); ?>/Sebastian";
</script>

<?php
	$icons = [
		"anchor"     => "Anchor",
		"bath"     => "Bath",
		"beer"     => "Beer",
		"bicycle"     => "Bicycle",
		"binoculars"     => "Binoculars",
		"birthday-cake"     => "Birthday cake",
		"bus"     => "Bus",
		"calculator"     => "Calculator",
		"camera-retro"     => "Camera",
		"car"     => "Car",
		"child"     => "Child",	
		"code"        => "Code",
		"coffee"     => "Coffee",	
		"cutlery"     => "Cutlery",
		"envelope"     => "Envelope",
		"female"     => "Female",
		"futbol-o"        => "Football",
		"gift"     => "Gift",
		"glass"     => "Drink",
		"globe"     => "Globe",
		"graduation-cap"     => "Graduation",
		"life-ring"     => "Life ring",
		"magic"     => "Magic",
		"male"     => "Male",
		"mobile"     => "Mobile",
		"plane" => "Airplane",
		"shopping-cart"     => "Shopping cart",
		"smile-o"     => "Smile",
		"sun-o"     => "Sun",
		"users"       => "People",
		"wifi"     => "Wifi"
	];
?>

<div class="item-widget-form">
	<p class="attr">
		<label>Header:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("interest_header"); ?>"
			value="<?= array_get($data, "interest_header"); ?>">
	</p>
</div>

<p class="attr">
	<label>Icon:</label><br>
	<select name="<?= $this->get_field_name("interest_icon"); ?>">
		<?php
		foreach ($icons as $key => $value) {
			$selected = "";
			$icon = array_get($data, "interest_icon");
			if ($key == $icon) {
				$selected = " selected";
			}
			?>
			<option value="<?= $key; ?>"<?= $selected; ?>><?= $value; ?></option>
			<?php
		}
		?>
	</select>
</p>

<div class="item-widget-form">
	<p class="attr">
		<label>Background image:</label>
		<input name="<?= $this->get_field_name("interest_background"); ?>" class="widefat" type="text" value="<?= array_get($data, "interest_background"); ?>">
		<input class="upload_image_button button button-primary" type="button" value="Välj bild" style="margin-top: 10px;">
	</p>
</div>

<div class="item-widget-form">
	<p class="attr">
		<label>Description:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("interest_description"); ?>"
			value="<?= array_get($data, "interest_description"); ?>">
	</p>
</div>


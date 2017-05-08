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
			name="<?= $this->get_field_name("employment_header"); ?>"
			value="<?= array_get($data, "employment_header"); ?>">
	</p>
</div>

<p class="attr">
	<label>Icon:</label><br>
	<select name="<?= $this->get_field_name("employment_icon"); ?>">
		<?php
		foreach ($icons as $key => $value) {
			$selected = "";
			$icon = array_get($data, "employment_icon");
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
		<label>Description:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("employment_description"); ?>"
			value="<?= array_get($data, "employment_description"); ?>">
	</p>
</div>


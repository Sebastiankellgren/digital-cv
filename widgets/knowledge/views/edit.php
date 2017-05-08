<script>
	var baseUrl = "<?php echo get_bloginfo("url"); ?>/Sebastian";
</script>

<?php
	$levels = [
		"beginner"        => "Beginner",
		"familiar"     => "Familiar",
		"semi-proficient"       => "Semi-proficient",
		"proficient" => "Proficient",
		"expert" => "Expert"
	];
?>

<div class="item-widget-form">
	<p class="attr">
		<label>Header:</label>
		<input type="text" class="widefat"
			name="<?= $this->get_field_name("knowledge_header"); ?>"
			value="<?= array_get($data, "knowledge_header"); ?>">
	</p>
</div>

<p class="attr">
	<label>Level:</label><br>
	<select name="<?= $this->get_field_name("knowledge_level"); ?>">
		<?php
		foreach ($levels as $key => $value) {
			$selected = "";
			$level = array_get($data, "knowledge_level");
			if ($key == $level) {
				$selected = " selected";
			}
			?>
			<option value="<?= $key; ?>"<?= $selected; ?>><?= $value; ?></option>
			<?php
		}
		?>
	</select>
</p>


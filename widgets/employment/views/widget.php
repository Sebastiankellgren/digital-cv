<?php
    $employment_header = array_get($data, "employment_header");
    $employment_icon = array_get($data, "employment_icon");
    $employment_description = array_get($data, "employment_description");
?>

<div class="employment">
    <h3><?= $employment_header ?></h3>
    <i class="fa fa-<?= $employment_icon ?>" aria-hidden="true"></i>
    <p><?= $employment_description ?></p>
</div>
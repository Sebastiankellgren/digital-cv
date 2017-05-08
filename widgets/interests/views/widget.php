<?php
    $interest_header = array_get($data, "interest_header");
    $interest_icon = array_get($data, "interest_icon");
    $interest_background = array_get($data, "interest_background");
    $interest_description = array_get($data, "interest_description");
?>

<div class="interest-div" style="background: url('<?= $interest_background ?>'); background-size: cover; background-position: center;">
    <div class="interest-intro">
        <h3><?= $interest_header ?></h3>
        <i class="fa fa-<?= $interest_icon ?>" aria-hidden="true"></i>
    </div>
    <div class="interest-info">
        <p><?= $interest_description ?></p>
    </div>
</div>
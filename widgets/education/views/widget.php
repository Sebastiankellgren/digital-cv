<?php
    $education_header = array_get($data, "education_header");
    $education_type = array_get($data, "education_type");
    $education_description = array_get($data, "education_description");
?>

<div class="education">
    <div class="circle"></div>
    <div class="verticalLine second"></div>
    <h3><?= $education_header ?></h3>
    <h4><?= $education_type ?></h4>
    <p><?= $education_description ?></p>
    <div class="verticalLine"></div>
</div>
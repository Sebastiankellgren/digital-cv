<?php
    $top_background = array_get($data, "top_background");
    $middle_background = array_get($data, "middle_background");
    $bottom_background = array_get($data, "bottom_background");
?>

<style>
    .image-breaker {
        background-image: url('<?= $middle_background ?>');
    }
    .image-breaker-2 {
        background-image: url('<?= $bottom_background ?>');
    }
    .top-image {
        background-image: url('<?= $top_background ?>');
    }
</style>
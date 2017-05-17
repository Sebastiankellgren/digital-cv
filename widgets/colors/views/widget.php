<?php
    $top_color = array_get($data, "top_color");
    $interests_color = array_get($data, "interests_color");  
    $interests_background_color = array_get($data, "interests_background_color");
    $education_color = array_get($data, "education_color");
    $education_background_color = array_get($data, "education_background_color");
    $knowledge_color = array_get($data, "knowledge_color");
    $knowledge_background_color = array_get($data, "knowledge_background_color");
    $employment_color = array_get($data, "employment_color");
    $employment_background_color = array_get($data, "employment_background_color");
    $footer_color = array_get($data, "footer_color");
    $footer_background_color = array_get($data, "footer_background_color");
?>

<style>
    footer {
        color: <?= $footer_color ?>;
        background-color: <?= $footer_background_color ?>;
    }
    footer table a {
        color: <?= $footer_color ?>;
    }
    #education {
        color: <?= $education_color ?>;
        background-color: <?= $education_background_color ?>;
    }
    #employment {
        color: <?= $employment_color ?>;
        background-color: <?= $employment_background_color ?>;
    }
    #interests {
        color: <?= $interests_color ?>;
        background-color: <?= $interests_background_color ?>;
    }
    #knowledge {
        color: <?= $knowledge_color ?>;
        background-color: <?= $knowledge_background_color ?>;
    }
    #menu-meny li a, #menu-meny li a:focus, #menu-meny li a:visited, #menu-meny li a:active {
        color: <?= $top_color ?>;
    }
    #menu-mobil-meny li a, #menu-mobil-meny li a:focus, #menu-mobil-meny li a:visited, #menu-mobil-meny li a:active {
        color: <?= $top_color ?>;
    }
    .bar1, .bar2, .bar3 {
        background-color: <?= $top_color ?>;
    }
    .circle {
        background-color: <?= $education_color ?>;
        box-shadow: 0 0 0 2px <?= $education_color ?>;
        border: 4px solid <?= $education_background_color ?>;
    }
    .employment {
        background-color: <?= $employment_color ?>;
        color: <?= $employment_background_color ?>;
    }
    .knowledgeBar {
        background-color: <?= $knowledge_background_color ?>;
        border: 2px solid <?= $knowledge_color ?>;
    }
    .knowledgeBar .percent {
        background-color: <?= $knowledge_color ?>;
    }
    .menu-meny-container {
        border-bottom: 1px solid <?= $top_color ?>;
    }
    .verticalLine {
        background-color: <?= $education_color ?>;
    }      
</style>
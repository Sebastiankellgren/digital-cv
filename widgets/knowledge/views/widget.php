<?php
    $knowledge_header = array_get($data, "knowledge_header");
    $knowledge_level = array_get($data, "knowledge_level");
?>

<div class="knowledge">
    <span><?= $knowledge_header ?></span>
    <div class="knowledgeBar">
        <div class="percent <?= $knowledge_level ?>"></div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        addWidth();
    });
    
    function addWidth() {
        $('#knowledge').on('inview', function(event, isInView) {
            if (isInView) {
                $(".beginner").css("width", "20%");
                $(".familiar").css("width", "40%");
                $(".semi-proficient").css("width", "60%");
                $(".proficient").css("width", "80%");
                $(".expert").css("width", "100%");
            }
        });        
    }   
</script>
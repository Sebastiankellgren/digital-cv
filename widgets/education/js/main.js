(function($) {
    $(function() {
        $(document).on("click", ".upload_image_button", function() {
            var self  = $(this);
            var input = self.prev();
            var frame = wp.media({
                title   : "Välj bild",
                multiple: false,
                library : {type : "image"},
                button  : {text : "Använd" },
            });
            frame.open();
            frame.on("select", function() {
                var select = frame.state().get("selection").first().toJSON();
               link = select.url;
               link = link.replace(baseUrl, "");
                input.val(link);
                input.trigger("change");
            });
        });
        $(document).on("click", ".upload_background_button", function() {
            var self  = $(this);
            var input = self.prev();
            var frame = wp.media({
                title   : "Välj bild",
                multiple: false,
                library : {type : "image"},
                button  : {text : "Använd" },
            });
            frame.open();
            frame.on("select", function() {
                var select = frame.state().get("selection").first().toJSON();
               link = select.url;
               link = link.replace(baseUrl, "");
                input.val(link);
                input.trigger("change");
            });
        });
    });
})(jQuery);

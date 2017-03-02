$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

    $("#treatment-businessman").click(function() {
        if($("#treatment-businessman").is(':checked')) {
            $("#treatment-businessman_type").removeClass('hidden');
            $("#treatment-businessman_type_label").removeClass('hidden');
        } else {
            $("#treatment-businessman_type").addClass('hidden');
            $("#treatment-businessman_type_label").addClass('hidden');
        }
    })

});

jQuery(document).ready(function($) {
	$(".readmore_c").click(function(event) {
		$(".boxcompare").find(".none_show").removeClass("none_show");
		$(this).remove();
	});
});
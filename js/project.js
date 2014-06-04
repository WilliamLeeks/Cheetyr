// Toggle nav menu
$(".js--nav-toggle").click(function() {
	$(".sidebar").toggle();
	if ( $(this).hasClass("js--nav-toggle--to-x") ) {
		$(this).removeClass("js--nav-toggle--to-x");
		$(this).addClass("js--nav-toggle--from-x");
	}
	else {
		$(this).removeClass("js--nav-toggle--from-x");
		$(this).addClass("js--nav-toggle--to-x");
	}
});

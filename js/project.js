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

// Provide fallbacks for SVG images
if (!Modernizr.svg) {
  $(".brand").attr("src", "img/cheetyr-logo.png");
  $(".wl-brand").attr("src", "img/william-leeks-logo.png");
}

// Initiate live filter
$(function() {
    $('#search-sheet').fastLiveFilter('.command-list');
});

// Check if lists are hidden
function checkEmptyLists() {
	$(".command-list").filter(function() {
		return ($(this).children(":visible").length == 0)
	}).addClass('no-border').prev().hide();
}
myVar = setInterval(checkEmptyLists, 100);

function checkLists() {
	$(".command-list").filter(function() {
		return ($(this).children(":visible").length > 0)
	}).removeClass('no-border').prev().show();
}
myVar = setInterval(checkLists, 100);
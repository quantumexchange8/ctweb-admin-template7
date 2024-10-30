$(document).on("click", ".metismenu li a, .navbar-nav  li a", function(e) {
	e.preventDefault();

	var page = $(this).attr("href");
	
	if ($(this).attr("target") == "_self") {window.location.href= page; return true};
	if ($(this).attr("target") == "_blank") window.open(page, "_blank");

	 if (page == "javascript: void(0);") return false;

	window.location.pathname  = page;

	$(".metismenu li, .metismenu li a").removeClass("active");
	$(".metismenu ul").removeClass("in");

	$(".metismenu a").each(function() {
		var pageUrl = window.location.pathname;
		if ($(this).attr("href") == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("mm-active"); // add active to li of the current link
			$(this).parent().parent().addClass("mm-show");
			$(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
			$(this).parent().parent().parent().addClass("mm-active");
			$(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
			$(this).parent().parent().parent().parent().parent().addClass("mm-active");
		}
	});

	$(".navbar-nav a").removeClass("active"); 
	$(".navbar-nav li").removeClass("active"); 
	$(".navbar-nav a").each(function () {
		var pageUrl = window.location.pathname;
		if ( $(this).attr('href') == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("active");
			$(this).parent().parent().addClass("active");
			$(this).parent().parent().parent().addClass("active");
			$(this).parent().parent().parent().parent().addClass("active");
			$(this).parent().parent().parent().parent().parent().addClass("active");
		}
	});

	 if (page == "javascript: void(0);") return false;
	call_ajax_page(page);
});

function call_ajax_page(page) {

	if(page === "/index")
	{
		document.title = "Dashboard | Current Tech Admin & Dashboard Template";
	}
	else
	{
		var title = page.replace(".html", "");
		var title1 = title.replace("-", " ");
		document.title = title1.charAt(0).toUpperCase() + title1.slice(1) + " | Current Tech Admin & Dashboard Template";
	}

	$.ajax({
		url: page,
		cache: false,
		dataType: "html",
		type: "GET",
		success: function(data) {
			$("#result").empty();
			$("#result").html(data);
			window.location.pathname  = page;
			$(window).scrollTop(0);
		}
	});
}

$(document).ready(function() {
	 var path = window.location.pathname;
	if (path == "/index") {
		call_ajax_page("/index");
	} else {
		call_ajax_page("/index");
	}
});
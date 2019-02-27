$(document).ready(function() {
	$('.navbar-nav li').addClass('nav-item');
    $('.navbar-nav a').addClass('nav-link');
    $('.current_page_item').addClass('active');
	$('.menu-item-has-children').addClass('dropdown');
	$('.sub-menu').addClass('dropdown-content');
	$('.fa-search').click(function cl(){
		if($('.search-form').css('display')=='flex'){
			$('.search-form').css('display','none');
		}else {
			$('.search-form').css('display','flex');
			$('#s').focus();
		}
	});
});

$(function() {

	$(".searchIcon").click(function(){
		$(".productSearch, .productSearch .productSearchInput, .productSearch .searchIcon").toggleClass("active");
		$(".productSearchInput").focus();
	});

});
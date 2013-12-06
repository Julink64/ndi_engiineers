$(function() {
	// for each li.docsetPlus
	$("li.docsetPlus").each(function() {
		// grab its child ul
		var newUL = $(this).find("ul.plus");

		this.onmouseover = function() {
			this.style.cursor = "pointer";
			$(newUL).show();
		};

		this.onmouseout = function() {
			this.style.cursor = "default";
			$(newUL).hide();
		};
	});
});

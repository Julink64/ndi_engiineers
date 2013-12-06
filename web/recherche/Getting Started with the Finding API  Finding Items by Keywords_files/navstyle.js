var assetPath;
var rootPath;

var headerHeight = 81;
var sidebarWidth = 280;

var docLeft = sidebarWidth + 18 + 3  // scroll width 18, 3 border

var animation_speed = 60;

var borderPad = 20;
var docGutter = 20;
var elementPad = 15;

var windowHeight = $(window).height();
var windowWidth = $(window).width();

var googBoxWidth = 150;


var loadedToc = function() {
	// check what is in div#tocnav; if it is 0 length, no toc was loaded (there was no _toc.html) so collapse the window
	var tocContent = $("#tocnav").html();
	if (tocContent === "Loading..." || tocContent === "") {
 		// hide the selection tab
 		$('#doc').stop().animate({"left": 0, "width": windowWidth-57, "border-left":"4px solid #92C5E7"}, animation_speed, function() {
 			$('#sidebarButton').hide();
 		});

 		return;
	}

	styleTheTocNav();

	// if there is a TOC entry corresponding to the current URL,
	// - highlight that entry
	// - expand its container and parent containers to the top of the TOC
	var matchedLI = highlightCorrespondingLI();
	if (matchedLI) {
		expandMatchedLI(matchedLI);
	}
	else {
//		alert("no match in nav");
	}
}



function hideSideBar() {
	$('#sidebarButton').hide();
	$('#sidebarButton').stop().css('background-image', 'url("' + assetPath + 'sideNavOver.png")');

	// animation
	var leftRightShift = sidebarWidth+borderPad+7;
	$('#sidebar').stop().animate({marginLeft: -leftRightShift}, animation_speed).addClass('flag');
	// blue tab
//        $('#sidebarButton').stop().animate({left: 3}, animation_speed);
	$('#doc').stop().animate({"left": 0, "width": windowWidth-57, "border-left":"4px solid #92C5E7"}, animation_speed, function() {
		$('#sidebarButton').show().css({"left": 3, "height":49, "width":16, "top":17});
	});
}


var docs = {
  init: function() {
		getPathToAssets();

		// if there is a midnav highlight instruction in the current doc page,
		//  this highlights a mid nav link IF such matches the instruction
		highlightCorrespondingMidNav();


		// load the appropriate toc, if any;
		// first, check if there is an in-page instruction to not display toc (<a name="navisntr" value="BLAH"> </a>)
		var navinstrs = $("a.navinstr");
		if (navinstrs.length > 0) {
			// the instruction is in the 'value' attribute
			var navinstr = $(navinstrs[0]).attr("value");
			if (navinstr === 'notoc') {
				// hide the selection tab
				$('#doc').stop().animate({"left": 0, "width": windowWidth-57-18, "border-left":"4px solid #92C5E7"}, animation_speed, function() {
					$('#sidebarButton').hide();
					docLeft = 0;
				});
			}
		}
		else {
			$("#tocnav").text("");
			// this two arg form results in (allowed) GET; three arg form triggers disallowed POST (405 Method Not Allowed)
			$("#tocnav").load("_toc.html", loadedToc);
		}


		// prepare the search box
		var gsbt = $("input#gsbt");
		gsbt.css({"color":"#cccccc"});
		gsbt.val("Search text");
		gsbt.change(function() {
			// if the value found in the search box is "Search text", blank the box
			if (gsbt.val() === "Search text") {
				gsbt.val("");
				gsbt.css({"color":"#000000"});
			}
		});
		gsbt.click(function() { gsbt.change();});

		var magglass = $("img#magglass");
		magglass.css( 'cursor', 'pointer' );
		magglass.click(function() {
			if (gsbt.val() != "Search text") {
				$("form#gsb").submit();
			}
		});


		// event: window resize
		$(window).on('resize', function() {
			windowWidth = $(window).width();
			windowHeight = $(window).height();
			var left;

      $('#doc').css("width", windowWidth-docLeft-40);
      $('#doc').css("height", windowHeight-headerHeight);
      $('#sidebar').css("height", windowHeight-headerHeight-17);
		});

		// display
		$(window).trigger('resize');


		// prepare the search form to search eBay sites via google
		$("form#gsb").submit(function() {
			// https://www.google.com/#hl=en&safe=off&tbo=d&output=search&sclient=psy-ab&q="listing"+site:developer.ebay.com/DevZone/guides/ebayfeatures/
			var s1 = 'developer.ebay.com/DevZone/guides/ebayfeatures/';
			var s2 = 'developer.ebay.com/DevZone/shopping/';
			var s3 = 'developer.ebay.com/DevZone/XML/docs/Reference/ebay/';
			var s4 = 'developer.ebay.com/DevZone/';
			var searchUrl = 'https://www.google.com/#&q="' + $("input#gsbt").val() + '"' + '+site:' + s1 + '+OR+site:' + s2 + '+OR+site:' + s3 + '+OR+site:' + s4;
			location.href = searchUrl;
			return false;
		});
	},


	prepSidebar: function() {
		// add click event handler to sidebarButton
    $('#sidebarButton').on('click', function() {

			// event: "hide"
      if (!$('#sidebar').hasClass('flag')) {
        hideSideBar();
			}

			// event: "show"
      else {
				$('#sidebarButton').hide();
				$('#sidebarButton').stop().css('background-image', 'url("' + assetPath + 'sideNavOut.png")');

				// animation
        $('#sidebar').stop().animate({marginLeft: 0}, animation_speed).removeClass('flag');
//				// little gray triangle
//        $('#sidebarButton').stop().animate({left: sidebarWidth + 8}, animation_speed);
				// blue tab
//        $('#sidebarButton').stop().animate({left: sidebarWidth - 28}, animation_speed);
        $('#doc').stop().animate({left: sidebarWidth + 4, width: windowWidth-docLeft-40}, animation_speed, function() {
					$('#sidebarButton').show().css({"left": sidebarWidth - 15, "height":18, "width":18, "top":0});
				});
      }
    });
  }
}


var styleTheTocNav = function() {
//	$("#sidebar").height(windowHeight-headerHeight);
	$("#tocnavtop").css("display", "block");

	// act on each SPAN in the TOC
	$("#tocnav span").each(function() {
		var span = this;

		// set the click behavior of the span: toggle the expand/collapse of the ul
		span.onclick = function() {
			var ul = $(span).prev();
			if ($(ul).css("display") === "block") {
				$(ul).css("display", "none");
				this.className = "collapsed";
			}
			else {
				$(ul).css("display", "block");
				this.className = "expanded";
			}
		};

		// set the mouseover behavior for the span: change its icon till mouseout
		span.onmouseover = function() {
			if (span.className == "collapsed") {
				span.className = "collapsedHover";
			}
			else if (span.className == "expanded") {
				span.className = "expandedHover";
			};
		};

		// set the mouseout behavior for the span: change its icon back from mouseover icon
		span.onmouseout = function() {
			if (span.className == "collapsedHover") {
				span.className = "collapsed";
			}
			else if (span.className == "expandedHover") {
				span.className = "expanded";
			};
		};
	});
};


function highlightCorrespondingMidNav() {
	// if the doc contains navhighlight instructions, seek a match in the mid nav
	// marker for navhighlight has this form:   <a class="navhighlight" value="<doc title>"> </a>
	var hiliteMarkers = $("a.navhighlight");
	if (hiliteMarkers.length > 0) {
		for (var j = 0; j < hiliteMarkers.length; j++) {
			var hiliteMarker = hiliteMarkers[j];

			var textToMatch = $(hiliteMarker).attr("value");

			// highlight any match in the mid nav
			var docsetAllListItems = $("div#docsetAll li");
			for (var i = 0; i < docsetAllListItems.length; i++) {
				var curListItem = docsetAllListItems[i];
				var curVal = $(curListItem).text();
				curVal = $.trim(curVal);
				if (curVal === textToMatch) {
					// switch the item's class
					$(curListItem).addClass("selected");
					// replace the a.href part of this with plain text
					$(curListItem).text(curVal);
					break;
				}
			}
		}
	}
}


function highlightCorrespondingLI() {
	// if the doc contains navhighlight instructions, seek a match in the left nav
	// marker for navhighlight has this form:   <a class="navhighlight" value="<doc title>"> </a>
	var hiliteMarkers = $("a.navhighlight");
	if (hiliteMarkers.length > 0) {
		var liMatched = 0;
		for (var j = 0; j < hiliteMarkers.length; j++) {
			var hiliteMarker = hiliteMarkers[j];

			var textToMatch = $(hiliteMarker).attr("value");

			// highlight any match in the left nav (note: it is okay to also have found a match in midnav; e.g. Making an API Call);
			// we can't simply inspect the text of the LIs for that would include the text of an LI's sub LIs;
			// so we need to inspect the text of every A tag under tocnav; then, if a match is found, isolate the LI and highlight it
			var tocnavAnchorItems = $("#tocnav a");
			for (var i = 0; i < tocnavAnchorItems.length; i++) {
				var curListItem = tocnavAnchorItems[i];
				var curVal = $(curListItem).text();
				curVal = $.trim(curVal);
				if (curVal === textToMatch) {
					// highlight the LI
					$(curListItem).css("font-weight","bold");
					liMatched = 1;
					break;
				}
			}
		}

		// we're here because a highlight instruction was provided;
		//  therefore, we should stop now and not "find a match in the left nav for the current URL"
		if (liMatched) {
			return;
		}
	}


	// get the actual url; derive the target href page relative to this page
	var url = '' + location;
	var suffix = url.substr(url.indexOf(rootPath) + rootPath.length + 1);

	// relative path development:  each / in suffix translates to '../'
	var relPath = '';
	var arr = suffix.split("/"); 	// the array has one more cell than there are slashes, so...
	for (var i = 0; i < arr.length-1; i++) {
		relPath += '../';
	}

	// logic problem: we need to highlight "the best match" for blah.html OR blah.html#anchor, and the
	// user might provide either;  further, we have to deal with the possibility of both or just one existing in the TOC;
	// therefore we search for the NoAnchor version, keep track of a backup link if we find no match, and go with an exact match if found

	var desiredHref = relPath + suffix;
	var desiredHrefNoAnchor = desiredHref;
	if (desiredHref.indexOf("#") > -1) {
		desiredHrefNoAnchor = desiredHref.substr(0, desiredHref.indexOf("#"));
	}
//alert("rootPath: " + rootPath + "\nurl: " + url + "\nsuffix: " + suffix + "\nrelPath: " + relPath + "\ndesiredHref: " + desiredHref + "\ndesiredHrefNoAnchor: " + desiredHrefNoAnchor);

	// get all hrefs that at least START with the no anchor version (whether they include an #anchor or not)




	var allHrefs = $("#tocnav a");

	var matchedLI;
	var backupHref;
	// seek an exact match; accept a close match
	for (var i = 0; i < allHrefs.length; i++) {
		var curHref = $(allHrefs[i]).attr("href");
		if (typeof curHref === 'undefined') {
			continue;
		}

		if (curHref.indexOf("http://iweb") > -1) {
			var ixRoot = curHref.indexOf(rootPath);
			if (ixRoot > -1) {
				var ixRootUrl = url.indexOf(rootPath);
				// if the href and url don't have the same start, we don't want to analyze further
				if (ixRootUrl != ixRoot) {
					continue;
				}
			}
			curHref = relPath + curHref.substr(ixRoot + rootPath.length + 1);
		}

		// just in case we can't find an exact match by the end, we'll capture a close 2nd, if we can
		if (!backupHref) {
//			alert("consider a backup");
			// hey, if this href is a match, we're outa here
			if (curHref === desiredHref) {
				matchedLI = $(allHrefs[i]).closest('li');
				break;
			}

			// see if this has an anchor
			var ix = curHref.indexOf("#");
			// it has an anchor
			if (ix > -1) {
				// see if the front part is a match
				if (curHref.substr(0,ix) === desiredHref) {
					backupHref = $(allHrefs[i]);
//					alert("backupHref set: " + backupHref);
				}
				else {
					// skip this not-even-close anchor
					continue;
				}
			}
			// it has no anchor
			else {
				// we already established it wasn't an exact match to start with
				continue;
			}
		}

		// if the anchor version matches, we're outa here
		if (curHref === desiredHref) {
			matchedLI = $(allHrefs[i]).closest('li');
			break;
		}
	}

	if (!matchedLI) {
//		alert("exact match not found for " + desiredHref);
		if (backupHref) {
//			alert("using backupHref " + backupHref);
			matchedLI = backupHref.closest('li');
		}
	}

	// if no match was found in the TOC, bail
	if (!matchedLI) {
		return;
	}

	// highlight the matched anchor
	$(matchedLI).css("font-weight","bold");

  return matchedLI;
}


function expandMatchedLI(matchedLI) {
	// right now, every entry is collapsed; we wish to expand each part of the
	//  toc above this matchedLI (by clicking each span in the hierarchy above
	//  this matchedLI; thus, repeat this logic:
	//  get the parent UL of this matchedLI;
	//  if that UL does not have a parent LI, we're at the top, so quit;
	//  otherwise, get the parent LI of that UL and get the last child of that LI,
	//  for that last child is the SPAN which we need to click (thus expanding the
	//  LI of the parent of the matchedLI so we see the matchedLI)

	var parUL = matchedLI.parent();
	// unique case: displaying the very top level, where parUL's parent is a DIV, not an LI
	if ($(parUL).parent().prop("tagName") === "DIV") {
		// since we're at the top, no expansion of span is needed
	}
	else {
		while ($(parUL).parent().prop("tagName") === 'LI') {
			// the parent of the UL is an LI; the LI's last childThing is a span; click that span
			var spanTag = $(parUL).parent().children().last();
			$(spanTag).trigger("click");

			parUL = $(spanTag).parent().parent();
		}
	}

	// to ensure the item is visible (and to scroll up or down if it is not) requires some
	//  strange calculations:
	//  - note the distance of the matchedLI relative to its parent
	//  - recursively upwards, add the distance of it from its parent... but there's a catch:
	//    we can only do this until the current element's grandparent is NOT the top containing UL
	//    (known by its id "tocnavtop"); the totalOffset accumulated so far is a fixed, positive number
	//  - now out of the recursion loop, skip this element's position and then ADD its parent's position,
	//    (where that position varies from positive to negative based on whether it's visible or above
	//    the top edge of the tocnav box)
	//  - we now have a totalOffset which we can check against the top and bottom edges of the
	//    tocnav box (0 and tocnav height) and then scroll if needed to bring the element within the box

	var curElem = matchedLI;
	var totalOffset = $(curElem).position().top;
	curElem = matchedLI.parent();

	if($(curElem).parent().prop("tagName") === 'DIV') {
		// we're already at the top level, so no more offsets to consider
	}
	else {
		while (!($(curElem).parent().parent().prop("tagName") === "UL" && $(curElem).parent().parent().attr("id") === "tocnavtop")) {
			totalOffset += $(curElem).position().top;
			curElem = $(curElem).parent();
		}
	}

	// skip this element's position and add its parent's position
	totalOffset += $(curElem).parent().position().top;
	var curScroll = $("#sidebar").scrollTop();

	var wa = curScroll;
	var wb = curScroll + $("#sidebar").height();

	var cushion = 50;

	if (totalOffset > $("#sidebar").height()) {
		$("#sidebar").scrollTop(totalOffset - wb + cushion);
	}
	else if (totalOffset < 0) {
		$("#sidebar").scrollTop(- totalOffset + cushion);
	}
}


function relPathFromHtmlToScript(htmlPath, scriptPath) {
	// hey, if they're the same page, return blank
	if (htmlPath === scriptPath) {
		return '';
	}

	// force slashes forward in both
	var ixThis = htmlPath.indexOf("\\");
	while (ixThis != -1) {
	  htmlPath = htmlPath.replace("\\", "/");
	}
	var ixTarget = scriptPath.indexOf("\\");
	while (ixTarget != -1) {
	  scriptPath = scriptPath.replace("\\", "/");
	}


  // while the start of each path is the same (that is, before the
  // first slash), drop that much, and test again
  // (this test only makes sense if both contain a slash)
  ixThis = htmlPath.indexOf("/");
  ixTarget = scriptPath.indexOf("/");
  while (ixThis != -1 && ixTarget != -1) {
		// split at that first slash
		var thisFront = htmlPath.substr(0,ixThis);
		var thisTheRest = htmlPath.substr(ixThis+1);
//alert("thisFront: " + thisFront + "\nthisTheRest: " + thisTheRest);

		// split at that first slash
		var targetFront = scriptPath.substr(0,ixTarget);
		var targetTheRest = scriptPath.substr(ixTarget+1);
//alert("targetFront: " + targetFront + "\ntargetTheRest: " + targetTheRest);

		// if they have the same start, drop the start completely
		if (thisFront === targetFront) {
			htmlPath = thisTheRest;
			scriptPath = targetTheRest;

			// prep for the next portion
			ixThis = htmlPath.indexOf("/");
			ixTarget = scriptPath.indexOf("/");
		}
		// otherwise, the starts don't match, so bail
		else {
			break;
		}
	}

	// at this point, we have dissimilar suffices; look at htmlPath to
	// see how many folders remain, where there is a '/' for each folder,
	// and form a "../" for each folder
	var arr = htmlPath.split("/");
	var numSlashes = arr.length - 1;
	var relPath = '';
	for (var i = 0; i < numSlashes; i++) {
		relPath += '../';
	}

  // append whatever remains of scriptPath
  result = relPath + scriptPath;

	return result;
}


function getPathToAssets() {
	if (typeof rootPath === "undefined") {
		// doc pages in different folders call this navstyle.js; the "assetPath" for the graphic used by
		// the sidebarButton (see onclick) depends on the relative path from the page using navstyle.js and the location of navstyle.js

		// logic would suggest we could derive that relative path (and thus assetPath) from the full
		//  URL of the html page and the location of navstyle.js (noted via <script> in that page)
		// unfortunately,


		var scriptTag = $('script[src*="navstyle.js"]')[0];

		// we need ENOUGH of the path to /assets/ to construct relative path from the html page to it;
		//  unfortunately, NOT all combinations of browser and local/http provide a full value via 'src';
		//  to get a full value, we have to pick the longer of 'src' AND getAttribute('src', -1)
		//  for the same <script> tag
		var test1 = scriptTag.src;
		var test2 = scriptTag.getAttribute('src', -1);
		var scriptSrcPath;
		if (test1.length > test2.length) {
			scriptSrcPath = test1;
		}
		else {
			scriptSrcPath = test2;
		}

		// now that we have a decent path, we can isolate the name of the folder containing /assets/  (e.g. 'ebayfeatures')
		rootPath = scriptSrcPath.substr(0, scriptSrcPath.indexOf("/assets/"));
		rootPath = rootPath.substr(rootPath.lastIndexOf("/") + 1);
	}

	if (typeof assetPath === "undefined") {
		scriptSrcPath = scriptSrcPath.substr(scriptSrcPath.indexOf(rootPath));

		var docPage = window.location.pathname
		docPage = docPage.substr(docPage.indexOf(rootPath));

		// determine the path from the doc to the script
		var relPathFrHtmlToScr = relPathFromHtmlToScript(docPage, scriptSrcPath);

		// assetPath is relPath without the /navstyle.js
		assetPath = relPathFrHtmlToScr.substr(0, relPathFrHtmlToScr.indexOf("navstyle.js"));

		var debug = "scriptSrcPath: " + scriptSrcPath + "\ndocPage: " + docPage + "\nrelPathFrHtmlToScr: " + relPathFrHtmlToScr + "\nassetPath: " + assetPath;
//		alert("debug:\n" + debug);
	}
}


$(function() {
  docs.init();
  docs.prepSidebar();
});

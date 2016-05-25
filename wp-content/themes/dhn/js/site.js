$(document).ready(function() {
	$('.tile-boxes>ul>li').wrapInner('<div class="inner"></div>');

	$('.tile-boxes>ul').masonry({
		itemSelector: 'li',
		percentPosition: true
	});

	$('.tile-grid').masonry({
		itemSelector: '.grid-item',
		percentPosition: true
	});
});
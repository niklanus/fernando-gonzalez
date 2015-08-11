<?php include_once('../includes/db.php') ?>
<?php include_once('../includes/functions.php') ?>

<div class="cbp-l-grid-work cbp cbp-caption-fadeIn cbp-obras">
	<?php print(works_portfolio()); ?>
</div>

<script>
	(function($, window, document, undefined) {
	    'use strict';

	    var gridContainer = $('.cbp-obras'),
	        filtersContainer = $('.cbp-obras-filters'),
	        wrap, filtersCallback;

	    gridContainer.cubeportfolio({
	        layoutMode: 'grid',
	        rewindNav: true,
	        scrollByPage: false,
	        defaultFilter: '*',
	        animationType: 'scaleSides',
	        gapHorizontal: 4,
	        gapVertical: 4,
	        gridAdjustment: 'responsive',
	        mediaQueries: [{
	            width: 900,
	            cols: 3
	        }, {
	            width: 500,
	            cols: 2
	        }, {
	            width: 400,
	            cols: 1
	        }],
	        caption: 'zoom',
	        displayType: 'sequentially',
	        displayTypeSpeed: 100
	        }
	    );
	})(jQuery, window, document);
</script>
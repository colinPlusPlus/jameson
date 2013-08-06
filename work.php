<?php $thisPage="Our Work"; ?>
<?php include('header.php')?>


<!--Scrollable-->
	<!-- wrapper element for the large image -->
	<div id="image_wrap">
		<!-- Initially the image is a simple 1x1 pixel transparent GIF -->
		<img src="img/" style="height:500px;"/>
	</div>
<div style="margin:0 auto; margin-bottom:20px; width: 634px; height:120px;">
	<!-- "previous page" action -->
	<a class="prev browse left"><!-- <img src="img/LeftArr.png" alt="next" /> --><i class="icon-chevron-left icon-white"></i></a>

	<!-- root element for scrollable -->
	<div class="scrollable" id="scrollable">

		<!-- root element for the items -->
		<div class="items">

			<!-- 1-5 -->
			<div>
				<img src="img/slideshow/backyard.png"/>
				<img src="img/slideshow/backyard2.png" />
				<img src="img/slideshow/backyard3.png" />
				<img src="img/slideshow/backyard4.png" />
			</div>

			<!-- 5-10 -->
			<div>
				<img src="img/slideshow/backyard5.png" />
				<img src="img/slideshow/backyard6.png" />
				<img src="img/slideshow/bar.png" />
				<img src="img/slideshow/bar2.png" />
			</div>

			<!-- 10-15 -->
			<div>
				<img src="img/slideshow/church.png" />
				<img src="img/slideshow/church1.png" />
				<img src="img/slideshow/customhouse.png" />
				<img src="img/slideshow/CustomInterior.png" />
			</div>

			<!-- 16-20 -->
			<div>
				<img src="img/slideshow/Deck.png" />
				<img src="img/slideshow/house1.png" />
				<img src="img/slideshow/Landscaping.png" />
				<img src="img/slideshow/landscaping2.png" />
			</div>

			<!-- 21-25 -->
			<div>
				<img src="img/slideshow/pic1.png" />
				<img src="img/slideshow/PoolHouse.png" />
				<img src="img/slideshow/Roof.png" />
				<img src="img/slideshow/roof2.png" />
			</div>
			
			<div>
				<img src="img/slideshow/secondstorey.png" />
				<img src="img/slideshow/unfinished.png" />
			</div>

		</div>

	</div>

	<!-- "next page" action -->
	<a class="next browse right"><!-- <img src="img/RightArr.png" alt="next" /> --><i class="icon-chevron-right icon-white"></i></a>
</div>



<?php include('footer.php')?>
<div id="push"></div>

</div>
</div>
<div id="footer">
	<div class="row-fluid">
      <div class="container" style="padding-top:10px;">
		  <div class="span6">
		  	<p class="muted credit">Jameson's Pro Builder All Rights Reserved</p>
		  </div>
		  <div class="span6">
			  <p class="muted credit pull-right">Site Designed By <a href="http://www.Christellamorris.com">CM</a> </p>
		  </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dropcaptions.js"></script>
	
	<script>
    $(document).ready(function() {

      $('#myCarousel').carousel({
        interval: 8000
        })
      $('#myCarousel2').carousel({
        interval: 5000
        })

      //Initiate scrollable as normal
	  $(".scrollable").scrollable();
      
      });
      
    $(".items img").click(function() {
		// see if same thumb is being clicked
		if ($(this).hasClass("active")) { return; }
 
		// calclulate large image's URL based on the thumbnail URL (flickr specific)
		var url = $(this).attr("src").replace("_t", "");
 
		// get handle to element that wraps the image and make it semi-transparent
		var wrap = $("#image_wrap").fadeTo("slow", 0.5);
	 
		// the large image from www.flickr.com
		var img = new Image();
	 
	
		// call this function after it's loaded
		img.onload = function() {
	 
			// make wrapper fully visible
			wrap.fadeTo("slow", 1);
	 
			// change the image
			wrap.find("img").attr("src", url);
	 
		};
 
		// begin loading the image from www.flickr.com
		img.src = url;
 
		// activate item
		$(".items img").removeClass("active");
		$(this).addClass("active");
 
		// when page loads simulate a "click" on the first image
	}).filter(":first").click();
	

    </script>


  </body>
</html>
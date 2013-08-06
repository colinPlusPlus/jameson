<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="index.php">Custom Homes & Landscape Design</a>
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li<?php if ($thisPage=="Home")
						echo " class=\"active\""; ?>>
						<a href="index.php">Home</a></li>
					<li<?php if ($thisPage=="About Us") 
						echo " class=\"active\""; ?>>
						<a href="about.php">About Us</a></li>
					<li<?php if ($thisPage=="Our Work") 
						echo " class=\"active\""; ?>>
						<a href="work.php">Our Work</a></li>
						<li<?php if ($thisPage=="Contact Us") 
						echo " class=\"active\""; ?>>
						<a href="contact-us.php">Contact Us</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>



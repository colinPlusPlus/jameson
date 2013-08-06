<?php $thisPage="Contact Us"; ?>
<?php include('header.php'); ?>

<div class="page-header" style="margin-bottom:10px;">
	<div class="container">
		<h3 style="color: #fff">Send us a message <small>We'd love to hear from you</small></h3>
	</div>
</div>
<div class="row-fluid">
	<div class="well">
		<div class="container">
			<div class=" span6">
				<form name="contactform" method="post" action="send_form_email.php" class="form-horizontal">

					<fieldset>
					
						<input type="hidden" value="$previous" />
						
						<div class="control-group">
							<label class="control-label" for="first_name">First Name</label>
							<div class="controls">
								<input  tabindex="1" type="text" name="first_name" maxlength="50" size="30" placeholder="First Name" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="last_name">Last Name</label>
							<div class="controls">
								<input  tabindex="2" type="text" name="last_name" maxlength="50" size="30" placeholder="Last Name" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">Email Address </label>
							<div class="controls">
								<input  tabindex="3" type="email" name="email" maxlength="80" size="30" placeholder="username@provider.com" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" type="text" for="telephone">Phone Number</label>
							<div class="controls">
								<input  tabindex="4" type="text" name="telephone" maxlength="30" size="30" placeholder="xxx-xxx-xxxx">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="comments">Message</label>
							<div class="controls">
								<textarea  tabindex="5" name="comments" maxlength="1000" class="input-xlarge" rows="10" cols="50" required></textarea> 
							</div>
						</div>
			
					</fieldset>                          

					<div class="controls">
						<button input type="submit" value="Submit" class="btn btn-primary">Submit</button>  
					</div>
				</form>
			</div>


			<div class="span6">
				<iframe width="500" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=pickering&amp;hl=en&amp;ie=UTF8&amp;hq=&amp;hnear=Pickering,+Durham+Regional+Municipality,+Ontario&amp;t=m&amp;ll=43.838365,-79.0868&amp;spn=0.061909,0.086002&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?q=pickering&amp;hl=en&amp;ie=UTF8&amp;hq=&amp;hnear=Pickering,+Durham+Regional+Municipality,+Ontario&amp;t=m&amp;ll=43.838365,-79.0868&amp;spn=0.061909,0.086002&amp;z=13&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div>
		</div>
	</div>
</div>
 <?php include('footer.php'); ?>


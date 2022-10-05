<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php include('head.php');?>
<!-- Document Title
	============================================= -->
	<title>GreenbayPackers</title>
	<meta name="xtz jhj">
	

</head>
<?php include('header.php'); ?>
	<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact Us</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="contact.php">Contact us</a></li>
					
				</ol>
			</div>

		</section><!-- #page-title end -->
<br>
<section id="map-overlay">
<div class="container">

				<div class="row">
					<!-- Contact Form Overlay
					============================================= -->
					<div class="contact-form-overlay col-md-8 offset-md-2 p-5">

						<div class="fancy-title title-border">
							<h3>Send us an Email</h3>
						</div>

						<div class="form-widget">

							<div class="form-result"></div>

							<!-- Contact Form
							============================================= -->
							<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

								<div class="col-md-6 form-group">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="w-100"></div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="required phone sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">House Moving</option>
										<option value="PHP / MySQL">Bike & Car Shifting</option>
										<option value="HTML5 / CSS3">Office Shifting</option>
										<option value="Graphic Design">Storage Service</option>
									</select>
								</div>

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col-12 form-group d-none">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>
						</div>

						<div class="line"></div>

						<div class="row col-mb-50">
							<!-- Contact Info
							============================================= -->
							<div class="col-md-4">
								<!--<address>
									<strong>Headquarters:</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107<br>
								</address>
								
-->
								<abbr title="Email Address"><strong>Email:</strong></abbr> contact@greenbaypackers.com
							</div><!-- Contact Info End -->

							
						</div>

					</div><!-- Contact Form Overlay End -->
				</div>

			</div>

		
		</section><!-- Contact Form & Map Overlay Section End -->





<?php
include('footer.php');
?>
</html>
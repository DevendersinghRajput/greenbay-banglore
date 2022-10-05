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
<br>
<section class="section-1">

<div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <br>

              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
                <h2>Contact us</h2>
                <p><strong>Main Office :</strong> 1095, 2nd Cross Rd, Marathahalli Village, Marathahalli, Bengaluru, Karnataka
                <br> Pincode - 560037</p>
                <p><strong>Mail :</strong> Contact@greenbaypackerslockerroom.com</p>
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
        <option value="House Moving">House Moving</option>
        <option value="Bike & Car Shifting">Bike & Car Shifting</option>
        <option value="Office Moving">Office Shifting</option>
        <option value="Storage service">Storage Service</option>
    </select>
</div>

<div class="w-100"></div>



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
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<?php
include('footer.php');
?>
</html>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0 dark bg-color">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-6">
						<img src="images/logo2.svg">
							<p class="text-white"> <b> Moving You Closer To Your Dreams</b></p>
							<div class="clear"></div>
							<div>
								<a href="#" class="social-icon me-2 si-light si-rounded si-small si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon me-2 si-light si-rounded si-small si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon si-small si-instagram" title="instagram">
<i class="icon-instagram"></i>
<i class="icon-instagram"></i>
</a>

							</div>
						</div>
						
						<div class="col-sm-6 col-lg-3">
							<h4>Pages</h4>
							<ul class="list-unstyled mb-0 text-small">
								<li class="mb-2"><a href="index.php" class="text-light">Home</a></li>
								<li class="mb-2"><a href="cost.php" class="text-light">Cost Calculator</a></li>
								<li class="mb-2"><a href="faq.php" class="text-light">Faq</a></li>
								<li class="mb-2"><a href="about.php" class="text-light">About Us</a></li>
								
								
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4>Feature</h4>
							<ul class="list-unstyled mb-0 text-small">
							<li class="mb-2"><a href="Contact.php" class="text-light">Help Center</a></li>
								<li class="mb-2"><a href="#" class="text-light">Privacy</a></li>
								<li><a class="text-light" href="#">Terms</a></li>
							</ul>
						</div>
						
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="dark">

				<div class="container">

					<div class="row align-items-center justify-content-between">
						 <div style="text-align: center;" >
							Copyrights &copy; 2022 Copowered by India<br>
						</div>

					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle bg-color h-bg-dark"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- DatePicker JS -->
	<script src="js/components/moment.js"></script>
	<script src="js/components/daterangepicker.js"></script>

	<!-- Range Slider Plugin -->
	<script src="js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>

		jQuery(document).ready(function() {

			jQuery('.cleaning-date').daterangepicker({
				"buttonClasses": "button button-rounded button-mini nott ls0 fw-semibold",
				"applyClass": "button-color m-0 ms-1",
				"cancelClass": "bg-danger m-0 text-light",
				singleDatePicker: true,
				startDate: moment().startOf('hour'),
				minDate: moment().startOf('date'),
				timePicker: true,
				timePickerSeconds: false,
				locale: {
					format: 'DD/MM/YYYY h:mm a',
				},
				timePickerIncrement: 10
			});

			jQuery('.cleaning-date').val('Select Date & Time');

			jQuery('.form-cleaning').on( 'formSubmitSuccess', function(){
				jQuery('.cleaning-date').val('Select Date & Time');
			});

			// Calculator
			var pricingAREA = 0,
				pricingROOMS = 0,
				pricingBATHROOMS = 0,
				pricingLIVINGROOMS = 0,
				pricingOTHERS = 0,
				elementAREA = $(".clean-area"),
				elementROOMS = $(".clean-rooms"),
				elementBATHROOMS = $(".clean-bathrooms"),
				elementLIVINGROOMS = $(".clean-livingrooms"),
				elementOTHERS = $("input[name='clean-form-others[]']"),
				elementPRICE = $("#clean-form-price");

			elementAREA.ionRangeSlider({
				min: 0,
				max: 500,
				from: 0,
				step: 1,
				max_postfix: "KM.",
				onStart: function(data){
					pricingAREA = data.from;
				}
			});

			elementAREA.on( 'change', function(){
				pricingAREA = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingROOMS = data.from;
				}
			});

			elementROOMS.on( 'onStart change', function(){
				pricingROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementBATHROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingBATHROOMS = data.from;
				}
			});

			elementBATHROOMS.on( 'onStart change', function(){
				pricingBATHROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementLIVINGROOMS.ionRangeSlider({
				min: 0,
				max: 5,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingLIVINGROOMS = data.from;
				}
			});

			elementLIVINGROOMS.on( 'onStart change', function(){
				pricingLIVINGROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementOTHERS.change(function(){
				var pricingOTHERS = 0;
				elementOTHERS.each(function(){
					if($(this).is(':checked')){
						pricingOTHERS += parseFloat($(this).attr('data-price'));
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					} else {
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					}
				});
			});

			calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );

			function calculatePrice( area, rooms, bathrooms, livingrooms, extra ) {
				var TotalPriceValue = ( Number(area) * 50 ) + ( Number(rooms) * 200 ) + ( Number(bathrooms) * 50 ) + ( Number(livingrooms) * 210 ) + ( Number(extra) );
				jQuery('.total-price').html( '₹'+TotalPriceValue );
				elementPRICE.val( TotalPriceValue ).change();
			}

		});

	</script>

</body>

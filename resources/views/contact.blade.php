@extends('welcome')
@section('content')

		<!-- Google Map -->
		<div id="map" class="map">
		</div><!---/map-->
		<!-- End Google Map -->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<div class="headline"><h2>Contacte</h2></div>
					
					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Nume <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Mesaj <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Expediază Mesaj</button></p>
						</fieldset>

						
					</form>
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Detalii</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#"><i class="fa fa-home"></i>36, Dunării Cahul 3909</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>Republica Moldova</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>+373 0299-4-15-30 </a></li>
						<li><a href="#"><i class="fa fa-globe"></i>cihsecretariat@cih.md</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Ore de lucru</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>Luni - Vineri:</strong> 8 - 16</li>
						<li><strong>Sîmbătă:</strong> 9 - 13</li>
						<li><strong>Duminică:</strong> - </li>
					</ul>

				</div><!--/col-md-3-->
			</div><!--/row-->
                </div>
@endsection
<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			ContactPage.initMap();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
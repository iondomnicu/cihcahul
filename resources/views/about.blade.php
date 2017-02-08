@extends('welcome')
@section('content')

		<!--=== Interactive Slider ===-->
		<div class="breadcrumbs-v3 img-v1 text-center">
			<div class="container">
				<h1>Radacinile educatiei sunt amare,</h1>
				<p> dar fructul este dulce. </p>
			</div>
		</div>
		<!--=== End Interactive Slider ===-->

		<!--=== Title v1 ===-->
		<div class="container content-sm">
			<div class="title-v1 no-margin-bottom">
				<p class="no-margin-bottom">Adevarata educatie trebuie sa fie in cele din urma rezervata numai oamenilor care insista a cunoaste, restul nereprezentand decat ducerea la pascut a unei turme de oi</p>
				</div>
			</div>
			<!--=== End Title v1 ===-->

			<!--=== Service Block v4 ===-->
			<div class="service-block-v4">
				<div class="container content-sm">
					<div class="row">
						<div class="col-md-4 service-desc md-margin-bottom-50">
							<i class="icon-diamond"></i>
							<h3>Tehnologii noi</h3>
							<p class="no-margin-bottom">Noile tehnologii au produs schimbări, modificări în toate domeniile și era de așteptat ca la un moment dat acest progres să influențeze și procesul de predare-învățare.Astfel elevii sunt nevoiți să învețe să gestioneze un număr impresionant de informații,să le analizeze, să ia decizii să-și dezvolte cunoștințele pentru a face față provocărilor tehnologice actuale. </p>
						</div>
						<div class="col-md-4 service-desc md-margin-bottom-50">
							<i class="icon-rocket"></i>
							<h3>Dezvoltare</h3>
							<p class="no-margin-bottom">Elementul cheie în educaţie îl reprezintă elevul care trebuie să realizeze o serie de procese pentru a putea cunoaşte şi utiliza practic informaţiile însuşite. O învăţare eficientă presupune mai întâi înţelegerea faptelor, analizarea acestora, formularea unor idei pe baza cunoştinţelor dobândite ulterior, generalizarea şi abstractizarea lor. </p>
						</div>
						<div class="col-md-4 service-desc">
							<i class="icon-support"></i>
							<h3>Suport</h3>
							<p class="no-margin-bottom">Profesorul nu mai este cel care ţine o prelegere în faţa elevilor ci e mediator şi îndrumător în activitatea de învăţare pe care aceştia o parcurg. Predarea se realizează prin utilizarea unor metode activ – participative care să solicite interesul,creativitatea,imaginaţia,implicarea şi participarea elevului,în scopul însuşirii unor cunoştinţe care să–i folosească.</p>
						</div>
					</div><!--/end row-->
				</div><!--/end container-->
			</div>
			<!--=== End Service Block v4 ===-->

			<!--=== Our Skills ===-->
			<div class="container content-sm">
				<div class="headline-center margin-bottom-60">
					<h2>WHY WE ARE GOOD</h2>
					<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
						Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
					</div>

					<div class="row">
						<div class="col-sm-6 md-margin-bottom-50">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
							<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p><br>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-xs-3 text-center">
									<div class="progress progress-u vertical bottom">
										<div class="progress-bar progress-bar-u" role="progressbar" data-height="60"></div>
									</div>
									<span>60%</span>
									<h4>DESIGN</h4>
								</div>
								<div class="col-xs-3 text-center">
									<div class="progress progress-u vertical bottom">
										<div class="progress-bar progress-bar-u" role="progressbar" data-height="76"></div>
									</div>
									<span>76%</span>
									<h4>PHP</h4>
								</div>
								<div class="col-xs-3 text-center">
									<div class="progress progress-u vertical bottom">
										<div class="progress-bar progress-bar-u" role="progressbar" data-height="92"></div>
									</div>
									<span>92%</span>
									<h4>HTML</h4>
								</div>
								<div class="col-xs-3 text-center">
									<div class="progress progress-u vertical bottom">
										<div class="progress-bar progress-bar-u" role="progressbar" data-height="81"></div>
									</div>
									<span>81%</span>
									<h4>CSS</h4>
								</div>
							</div>
						</div>
					</div><!--/end row-->
				</div>
				<!--=== End Our Skills ===-->

				<!--=== Parallax Counter v4 ===-->
				<div class="parallax-counter-v4 parallaxBg">
					<div class="container content-sm">
						<div class="row">
							<div class="col-md-3 col-xs-6 md-margin-bottom-50">
								<i class="icon-cup"></i>
								<span class="counter">265</span>
								<h4>Coffee's Drunk</h4>
							</div>
							<div class="col-md-3 col-xs-6 md-margin-bottom-50">
								<i class="icon-clock"></i>
								<span class="counter">5957</span>
								<h4>Working Hours</h4>
							</div>
							<div class="col-md-3 col-xs-6">
								<i class="icon-emoticon-smile"></i>
								<span class="counter">3495</span>
								<h4>Happy Clients</h4>
							</div>
							<div class="col-md-3 col-xs-6">
								<i class="icon-bulb"></i>
								<span class="counter">576</span>
								<h4>New Ideas</h4>
							</div>
						</div><!--/end row-->
					</div><!--/end container-->
				</div>
				<!--=== End Parallax Counter v4 ===-->

				<!--=== Team v3 ===-->
				<div class="container content-sm">
					<div class="headline-center margin-bottom-60">
						<h2>ECHIPA MANAGERIALA A COLEGIULUI IULIA HASDEU</h2>
						</div>
                                            @foreach($menu as $men)
						<div class="row team-v3">
							<div class="col-md-4">
								<div class="team-img">
									<img class="img-responsive" src="{{$men->image}}" alt="">
									<div class="team-hover">
										<span>Daniel Wearne</span>
										<small>Technical Director</small>
										<p>Lorem ipsum dolor sit ame con sectetur adipisci ng e lit.</p>
										<ul class="list-inline team-social-v3">
											<li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
					
						</div><!--/end row-->
                                                @endforeach
					</div>
					<!--=== End Team v3 ===-->

					
@endsection
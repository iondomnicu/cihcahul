@extends('welcome')
@section('content')
   
		<!--=== Slider ===-->
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
                                <div class="da-slide">
                                </div> 
				<div class="da-slide">
				</div>
				<div class="da-slide">	
				</div>
				<div class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</div>
			</div>
		</div><!--/slider-->
		<!--=== End Slider ===-->

		<!--=== Content Part ===-->
		<div class="container content-sm">
			<!-- Service Blocks -->
			<div class="row margin-bottom-30">
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-compress service-icon"></i>
						<div class="desc">
							<h4>Johann Amos Comenius</h4>
							<p>Natura înzestrează copilul numai cu „semințele științei, ale moralității și religiozității”, ele devin un bun al fiecărui om numai prin educație.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-cogs service-icon"></i>
						<div class="desc">
							<h4>Aristotel</h4>
							<p>Cei care educa copiii sunt demni de mai multa onoare decat cei care le dau viata; de aceea pe langa viata, daruiti copiilor si arta de a trai bine, educandu-i.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-rocket service-icon"></i>
						<div class="desc">
							<h4>Thomas Chandler Haliburton</h4>
							<p>Educatia pe care o primesti la colegiu iti arata cat de putin stim in realitate.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Blokcs -->

			<!-- Recent Works -->
			<div class="headline"><h2>Activități recente</h2></div>
			<div class="row margin-bottom-20">
                             @foreach($articles as $article)
				<div class="col-md-3 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
						<div class="thumbnail-img">
							<div class="overflow-hidden">
								<img class="img-responsive" src="{{$article->image}}" alt="">
							</div>
							<a class="btn-more hover-effect" href="{{route('ShowArticle',['id'=>$article->id])}}">Citește mai mult +</a>
						</div>
						<div class="caption">
							<h3><a class="hover-effect" href="#">{{$article->title}}</a></h3>
							<p>{{$article->description}}</p>
						</div>
					</div>
				</div>
                               @endforeach
				
			</div>
			<!-- End Recent Works -->

			<!-- Info Blokcs -->
			<div class="row margin-bottom-30">
				<!-- Welcome Block -->
				<div class="col-md-8 md-margin-bottom-40">
					<div class="headline"><h2>Welcome To Unify</h2></div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-20" src="assets/img/main/img18.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone.</p>
							<ul class="list-unstyled margin-bottom-20">
								<li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida</li>
								<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
								<li><i class="fa fa-check color-green"></i> Responsive Bootstrap Template</li>
								<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
							</ul>
						</div>
					</div>

					<blockquote class="hero-unify">
						<p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Unify is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
						<small>CEO, Jack Bour</small>
					</blockquote>
				</div><!--/col-md-8-->

				<!-- Latest Shots -->
				<div class="col-md-4">
					<div class="headline"><h2>Ultimele Poze</h2></div>
					<div id="myCarousel" class="carousel slide carousel-v1">
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{URL::asset('assets/img/slider/bg1.jpg')}}" alt="">
								
							</div>
							<div class="item">
								<img src="{{URL::asset('assets/img/slider/bg2.jpg')}}" alt="">
								
							</div>
							<div class="item">
								<img src="{{URL::asset('assets/img/slider/bg3.jpg')}}" alt="">
								
							</div>
						</div>

						<div class="carousel-arrow">
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div><!--/col-md-4-->
			</div>
			<!-- End Info Blokcs -->

			<!-- Owl Clients v1 -->
			<div class="headline"><h2>Colaboratori</h2></div>
			<div class="owl-clients-v1">
				<div class="item">
					<img src="{{URL::asset('assets/img/Colaborators/Cisco.jpg')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/img/Colaborators/allied_testing.jpg')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/img/Colaborators/bina.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/img/Colaborators/microsoft.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/img/Colaborators/red_sky.png')}}" alt="">
				</div>
			</div>
			<!-- End Owl Clients v1 -->
		</div><!--/container-->
		<!-- End Content Part -->
@endsection
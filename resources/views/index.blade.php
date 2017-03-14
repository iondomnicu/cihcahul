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
                         @foreach($sidebar as $article)
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
					<div class="headline"><h2>ECVET</h2></div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-20" src="assets/img/ecvet.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p>EUROPEAN CREDIT SYSTEM FOR VOCATIONAL EDUCATION TRAINING – SISTEMUL EUROPEAN DE CREDITE PENTRU FORMARE EDUCAŢIONALĂ VOCAŢIONALĂ.</p>
                                                        <p>În perioada actuală de competiţie globală intensă, caracterizată totodată de un număr mare de muncitori slab calificaţi şi de o populaţie îmbătrânită, viitorul Europei trebuie să fie asigurat prin competitivitate şi inovare. </p>
                                                        <p>Aproape că nu există un alt sector economic în care flexibilitatea şi mobilitatea forţei de muncă să aibă o atât de mare importanţă. În această etapă mobilitatea este îngreunată datorită lipsei unor calificări şi competenţe transparente şi recunoscute, iar în Europa există o nevoie reală de modele care să permită recunoaşterea reciprocă a competenţelor şi abilităţilor.</p>
                                                </div>
					</div>
				</div><!--/col-md-8-->

	<!-- Latest Shots -->
				<div class="col-md-4 md-margin-bottom-20">
					<div class="headline"><h2>Poze</h2></div>
					<div id="myCarousel" class="carousel slide carousel-v1">
						<div class="carousel-inner" role="listbox">
                                               @foreach($slider as $slide)
                                                   @if ($slide->id == 1)
                                               <div class="item active">
                                                 @else
                                             <div class="item">
                                                @endif  
                                              <img src="{{URL::asset($slide->image)}}" alt="">
                                               </div>
                                                 @endforeach
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
			</div><!--/row-->
			<!-- End Info Blokcs -->

			<!-- Owl Clients v1 -->
			<div class="headline"><h2>Parteneri</h2></div>
			<div class="owl-clients-v1">
                            @foreach($partene as $part)
				<div class="item">
					<img src="{{URL::asset($part->image)}}" alt="">
				</div>
				@endforeach
			</div>
			<!-- End Owl Clients v1 -->
		</div><!--/container-->
		<!-- End Content Part -->
@endsection
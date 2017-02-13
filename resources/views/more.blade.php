@extends('welcome')
@section('content')

		<!--=== Blog Posts ===-->
		<div class="bg-color-light">
			<div class="container content-sm">
				<div class="row">
					<!-- Blog All Posts -->
					<div class="col-md-9">
                                            @if($article)
						<!-- News v3 -->
						<div class="news-v3 bg-color-white margin-bottom-30">
							<img class="img-responsive full-width" src="{{URL::asset($article->image)}}" alt="">
							<div class="news-v3-in">
								<ul class="list-inline posted-info">
									<li>By <a href="#">{{$article->author}}</a></li>
									<li>Postat {{$article->date}}</li>
								</ul>
								<h2><a href="#">{{$article->title}}</a></h2>
								<p>{!!$article->content!!}</p>
							</div>
						</div>
						<!-- End News v3 -->

						
					</div>
					<!-- End Blog Sidebar -->
                                        @include("sidebar")
				</div>
			</div><!--/end container-->
                        @endif

		</div>
		<!--=== End Blog Posts ===-->
@endsection

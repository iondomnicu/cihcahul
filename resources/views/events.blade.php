@extends('welcome')
@section('content')
   
    <!--=== Content Part ===-->
		<div class="container content">
			<div class="row blog-page">
				<!-- Left Sidebar -->
				<div class="col-md-9">
                                    @foreach($articles as $article)
					<!--Blog Post-->
					<div class="blog margin-bottom-40">
						<h2><a href="#">{{$article->title}}</a></h2>
						<div class="blog-post-tags">
							<ul class="list-unstyled list-inline blog-info">
								<li><i class="fa fa-calendar"></i>{{$article->date}}</li>
								<li><i class="fa fa-pencil"></i>{{$article->author}}</li>
							</ul>
						</div>
						<div class="blog-img">
							<img class="img-responsive event_im" src="{{$article->image}}" alt="">
						</div>
						<p>{{$article->description}}</p>
						<p><a class="btn-u btn-u-small" href="{{route('ShowArticle',['id'=>$article->id])}}"><i class="fa fa-plus-sign"></i> Read More</a></p>
					</div>
                                        <hr>
					<!--End Blog Post-->
                                        @endforeach 
					<!--Pagination-->
					<div class="text-center">
						<ul class="pagination">
							<li><a href="#">«</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div>
					<!--End Pagination-->
                                        
				</div>
				<!-- End Left Sidebar -->
                                @include("sidebar")
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->
               
@endsection
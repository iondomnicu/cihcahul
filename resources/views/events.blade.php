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
						<h2><a href="{{route('ShowArticle',['id'=>$article->id])}}">{{$article->title}}</a></h2>
						
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
						{{$articles->links()}}
					</div>
					<!--End Pagination-->
                                        
				</div>
				<!-- End Left Sidebar -->
                               
			</div><!--/row--> 
		</div><!--/container-->
		<!--=== End Content Part ===-->
@endsection
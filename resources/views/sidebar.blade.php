<!-- Right Sidebar -->
				<div class="col-md-3 magazine-page">
					<!-- Search Bar -->
					<div class="headline headline-md"><h2>Search</h2></div>
					<div class="input-group margin-bottom-40">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button class="btn-u" type="button">Go</button>
						</span>
					</div>
					<!-- End Search Bar -->

					<!-- Posts -->
					<div class="posts margin-bottom-40">
						<div class="headline headline-md"><h2>Recent Posts</h2></div>
						@foreach($recent as $rec)
                                                <dl class="dl-horizontal">
							<dt><a href="{{route('ShowArticle',['id'=>$rec->id])}}"><img src="{{URL::asset($rec->image)}}"></a></dt>
							<dd>
								<p><a href="#">{{$rec->title}}</a></p>
                                                                <ul class="list-unstyled list-inline blog-info">
                                                                    <li><i class="fa fa-calendar"></i>{{$rec->date}}</li>
                                                                    <li><i class="fa fa-pencil"></i>{{$rec->author}}</li>
                                                                </ul>
							</dd>
						</dl>
						@endforeach
					</div><!--/posts-->
					<!-- End Posts -->
                                        
					<!-- Blog Tags -->
					<div class="headline headline-md"><h2>Blog Tags</h2></div>
                                        
					<ul class="list-unstyled blog-tags margin-bottom-30">
						<li><a href="#"><i class="fa fa-tags"></i> Business</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Music</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Internet</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Money</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Google</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> TV Shows</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Education</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> People</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> People</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Math</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Photos</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Electronics</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Apple</a></li>
						<li><a href="#"><i class="fa fa-tags"></i> Canada</a></li>
					</ul>
					<!-- End Blog Tags -->
				</div>
				<!-- End Right Sidebar -->
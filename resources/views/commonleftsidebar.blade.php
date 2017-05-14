<div class="fix sidebar floatright">
						<div class="fix single_sidebar">
							<div class="popular_post fix">
								<h2>Popular</h2>
								@foreach ( Widgets::getPopularPosts() as $posts)
									<div class="fix single_popular">
										<img src="{{$posts['imgPath']}}" class="floatleft"/>
										<h2>{{$posts['title']}}</h2>
										<p>{{$posts['createDateTime']}}</p>
									</div>
								@endforeach
							</div>
						</div>
						<!--
						<div class="fix single_sidebar">
								<h2>Search</h2>
								<input class="search" type="text" placeholder="Search and hit enter"/>
						</div>
						!-->
						<div class="fix single_sidebar">
							<h2>A little about Mythologger</h2>
							<p>We started this blogging platform for mythologists from all over the world to share knowledge. Mythology is epic and will always be present in many applied form in different context</p>
						</div>
						<div class="fix single_sidebar">
							<h2>Categories</h2>
							@foreach ( Widgets::getCategories() as $categories) 
								<a href="">{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a>
							@endforeach
							<!-- <a href="">Wine(5)</a> -->
						</div>
					</div>
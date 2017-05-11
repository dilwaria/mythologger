@extends('master')

 @section('title')
 Narayan vs Narayan Sena
 @endsection

@section('content')
<div class="fix content_area">
				<div class="fix top_add_bar">
					<div style="width:700px;margin:0 auto;"><img src=""/></div>
				</div>
				<div class="manu_area">
					<div class="mainmenu menu-wrap wrap">
						<ul id="nav-bottom">
							<li><a href="">Greek Mythology</a></li>
							<li><a href="">Roman Mythology</a></li>
							<li><a href="">Hindu Mythology</a>
								<ul>
									<li><a href="">Mahabharatha</a></li>
									<li><a href="">Ramayana</a></li>
									<li><a href="">Krishana</a></li>
									<li><a href="">Gita</a></li>
									
								</ul>
							</li>
							<li><a href="">Egyptian Mythology</a></li>
							<!-- <li><a href="">About us</a></li>
							<li><a href="">Privacy policy</a></li>
							<li><a href="">Contact us</a></li> -->
						</ul>
					</div>
				</div>
			<div class="fix wrap content_wrapper">
				<div class="fix content">
					<div class="fix main_content floatleft">
						<div class="single_page_content fix">
							<h1>{!! $blog->title !!}</h1>
							<div class="single_post_meta fix">
								<p>28 Sep, 2012   |   Photography, Wine, Food   |   12 Comments</p>
							</div>
							<img src="{!! $blog->imgPath !!}" class="single_feature_img" alt=""/>
							
							{!! $blog->blogContent !!}

							<a href="" class="gray btn">Preview</a>
							<a href="" class="gray btn">Download</a>
							
							<div class="related_post fix">
								<h2>Related Post</h2>
								<div class="fix related_post_container">
									<div class="fix single_related_post floatleft">
										<img src="images/related_feature_img.png"/>
										<h2>Dapibus Elit Amet Parturient</h2>
										<p>28 Sep, 2012   |   14 Comments</p>
									</div>
									<div class="fix single_related_post floatleft">
										<img src="images/related_feature_img.png"/>
										<h2>Dapibus Elit Amet Parturient</h2>
										<p>28 Sep, 2012   |   14 Comments</p>
									</div>
									<div class="fix single_related_post floatleft">
										<img src="images/related_feature_img.png"/>
										<h2>Dapibus Elit Amet Parturient</h2>
										<p>28 Sep, 2012   |   14 Comments</p>
									</div>
								</div>
							</div>
						</div>
						

					</div>
					<div class="fix sidebar floatright">
						<div class="fix single_sidebar">
							<div class="popular_post fix">
								<h2>Popular</h2>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
							</div>
						</div>
						<div class="fix single_sidebar">
								<h2>Search</h2>
								<input class="search" type="text" placeholder="Search and hit enter"/>
						</div>
						<div class="fix single_sidebar">
							<h2>A little about me</h2>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum. Sed posuere consectetur est at mant lobortis. Sed posuere consectetur est lobortis. Fusce  mauris condimentum.</p>
						</div>
						<div class="fix single_sidebar">
							<h2>Categories</h2>
							<a href="">photography(5)</a>
							<a href="">food(9)</a>
							<a href="">Salads(4)</a>
							<a href="">spicy(3)</a>
							<a href="">Wine(5)</a>
						</div>
					</div>
				</div>
				<div class="fix bottom_add_bar">
					<div style="width:700px;margin:0 auto;"><img src="http://placehold.it/700x90"/></div>
				</div>
			</div>
		</div>
		 @endsection

@extends('master')

 @section('title')
{{ strip_tags($blog->title) }}
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
								<p> {!! $blog->createDateTime !!}  |   By : {!! $blog->createdBy !!}     </p>
							</div>
							<img src="{!! $blog->imgPath !!}" class="single_feature_img" style="width:100%" alt=""/>
							
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
					@include('commonleftsidebar')
				</div>
				<div class="fix bottom_add_bar">
					<div style="width:700px;margin:0 auto;"><img src="https://placehold.it/700x90"/></div>
				</div>
			</div>
		</div>
		 @endsection

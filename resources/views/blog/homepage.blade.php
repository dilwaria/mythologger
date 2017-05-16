@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging Site
 @endsection

@section('content')
		<div class="fix content_area">
				
				<div class="fix top_add_bar">
					<div class="addbar_leaderborard"><img src=""/></div>
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
						<div class="fix single_content_wrapper">
						
						@foreach ($popularBlogs as $b)
							<div class="fix single_content floatleft pointerMouse" 
							   onclick='location.href="<?php echo route('blogDescription',['blogID'=>$b['id'], 'slug'=>$b['slug']] ) ?>"' >
								<img src="{{$b['imgPath']}}" alt="" style="max-width: 100%"/>
								<div class="fix single_content_info">
									<h1>{{$b['title']}}</h1>
									<p class="author">By {{$b['createdBy']}} In {{$b['tagList']}}</p>
									<p>
										{{$b['blogContent']}}
									</p>
									<div class="fix post-meta">
										<p>{{$b['createDateTime']}}  <!-- |  24 Comments  !--></p>
									</div>
								</div>
								
							</div>
						@endforeach
						<!--
						<div class="fix single_content floatleft">
							<img src="images/home_featured.png" alt=""/>
							<div class="fix single_content_info">
								<h1>Ullamcorper Mollis Pellentesque</h1>
								<p class="author">By Admin In Photography,Wine,Food</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Donec 
								id elit non mi porta gravida at eget metus. Nullam id dolor id ultricies .</p>
								<div class="fix post-meta">
									<p>26 Sep, 2012  |  24 Comments</p>
								</div>
							</div>
							
						</div>
						!-->
						</div>
						<!--
						<div class="pagination fix">
							<a href="">1</a>
							<a href="">2</a>
							<a href="">3</a>
							<a href="">4</a>
							<a href="">5</a>
							
						</div>
						-->
					</div>
					@include('commonleftsidebar')
				</div>
				
				
			</div>
			
				<div class="fix bottom_add_bar">
					<div class="addbar_leaderborard"><img src=""/></div>
				</div>
				
		</div>
		@endsection

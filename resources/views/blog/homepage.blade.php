@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
 @endsection

@section('content')

    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to Mythologger, <br />
            an applied mythology blog</h3>
            <p class="lead"></p>
            <p>
                Mythology is an integral part of any culture. The world, being a place of various diverse cultures and myths is full of many stories. Stories, which can inspire a deep philosophical lesson in our modern day-to-day life. Our platform is an amalgamation of various mythologies. Be it Greek, Be it Hindu or be it Chinese, each one is full of many mythical stories, which can somehow be related to our daily life. And this portal tries to unify these stories, giving you a new insight in each of them.
           </p>
           <!-- <a href="#"><i class="icon-plus-sign"></i>Read More</a> !-->
        </div>
    </div><!-- End Headline -->


    <h3 class="title-bg"> This is a sub head divider</h3>
            <div class="row">
            @foreach ($popularBlogs as $b)
                <div class="span4 homePageCells">
                    <img class="homePageImage" src="{{$b['imgPath']}}" alt="image">
                    <h5>{{$b['title']}}</h5>
                    <p>{{$b['blogContent']}}-- {{$b['createDateTime']}}  -- By {{$b['createdBy']}} In {{$b['tagList']}}</p>
                    <button class="btn btn-small btn-inverse" type="button" onclick='window.open("<?php echo route('blogDescription',['blogID'=>$b['id'], 'slug'=>$b['slug']] ) ?>","_blank")'>Read more</button>
                </div>
              @endforeach
					
            </div>

            <div class="row">
            @foreach ($popularBlogs1 as $b)
                <div class="span4 homePageCells">
                    <img class="homePageImage" src="{{$b['imgPath']}}" alt="image">
                    <h5>{{$b['title']}}</h5>
                    <p>{{$b['blogContent']}}-- {{$b['createDateTime']}}  -- By {{$b['createdBy']}} In {{$b['tagList']}}</p>
                    <button class="btn btn-small btn-inverse" type="button" onclick='window.open("<?php echo route('blogDescription',['blogID'=>$b['id'], 'slug'=>$b['slug']] ) ?>","_blank")'>Read more</button>
                </div>
              @endforeach
                    
            </div>

		@endsection

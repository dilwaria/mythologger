@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging Site
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
        	<h3>Welcome to Mythologger. <br />
            An applied mythology blogging and sharing.</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium vulputate magna sit amet blandit.</p>
            <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
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

		@endsection

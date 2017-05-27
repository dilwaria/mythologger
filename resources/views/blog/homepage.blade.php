@extends('master')

 @section('title')
 CONNECTING CONTEMPORARY WORLD & MYTHOLOGY | MYTHOLOGY
 @endsection

@section('metadescription')
<meta name="description" content="Mythologger - a concept for relating contemporary world with mythology like Greek, Roman, Chinese, Hindu and Norse Mythology " />

<meta name="keywords" content="Indian Mythology, Mythology , India, Hindu Mythology, Greek Mythology, Chinese Mythology, Norse Mythology, Norse, Mahabharata , stories, Myth, Mythos,  Roman Mythology, Egyptian Mythology, Iliad, , ancient Greece, Greek , Odysseus, Ramayana, Krishna "/>
<link rel="canonical" href="https://www.mythologger.com" />
@endsection


@section('content')

    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="/images/gallery/slider-img-1.jpg" alt="mythology-image-1" /></li>
                <li><img src="/images/gallery/slider-img-2.jpg" alt="mythology-image-2" /></li>
                <!-- <li><a href="gallery-single.htm"><img src="/images/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="/images/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="/images/gallery/slider-img-1.jpg" alt="slider" /></a></li> -->
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to Mythologger, <br />
            conceptualizing applied mythology </h3>
            <p class="lead"></p>
            <p class="fontAboutUs">
                Mythology is an integral part of any culture. The world, being a place of various diverse cultures and myths is filled with many stories. Stories, which can be a great source of inspiration to our mankind. Our platform is an amalgamation of various such mythologies. Be it Greek, Be it Hindu or be it Chinese, each one of them can somehow be related to our daily life. This portal tries to unify these old-told tales, projecting you with a complete new insight on each mythical tale.
           </p>
           <p><strong> If you want to share any thoughts, you can contact us<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@mythologger.com"> here</a></strong></p>
           <!-- <a href="#"><i class="icon-plus-sign"></i>Read More</a> !-->
        </div>
    </div><!-- End Headline -->


    <h3 class="title-bg" title="Mythological Blogs"> LATEST M-LOGS </h3>
            @foreach($allDisplayBlogs as $popularBlogs)
                <div class="row">
                @foreach ($popularBlogs as $b)
                    <div class="span4 homePageCells">
                        <img class="homePageImage" src="{{$b['imgPath']}}" alt="image">
                        <h5>{{$b['title']}}</h5>
                        <p>{{$b['blogContent']}}</p>
                        <button class="btn btn-small btn-inverse" type="button" onclick='window.open("<?php echo route('blogDescription',['blogID'=>$b['id'], 'slug'=>$b['slug']] ) ?>","_blank")'>Read more</button>
                    </div>
                  @endforeach
    					
                </div>
            @endforeach

		@endsection

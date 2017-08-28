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
               Mythology is an integral part of any culture. The world, being a place of various diverse cultures and myths is filled with many Mythological stories which can be a great source of our inspiration. Our Product is an amalgamation of various mythologies such as Greek, Hindu, Chinese, Norse and Egyptian etc. Each one of them show some relevance in our day-to-day life. Our Product tries to unify these old-told tales, projecting you with a complete new insight on each mythical tale.
           </p>
           <p><strong> If you want to share any thoughts, you can contact us<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@mythologger.com"> here</a></strong></p>
           <!-- <a href="#"><i class="icon-plus-sign"></i>Read More</a> !-->
        </div>
    </div><!-- End Headline -->

    <div class="homePageAds row">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- descriptionPage2 -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-3341786863476895"
                         data-ad-slot="7895928569"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>


                 <h3 style="color:#d44141" class="title-bg" title="Alternate Mythology Debate"> Alternate Mythology 

                 <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
                 </h3>
                  <div class="row">
                @foreach ($debates as $d)
                    <div class="span4 homePageCells">
                        <img class="homePageImage" src="{{$d['imagePath']}}" alt="image">
                        <h5>{{$d['debateTitle']}}</h5>
                        <p>{{$d['debateDesc']}}</p>
                        <button class="btn btn-small btn-warning" type="button" onclick='window.open("<?php echo route('showDebate',['debateID'=>$d['id'], 'slug'=>$d['slug']] ) ?>","_blank")'>Discuss</button>
                    </div>
                  @endforeach
             
               
                </div>

    <h3 class="title-bg" title="Mythological Blogs"> LATEST M-LOGS </h3>
            @php ($itr=0)
            @foreach($allDisplayBlogs as $popularBlogs)
                <div class="row">
                @foreach ($popularBlogs as $b)
                    <div class="span4 homePageCells">
                        <img class="homePageImage" src="{{Widgets::getHomePageImgUrls($b['imgPath'])}}" alt="image">
                        <h5>{{$b['title']}}</h5>
                        <p>{{$b['blogContent']}}</p>
                        <button class="btn btn-small btn-inverse" type="button" onclick='window.open("<?php echo route('blogDescription',['blogID'=>$b['id'], 'slug'=>$b['slug']] ) ?>","_blank")'>Read more</button>
                    </div>
                  @endforeach
             
                @php ($itr++)
                </div>
                 @if($itr ==2 )
                <div class="homePageAds row">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- descriptionPage2 -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-3341786863476895"
                         data-ad-slot="7895928569"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
              @endif
            @endforeach

		@endsection

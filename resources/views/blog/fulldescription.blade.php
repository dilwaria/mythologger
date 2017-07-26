@extends('master')

 @section('title')
{{ strip_tags($blog->seoTitle) }}
 @endsection


@section('metadescription')
<meta name="description" content="{{ strip_tags($blog->seoDescription) }}" />
<meta name="keywords" content="{{ strip_tags($blog->seoMetakeywords) }}"/>
<link rel="canonical" href="<?php echo route('blogDescription',['blogID'=>$blog['id'], 'slug'=>$blog['slug']] ) ?>" />

<meta property="og:type" content="article" />
<meta property="og:title" content="{{ strip_tags($blog->seoTitle) }}" />
<meta property="og:description" content="{{ strip_tags($blog->seoDescription) }}" />
<meta property="og:url" content="<?php echo route('blogDescription',['blogID'=>$blog['id'], 'slug'=>$blog['slug']] ) ?>" />
<meta property="og:site_name" content="mythologger.com" />
<meta property="og:image" content="{!! url($blog->imgPath) !!}" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="400" />
@endsection
@section('content')

@section('content')


    <!---================================================== --> 
    <div class="row"><!--Container row-->

        <!-- Blog Full Post
        ================================================== --> 
        <div class="span8 blog">

            <!-- Blog Post 1 -->
            <article>
                <h1 class="title-bg titleSize"><a href="javascript:void(0)">{{ strip_tags($blog->title) }}</a></h1>
                <div class="breadCrumbs">
                    <h5> <a style="color: black" href="{{ route('homePage') }}">Home</a> > <a href="{{ route('categoryPage',['category'=>Common::processCategoryUrlForBreadCrumb($blog->tagList) ]) }}">{{ Common::processCategoryNameForBreadCrumb($blog->tagList) }}</h5>
                </div>
                <div class="post-content">
                <div style="max-width:100%;">
                    <a href="javascript:void(0)"><img class="dashboardImage dashboardImageMinWidth" src="{!! $blog->imgPath !!}" alt="Post Thumb"></a>
                </div>
                    <div class="post-body fontDescription">
                        
                    	{!! $blog->blogContent !!}

                        

                        <!-- <p class="well"><a href="#" rel="tooltip" title="An important message">Proin tristique</a> tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidudui.</p> -->

                       
<!-- 
                       <blockquote>
                            Maecenas felis tellus, ferment Nulla faucibus ligula eget ante varius ac euismod odio placerat.
                       </blockquote> -->

                       
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> {!! Carbon\Carbon::parse($blog->createDateTime)->format('d-F-Y') !!} </li>
                            <li><i class="icon-user"></i> <a title="{!! $creator->FirstName !!} {!! $creator->LastName !!}" href="javascript:void(0)">{!! $creator->FirstName !!} {!! $creator->LastName !!}</a></li>
                            <li><i class="icon-eye-open" id = "dsq-count-scr"></i> {{$blog['views']}} Views</li>
                            <li><i class="icon-tags"></i> <a title="{{ Common::processCategoryNameToDisplay($blog->tagList) }}" href="javascript:void(0)">{{ Common::processCategoryNameToDisplay($blog->tagList) }}</a>
                            <!-- <a href="#"></a>, -->
                             <!-- <a href="#">illustration</a></li> -->
                        </ul>
                    </div>
                </div>
            </article>

            <!-- About the Author -->
            <section class="post-content">
                <div class="post-body about-author">
                    <img class="userImg" src="{!! $creator->imgPath !!}" alt="{!! $creator->FirstName !!} {!! $creator->LastName !!}">
                    <h4>About {!! $creator->FirstName !!} {!! $creator->LastName !!}</h4><br>
                   {!! $creator->about !!}
                </div>
            </section>

        <!-- Post Comments
        ================================================== --> 
            <div id="disqus_thread"></div>

        </div><!--Close container row-->

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">

            <!--Search-->
            <section>
               <!--  <div class="input-append">
                    <form action="#">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Search"><button class="btn" type="button"><i class="icon-search"></i></button>
                    </form>
                </div> -->
                <div class="sidebar">
               
         <gcse:search enableAutoComplete="true"></gcse:search>
                    </div>
            </section>

           
            @include('commonleftsidebar')

            
        </div>

    </div>
		 @endsection


@section('javascript')
       <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://www-mythologger-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
<script id="dsq-count-scr" src="//www-mythologger-com.disqus.com/count.js" async></script>



<script>
  (function() {
    var cx = '009569975203262159236:fm6oey7khng';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

        @endsection

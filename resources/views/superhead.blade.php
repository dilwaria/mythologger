<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html lang="en">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@yield('metadescription')


<!-- CSS
================================================== -->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/bootstrap-responsive.css">
<link rel="stylesheet" href="/css/prettyPhoto.css" />
<link rel="stylesheet" href="/css/flexslider.css" />
<link rel="stylesheet" href="/css/custom-styles.css">

<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

<link rel="stylesheet" href="/css/ourCustom.css">


<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="apple-touch-icon" href="/images/mythologger-apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/mythologger-apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/mythologger-apple-touch-icon-114x114.png">

@yield('styleCss')

<!-- JS
================================================== -->
<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/jquery.custom.js"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=59112938ef4e140012286c0a&product=sticky-share-buttons"></script>    
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99114732-1', 'mythologger.com');
  ga('send', 'pageview');

</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3341786863476895",
    enable_page_level_ads: true
  });
</script>

</head>


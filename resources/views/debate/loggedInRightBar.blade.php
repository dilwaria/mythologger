<!-- <h5  class="title-bg"> Top Mythologists</h5>
    <ul class="">
    @foreach ( Widgets::getCategories() as $categories)
        <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-user"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
        @endforeach
    </ul>
     -->


     <div class="gAds">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- descriptionPage -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-3341786863476895"
                     data-ad-slot="2734358964"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>


 <h5 class="title-bg f16" style="margin-top: 0px;">Popular Posts</h5>
<ul class="popular-posts">
    @foreach ( Widgets::getPopularPosts() as $posts)
    <li>
        <a href="javascript:void(0)"><img class="popularImage" src="{{$posts['imgPath']}}" alt="Popular Post"></a>
        <h6><a target="_blank" href="<?php echo route('blogDescription',['blogID'=>$posts['id'], 'slug'=>$posts['slug']]) ?>">{{$posts['title']}}</a></h6>
        <em>Posted on {{Carbon\Carbon::parse($posts['createDateTime'])->format('d-F-Y')}}</em>
    </li>
    @endforeach
</ul>

<h5 class="title-bg f16" >Alternate Mythology</h5>
<ul class="popular-posts">
    @foreach ( Widgets::getAllDebates() as $debates)
    <li>
        <a href="javascript:void(0)"><img class="popularImage" src="{{$debates['imagePath']}}" alt="Creative Writing"></a>
        <h6><a target="_blank" href="<?php echo route('showDebate',['debateID'=>$debates['id'], 'slug'=>$debates['slug']] ) ?>">{{$debates['debateTitle']}}</a></h6>
        <em>Posted on {{Carbon\Carbon::parse($debates['createDateTime'])->format('d-F-Y')}}</em>
    </li>
    @endforeach
</ul>




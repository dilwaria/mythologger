

             <h5 class="title-bg f16">Do you know ?</h5>
            
               <div class="flexslider">
                 <ul class="slides" >
                 @foreach ( Widgets::getFacts() as $facts)
                 <li>
                    <div class="factQuizSlider post-content">
                       <span class="quote-text"> @php echo $facts['factDesc'] @endphp </span>
                    </div>
                 </li>
                 @endforeach
                 </ul>
               </div>


            <!--Popular Posts-->
            <h5 class="title-bg f16">Popular Posts</h5>
<ul class="popular-posts">
@foreach ( Widgets::getPopularPosts() as $posts)
                <li>
                    <a href="javascript:void(0)"><img class="popularImage" src="{{Widgets::getPopularImgUrls($posts['imgPath'])}}" alt="Popular Post"></a>
                    <h6><a target="_blank" href="<?php echo route('blogDescription',['blogID'=>$posts['id'], 'slug'=>$posts['slug']]) ?>">{{$posts['title']}}</a></h6>
                    <em>Posted on {{Carbon\Carbon::parse($posts['createDateTime'])->format('d-F-Y')}}</em>
                </li>
                @endforeach
            </ul>




<!--Categories-->
                 
<!--
            <h5 class="title-bg">Categories</h5>
            <ul class="post-category-list">
            @foreach ( Widgets::getCategories() as $categories)
                <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-plus-sign"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
                @endforeach
            </ul>
            -->


            <div class="gAds" >
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

            

            <!--Tabbed Content-->
            <!-- <h5 class="title-bg">More Info</h5>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#comments" data-toggle="tab">Comments</a></li>
                <li><a href="#tweets" data-toggle="tab">Tweets</a></li>
                <li><a href="#about" data-toggle="tab">About</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="comments">
                     <ul>
                        <li><i class="icon-comment"></i>admin on <a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Consectetur adipiscing elit</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Ipsum dolor sit amet consectetur</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Aadipiscing elit varius elementum</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">ulla iaculis mattis lorem</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="tweets">
                    <ul>
                        <li><a href="#"><i class="icon-share-alt"></i>@room122</a> Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Nulla faucibus ligula eget ante varius ac euismod odio placerat.</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Pellentesque iaculis lacinia leo. Donec suscipit, lectus et hendrerit posuere, dui nisi porta risus, eget adipiscing</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu.</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Sed ac neque nec leo condimentum rhoncus. Nunc dapibus odio et lacus.</li>
                    </ul>
                </div>
                <div class="tab-pane" id="about">
                    <p>Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>

                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                </div>
            </div> -->

            <!--Video Widget-->
            <!-- <h5 class="title-bg">Video Widget</h5>
            <iframe src="http://player.vimeo.com/video/24496773" width="370" height="208"></iframe> -->


<!--Categories-->
            <h5 class="title-bg">Categories</h5>
            <ul class="post-category-list">
            @foreach ( Widgets::getCategories() as $categories)
                <li><a href="#"><i class="icon-plus-sign"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
                @endforeach
            </ul>

            <!--Popular Posts-->
            <h5 class="title-bg">Popular Posts</h5>
<ul class="popular-posts">
@foreach ( Widgets::getPopularPosts() as $posts)
                <li>
                    <a href="#"><img src="{{$posts['imgPath']}}" alt="Popular Post"></a>
                    <h6><a target="_blank" href="<?php echo route('blogDescription',['blogID'=>$posts['id'], 'slug'=>$posts['slug']]) ?>">{{$posts['title']}}</a></h6>
                    <em>Posted on {{$posts['createDateTime']}}</em>
                </li>
                @endforeach
            </ul>





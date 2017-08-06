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

<h5 class="title-bg f16" >Popular Debates</h5>
<ul class="popular-posts">
    @foreach ( Widgets::getAllDebates() as $debates)
    <li>
        <a href="javascript:void(0)"><img class="popularImage" src="{{$debates['imagePath']}}" alt="Creative Writing"></a>
        <h6><a target="_blank" href="<?php echo route('showDebate',['debateID'=>$debates['id'], 'slug'=>$debates['slug']] ) ?>">{{$debates['debateTitle']}}</a></h6>
        <em>Posted on {{Carbon\Carbon::parse($debates['createDateTime'])->format('d-F-Y')}}</em>
    </li>
    @endforeach
</ul>


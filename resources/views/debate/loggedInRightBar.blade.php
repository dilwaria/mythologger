<div class="profileLeft">
    <div class="profileImg">
        <img class="img-circle" src="/images/user-avatar.jpg"></img>
    </div>

    <div class="profileName">
        Abhinav Sharma
    </div>

    <div class="profilePoints">
        <i class="icon-star"></i>340 m-Coins<br>
        <i class="icon-user"></i>340 Followers<br>
        <i class="icon-ok"></i>340 Answers<br>
    </div>

</div>
<div style="margin-top: 190px">
<h5  class="title-bg"> Top Mythologists</h5>
    <ul class="">
    @foreach ( Widgets::getCategories() as $categories)
        <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-user"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
        @endforeach
    </ul>
</div>

 <h5 class="title-bg">Debate Stats</h5>
<ul class="">

    <li><i class="icon-asterisk"></i>40 Followers</li>
     <li><i class="icon-asterisk"></i>100 views</li>
      <li><i class="icon-asterisk"></i>40 answers</li>
       <li><i class="icon-asterisk"></i>340 karma points</li>
    
</ul>
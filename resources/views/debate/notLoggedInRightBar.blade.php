    <h5 class="title-bg" style="margin-top: 0px;">User Login</h5>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span><input class="span2" id="prependedInput" size="16" type="text" placeholder="Username">
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span><input class="span2" id="appendedPrependedInput" size="16" type="text" placeholder="Password">
            </div>
            <button class="btn btn-small btn-inverse" type="button">Login</button>
            <button href="#myModal" class="btn btn-small btn-warning" data-toggle="modal" type="button">Register</button>
             @include('debate/signUpLightBox')

            <h5 class="title-bg">Top Mythologists</h5>
            <ul class="">
            @foreach ( Widgets::getCategories() as $categories)
                <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-user"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
                @endforeach
            </ul>

             <h5 class="title-bg">Debate Stats</h5>
            <ul class="">
           
                <li><i class="icon-asterisk"></i>40 Followers</li>
                 <li><i class="icon-asterisk"></i>100 views</li>
                  <li><i class="icon-asterisk"></i>40 answers</li>
                   <li><i class="icon-asterisk"></i>340 karma points</li>
                
            </ul>
    <h5 class="title-bg" style="margin-top: 0px;">User Login</h5>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span><input

                id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 

                 class="span2" size="16" type="text" placeholder="email">
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span><input
                input id="password" type="password"  name="password" required
                 class="span2"  size="16" type="text" placeholder="Password">
            </div>
            <button class="btn btn-small btn-inverse" type="submit">Login</button>
            <button href="#myModal" class="btn btn-small btn-warning" data-toggle="modal" type="button">Register</button>


            </form>


             @include('debate/signUpLightBox')

            <h5 class="title-bg">Top Mythologists</h5>
            <ul class="list_blt">
            @foreach ( Widgets::getCategories() as $categories)
                <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-user"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
                @endforeach
            </ul>

             <h5 class="title-bg">Debate Stats</h5>
            <ul class="list_blt">
           
                <li><i class="icon-asterisk"></i>40 Followers</li>
                 <li><i class="icon-asterisk"></i>100 views</li>
                  <li><i class="icon-asterisk"></i>40 answers</li>
                   <li><i class="icon-asterisk"></i>340 karma points</li>
                
            </ul>
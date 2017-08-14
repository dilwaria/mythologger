
    <h5 class="title-bg" style="margin-top: 0px;">User Login</h5>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span><input

                id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 

                 class="span2" size="16" type="text" placeholder="email">
            </div>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <input
                input id="password" type="password"  name="password" required
                 class="span2"  size="16" type="text" placeholder="Password">
            </div>
            <button class="btn btn-small btn-inverse" type="submit">Login</button>
            <button href="#myModal" class="btn btn-small btn-warning" data-toggle="modal" type="button">Register</button>
            <span ><a href="#myModalReset" data-toggle="modal">Forgot Password</a></span>

            </form>


             @include('debate/signUpLightBox')
             @include('debate/forgotPassword')

   

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



<div class="profileLeft">
    <div class="profileImg">
        <img class="img-circle" src="/images/user-avatar.jpg"></img>
    </div>

    <div class="profileName">
        {{ ucfirst(Auth::user()->name) }}
    </div>

    <div class="profilePoints">
        <i class="icon-star"></i>{{$mcoins}} Myth-Coins<br>
        <i class="icon-user"></i>340 Followers<br>
        <i class="icon-ok"></i>{{$count_of_answers}} Answers<br>
    </div>


<h6 class="title-bg">Profile Engagement</h6>
<div class="progress progress-success progress-striped">
                <div class="bar" style="width: 40%"></div>
            </div>
</div>





<!-- -//////////////////////////////////// -->

             <h5 class="title-bg">Debate Stats</h5>
            <ul class="list_blt">
           
                <li><i class="icon-fire"></i>40 Followers</li>
                 <li><i class="icon-fire"></i>{!! $debate->views !!} Views</li>
                  <li><i class="icon-fire"></i>4 Answers</li>
                   <li><i class="icon-fire"></i>34 Mytho Points</li>
                
            </ul>

            <h6 class="title-bg">Popularity Level</h6>

            <div class="progress progress-danger progress-striped">
                <div class="bar" style="width: 35%"></div>
            </div>
                        <h5 class="title-bg">Trending Tags</h5>
            <ul class="list_blt">
            @foreach ( Widgets::getCategories(6) as $categories)
                <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-tag"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
                @endforeach
            </ul>

            <h6 class="title-bg">Instructions to Write</h6>
                  <ul class="list_blt">
                  <li><i class="icon-check"></i>Write within 400-600 .</li>
                  <li><i class="icon-check"></i>Be Precise, </li>
                  <li><i class="icon-check"></i>Respect the community.and other co-mythologers</li>
                  <ul>
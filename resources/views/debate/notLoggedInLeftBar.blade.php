


<!-- -//////////////////////////////////// -->

             <h5 class="title-bg">Debate Stats</h5>
            <ul class="list_blt">
           
                <li><i class="icon-fire"></i>40 Followers</li>
                 <li><i class="icon-fire"></i>100 views</li>
                  <li><i class="icon-fire"></i>40 answers</li>
                   <li><i class="icon-fire"></i>340 karma points</li>
                
            </ul>

            <h6 class="title-bg">Popularity Level</h6>

            <div class="progress progress-danger progress-striped">
                <div class="bar" style="width: 80%"></div>
            </div>
                        <h5 class="title-bg">Top Mythologists</h5>
            <ul class="list_blt">
            @foreach ( Widgets::getCategories(6) as $categories)
                <li><a target="_blank" href="<?php echo route('categoryPage',['category'=> Common::processCategoryName($categories['tagName']) ]) ?>"><i class="icon-tag"></i>{{$categories['tagName']}}( {{$categories['blogs_count']}} )</a></li>
                @endforeach
            </ul>
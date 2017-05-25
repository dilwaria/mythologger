@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
 @endsection

@section('content')

    <!-- Blog Content
    ================================================== --> 
    <div class="row">

        <!-- Blog Posts
        ================================================== --> 
        <div class="span8 blog">

            <!-- Blog Post  -->
              @foreach ($blogs as $b)
            <article class="clearfix">
                <a href="blog-single.htm"><img src="{{$b['imgPath']}}" alt="Post Thumb" class="align-left imageCategories"></a>
                <h4 class="title-bg"><a href="blog-single.htm">{{$b['title']}}</a></h4>
                    <p>{{$b['blogContent']}}</p>
                    <button class="btn btn-mini btn-inverse" type="button" onclick='window.open("<?php echo route('blogDescription',['blogID'=>$b['id'], 'slug'=>$b['slug']] ) ?>","_blank")'>Read more</button>
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i>{{ Carbon\Carbon::parse($b['createDateTime'])->format('d/m/Y') }}</li>
				<li><i class="icon-user"></i> <a title="{{ $b['createdBy'] }}" href="#">5 views</a></li>
                            <li><i class="icon-user"></i> <a title="{{ $b['createdBy'] }}" href="#">{{ $b['createdBy'] }}</a></li>
                            <li><i class="icon-tags"></i> <a title="{{ $b['tagList']}}" href="#"><?php echo substr($b['tagList'],0,12). '...' ?></a>
                             <!-- ,<a href="#">tutorials</a> -->
                             </li>
                        </ul>
                    </div>
            </article>
             @endforeach

            
            
            

            
            <!-- Pagination -->
            <div class="pagination">
                <ul>
                <li class="prev"><a href="javascript:void(0);">Prev</a></li>

                @for($i=1; $i<=$pageCount; $i++)
                    <li id="paginationTab_{{$i}}" @if($i == $pageNo) class="active paginationTab" @else class="paginationTab" @endif><a href="javascript:void(0);">{{$i}}</a></li>
                @endfor
                <li class="next"><a href="javascript:void(0);">Next</a></li>
                <input type="hidden" id="currPageNo" value="{{$pageNo}}">
                <input type="hidden" id="pageCount" value="{{$pageCount}}">
                </ul>
            </div>
        </div>

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">

            <!--Search-->
            <section>
                <div class="sidebar">
               
         <gcse:search enableAutoComplete="true"></gcse:search>
                    </div>
            </section>

            <!--Categories-->
            
            <!--Popular Posts-->
           
             @include('commonleftsidebar')
            <!--Tabbed Content-->

            <!--
            <h5 class="title-bg">More Info</h5>
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
            </div>
                -->
            <!--Video Widget-->

            <!--
            Here we will place google ads
            <h5 class="title-bg">Video Widget</h5>
            <iframe src="http://player.vimeo.com/video/24496773" width="370" height="208"></iframe>

            -->
        </div>

    </div>


@endsection
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
@section('javascript')

       <script>


       $(document).ready(function () {
    
    $('.paginationTab').click( function(){
        var pageNum=$('#currPageNo').val();
        var clickedPageNo= $(this).attr('id').split('_')[1];
        var url= window.location.href.split('?')[0];
        window.location.href= url+"?pageNo="+clickedPageNo;
    });

    $('.prev').click( function(){
        var pageNum=$('#currPageNo').val();
        var prevPage=parseInt(pageNum)-1;
        if(prevPage<1){
            prevPage=1;
        }
        var url= window.location.href.split('?')[0];
        window.location.href= url+"?pageNo="+prevPage;
    });

    $('.next').click( function(){
        var pageNum=$('#currPageNo').val();
        var nextPage=parseInt(pageNum)+1;
        var pageCount= $('#pageCount').val();
        if(nextPage>pageCount){
            nextPage=pageCount;
        }
        var url= window.location.href.split('?')[0];
        window.location.href= url+"?pageNo="+nextPage;
    });
});

  (function() {
    var cx = '009569975203262159236:fm6oey7khng';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

        @endsection

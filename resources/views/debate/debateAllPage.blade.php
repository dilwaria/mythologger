@extends('master')

 @section('title')
 Alternate Mythology | Philosophical Mythology | Mythologger
 @endsection

 @section('metadescription')
 <meta name="description" content="Alternate Mythology - a concept for discussing alternate and philosophical part of mythical tales from different mythologies." />

<meta name="keywords" content="Indian Mythology, Mythology , India, Hindu Mythology, Greek Mythology, Chinese Mythology, Norse Mythology, Norse, Mahabharata , stories, Myth, Mythos,  Roman Mythology, Egyptian Mythology, Iliad, , ancient Greece, Greek , Odysseus, Ramayana, Krishna "/>
<link rel="canonical" href="https://www.mythologger.com" />
@endsection

@section('content')
    

    <h1> Alternate Mythology</h1>
    <br>
    <!-- Blog Content
    ================================================== --> 
    <div class="row">

        <!-- Blog Posts
        ================================================== --> 
        <div class="span8 blog">

            <!-- Blog Post  -->
              @foreach ($debate as $d)
            <article class="clearfix">
                <a href="javascript:void(0)"><img src="{{$d['imagePath']}}" alt="Post Thumb" class="align-left imageCategories"></a>
                <h4 class="title-bg"><a href="javascript:void(0)">{{$d['debateTitle']}}</a></h4>
                    <p>{{$d['debateDesc']}}</p>
                    <button class="btn btn-mini btn-inverse" type="button" onclick='window.open("<?php echo route('showDebate',['debateID'=>$d['id'], 'slug'=>$d['slug']] ) ?>","_blank")'>Explore</button>
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i>{{ Carbon\Carbon::parse($d['createDateTime'])->format('d-F-Y') }}</li>
				<li><i class="icon-eye-open"></i> {{ $d['views'] }} views</li>
                            
                           
                        </ul>
                    </div>
            </article>
             @endforeach

            
            
            

            
           
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

            
        </div>

    </div>


@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
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

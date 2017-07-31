@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
 @endsection

 @section('styleCss')
     <link href="/css/profile.css" type="text/css" rel="stylesheet">
     <link rel="stylesheet" href="/css/qa.css">
     <link rel="stylesheet" href="/css/profile.css">
 @endsection

@section('content')
    
    <div class="container main-container">
    
    <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <!-- Page Left Sidebar
        ================================================== --> 
        <div class="span2 sidebar page-left-sidebar deb_left_side"><!-- Begin sidebar column -->
            @if(!Auth::user())
                @include('debate/notLoggedInLeftBar') 
            @else
                 @include('debate/loggedInLeftBar') 
            @endif    

        </div><!-- End sidebar column -->

        <!-- Page Content
        ================================================== --> 
        <div class="span8 deb_content"><!--Begin page content column-->

            <h2 class="title-bg">{!! $debate->debateTitle !!}</h2>

            @if($debate->imagePath)
            
             <!-- src="{!! $debate->imagePath !!}" -->
                <img class="qa_thumb" src="{!! $debate->imagePath !!}" alt="Image">
            @endif
            <div class="question mt2">{!! $debate->debateDesc !!}</div>

           <!-- 
                Removing jquery text editor

            <div class="row" style="margin:0;">
                <div class="debateAnswer" id="txtEditor">
                     
                </div>
            </div> 

            -->
            <div id="answerSection">
                @include('debate/answer')
            </div>

            
        </div> <!--End page content column--> 



         <!-- Page Right Sidebar
        ================================================== --> 
        <div class="span2 sidebar page-right-sidebar deb_right_side"><!-- Begin sidebar column -->
        @if(!Auth::user())
            @include('debate/notLoggedInRightBar')
        @else
            @include('debate/loggedInRightBar')
        @endif
        
        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

<!-- End Footer -->

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
@endsection

@section('javascript')
<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="js/textEditor/editor.js"></script> -->
<script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>
<script src="/js/ckeditor_config.js"></script>
<script type="text/javascript">
$(document).ready( function() {
// $("#txtEditor").Editor();  

    $('#answerBtn').click(function(){
        $('#userAnswerInput').toggle();
        $('#hiddenDiv9').toggle();
    }); 

    $('#answerSubmit').click(function(){
        $('#submitAnswerForm').submit();
    });

    $('#answerContainer').on("click",
        function(e){
            if($(e.target).hasClass('comments')){
                var name= $(e.target).attr('id');
                var answerID=name.split("_")[1];
                $("#comment_"+answerID).toggle();
            }

            if($(e.target).hasClass('replyToComment')){
                var name= $(e.target).attr('id');
                var answerID=name.split("_")[1];
                var commentID=name.split("_")[2];
                $('#reply_'+answerID+"_"+commentID).toggle();
            }
        }
    );
     CKEDITOR.config.customConfig = '/js/ckeditor_config.js';

    if($('#editorText').length!=0){
        CKEDITOR.replace( 'editorText',{
             toolbar : 'Basic', 
             uiColor : '#9AB8F3',
             width:"100%"

        } );
    }
    
    CKEDITOR.config.toolbar="None";
    CKEDITOR.config.uiColor='#9AB8F3';
    CKEDITOR.config.height="100%";
    CKEDITOR.config.width="80%";
    CKEDITOR.config.float="left";
    CKEDITOR.on("instanceReady", function ( event ) {
        $('.cke_top').hide();
        $('#cke_1_top').show();
        
    });
    // CKEDITOR.replaceClass = 'commentInput';
   

    $('#answerContainer').on('submit','.commentFormSubmit',function(e){
        e.preventDefault();
        var form = $(this);
        var post_url = form.attr('action');
        var post_data = form.serialize();
        $.ajax({
            type: 'POST',
            url: post_url, 
            data: post_data,
            success: function(resp) {
                var respArr= JSON.parse(resp);
                var answerID= respArr.answerID; 
                $('#comment_'+answerID).html(respArr.comment);
                $('#comment_'+answerID).hide()
                $('#comment_'+answerID).show()
            }
        });
    });
    


    $('#submitAnswerForm').on('submit',function(e){
        e.preventDefault();
        for ( instance in CKEDITOR.instances ){
            CKEDITOR.instances[instance].updateElement();
        }
        var form = $(this);
        var post_url = form.attr('action');
        var post_data = form.serialize();
        $.ajax({
            type: 'POST',
            url: post_url, 
            data: post_data,
            success: function(resp) {
                var respArr= JSON.parse(resp); 
                $('#answerSection').html(respArr.answers);
                $('#userAnswerInput').toggle();
                $('#hiddenDiv9').toggle();
            }
        });
    });

});
</script>
@endsection
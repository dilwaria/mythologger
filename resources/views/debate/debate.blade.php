@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
 @endsection

 @section('styleCss')
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrapcdnrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="js/textEditor/editor.css" type="text/css" rel="stylesheet"/> -->
     <link href="/css/profile.css" type="text/css" rel="stylesheet">
     <link rel="stylesheet" href="/css/qa.css">
 @endsection

@section('content')
    
    <div class="container main-container">
    
    <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <!-- Page Left Sidebar
        ================================================== --> 
        <div class="span3 sidebar page-left-sidebar"><!-- Begin sidebar column -->

           @include('debate/notLoggedInLeftBar')     

        </div><!-- End sidebar column -->

        <!-- Page Content
        ================================================== --> 
        <div class="span6"><!--Begin page content column-->

            <h2 class="title-bg">{!! $debate->debateTitle !!}</h2>

            @if($debate->imagePath)
                <img src="{!! $debate->imagePath !!}" alt="Image">
            @endif
            <div class="question mt2">{!! $debate->debateDesc !!}</div>

           <!-- 
                Removing jquery text editor

            <div class="row" style="margin:0;">
                <div class="debateAnswer" id="txtEditor">
                     
                </div>
            </div> 

            -->
            <button class="btn btn-small btn-warning" type="button" id="answerBtn">Answer</button>
            <div class="mt2 dspN" id="userAnswerInput">
                <form id="submitAnswerForm" action="{{route('submitAnswer')}}" method="post">
                    <input type="hidden" name="debateID" value="{{$debate->id}}">
                    <!-- need to get userID dynamic   !-->
                    <input type="hidden" name="creatorID" value="1">
                    <textarea class="span6" rows="5" name="answerContent"></textarea>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-small btn-warning floatR" type="button" id="answerSubmit">Submit</button>
                </form>
            </div>

            @foreach($answers as $a)
                <div class="answer p2 mt2">
                    <div style="margin-bottom: 2%;">
                            <img class="img-circle mt2" src="/images/user-avatar.jpg" style="height: 30px;width: 30px;margin-top: -4% "> 
                            <div class="mt2 dspIB">
                                Abhinav Sharma<br><span style="font-size:12px;">June 27</span>
                            </div>  
                    </div>
                    <div style="margin-left: 2%">
                        {{$a->answerContent}}
                    </div>
                </div>
                <div id="commentText_{{$a->id}}" class="btn btn-mini mt2 comments">
                    Comment
                </div>
                <div id="comment_{{$a->id}}" class="dspN">
                    @include('debate/comment',['answerID'=>$a->id ])
                </div>
            @endforeach

            
        </div> <!--End page content column--> 



         <!-- Page Right Sidebar
        ================================================== --> 
        <div class="span3 sidebar page-right-sidebar"><!-- Begin sidebar column -->

           @include('debate/notLoggedInRightBar')
        
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
<script type="text/javascript">
$(document).ready( function() {
// $("#txtEditor").Editor();  

    $('#answerBtn').click(function(){
        $('#userAnswerInput').toggle();
    }); 

    $('#answerSubmit').click(function(){
        $('#submitAnswerForm').submit();
    });

    $('.comments').click( 
        function(){
            var name= $(this).attr('id');
            var answerID=name.split("_")[1];
            $("#comment_"+answerID).toggle();
        }    
    );

    $('.replyToComment').click(
        function(){
            var name= $(this).attr('id');
            var answerID=name.split("_")[1];
            var commentID=name.split("_")[2];
            $('#reply_'+answerID+"_"+commentID).toggle();
        }
    );



});
</script>
@endsection
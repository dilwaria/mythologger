@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
 @endsection

 @section('styleCss')
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrapcdnrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/textEditor/editor.css" type="text/css" rel="stylesheet"/>
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
            <p class="debateQuestion">{!! $debate->debateDesc !!}</p>

            <div class="row" style="margin:0;">
                <div class="debateAnswer" id="txtEditor">
                     
                </div>
            </div>

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
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/textEditor/editor.js"></script>
<script type="text/javascript">
$(document).ready( function() {
$("#txtEditor").Editor();                    
});
</script>
@endsection
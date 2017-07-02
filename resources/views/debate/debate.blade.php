@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
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

            <h2 class="title-bg">Double Sidebar Example</h2>

            <img src="img/gallery/gallery-img-1-full.jpg" alt="Image">

            <p class="debateQuestion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.</p>

            <div class="row">
                <div class="debateAnswer">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
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

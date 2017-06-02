@extends('master')


     @section('title')
Contact Us - mythologger.com • Contact Us
		 @endsection

@section('metadescription')
<meta name="description" content="Contact Details of mythologger team. Connect with mythologger team." />
<meta name="keywords" content="mythologger contact, mythologger contacts, contact us, contact, Mythology , Greek Mythology, Hindu Mythology, Norse Mythology"/>
<link rel="canonical" href="https://www.mythologger.com/contact-us" />
@endsection
@section('content')


   

        <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2>Contact Us</h2>
            <p>If you have any suggestion or critical view point related to Mythologger or Mythology, feel free to contact us. We invite guest articles also, if you have imagination and want to publish it on our site, you are most welcome. Thanks for landing on Mythologger. </p>
            @if(isset($msg) && $msg)
            <div id="successMsg" class="alert alert-success">
                Thank you for contacting us.
            </div>
            @endif

            <form method="post" action="{{route('contactus')}}" id="contact-form">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4" id="prependedInput" name="contactName" size="16" type="text" placeholder="Name" required>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4" name="contactEmail" id="prependedInput" size="16" type="email" placeholder="Email Address" required>
                </div>
              <!--  <div class="input-prepend">
                    <span class="add-on"><i class="icon-globe"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Website URL">
                </div>
                -->
                <textarea name="contactSubmit" class="span6" required></textarea>
                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Send Message">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="msg" value="1">
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== --> 
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Our Location</h5>
            <address>
            <strong>Mythologger</strong><br>
            Sector 23, Gurugram<br>
            Harayana, India<br>
            <!-- <abbr title="Phone">P:</abbr>  -->
            </address>
             
            <address>
            <strong>Admin</strong><br>
            <a href="mailto:#">contact@mythologger.com</a>
            </address>

            <h5 class="title-bg">Map Us</h5>
            <div id="googleMap" style="width:400px;height:350px;"></div>
            <!-- <img src="img/location-map.jpg" alt="map"> -->

        </div><!-- End sidebar column -->

    </div><!-- End container row -->


		@endsection

@section('javascript')
		


		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlDbIZnZH8KBfyQhAolKEn7ZaMZ6LH_0A&sensor=false"></script>

		<script>

        $('#contact-form').submit(function(e) {
            e.preventDefault(); // don't submit multiple times
            this.submit(); // use the native submit method of the form element
            $('#successMsg').removeAttr('vbHidden'); // blank the input
        });
		function initialize()
		{
		var mapProp = {
		  center:new google.maps.LatLng(28.5110641,77.0630248),
		  zoom:10,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		var map=new google.maps.Map(document.getElementById("googleMap")
		  ,mapProp);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>

		@endsection
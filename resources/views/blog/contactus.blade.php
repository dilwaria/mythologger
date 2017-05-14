@extends('master')



		
@section('content')
<div class="fix content_area">
<!-- <div class="fix top_add_bar">
					<div style="width:700px;margin:0 auto;"></div>
				</div> -->


				<div class="manu_area">
					<div class="mainmenu wrap">
						
					</div>
				</div>

			<div class="fix wrap content_wrapper">
				<div class="fix content">
					<div class="fix main_content floatleft">
						<div class="single_page_content fix">
							<h1 style="margin-bottom:15px;">Contact Us</h1>
							
							<div class="google_map">
								<div id="googleMap"></div>
								<div class="contact_info">
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum.Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum.</p>
								</div>
							</div>

								<div class="contact_form">
									<form>
										<p><input type="text" class="text" placeholder="Name"/></p>
										<p><input type="text" class="email" placeholder="Email"/></p>
										<p><input type="text" class="text" placeholder="Subject"/></p>
										<p><textarea class="textarea" placeholder="Message"></textarea></p>
										<p><input type="submit" class="submit" value="Submit"/></p>
									</form>
								</div>

							
						</div>
					</div>
					@include('commonleftsidebar')
				</div>
				<div class="fix bottom_add_bar">
					<div style="width:700px;margin:0 auto;"><img src=""/></div>
				</div>
			</div>
			</div>
			</div>
		@endsection

@section('javascript')
		
AIzaSyBlDbIZnZH8KBfyQhAolKEn7ZaMZ6LH_0A	

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlDbIZnZH8KBfyQhAolKEn7ZaMZ6LH_0A&sensor=false"></script>

		<script>
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
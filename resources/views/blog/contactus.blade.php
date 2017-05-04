@extends('master')



		
@section('content')
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
					<div class="fix sidebar floatright">
						<div class="fix single_sidebar">
							<div class="popular_post fix">
								<h2>Popular</h2>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
							</div>
						</div>
						<div class="fix single_sidebar">
								<h2>Search</h2>
								<input class="search" type="text" placeholder="Search and hit enter"/>
						</div>
						<div class="fix single_sidebar">
							<h2>A little about me</h2>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum. Sed posuere consectetur est at mant lobortis. Sed posuere consectetur est lobortis. Fusce  mauris condimentum.</p>
						</div>
						<div class="fix single_sidebar">
							<h2>Categories</h2>
							<a href="">photography(5)</a>
							<a href="">food(9)</a>
							<a href="">Salads(4)</a>
							<a href="">spicy(3)</a>
							<a href="">Wine(5)</a>
						</div>
					</div>
				</div>
				<div class="fix bottom_add_bar">
					<div style="width:700px;margin:0 auto;"><img src="http://placehold.it/700x90"/></div>
				</div>
			</div>
			</div>
		@endsection

@section('javascript')

		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>

		<script>
		function initialize()
		{
		var mapProp = {
		  center:new google.maps.LatLng(51.508742,-0.120850),
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		var map=new google.maps.Map(document.getElementById("googleMap")
		  ,mapProp);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>

		@endsection
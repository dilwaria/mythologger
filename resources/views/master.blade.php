<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

	<head>
		<title> @yield('title')</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<link rel="stylesheet" href="/fonts/font.css">
		<link href="/css/style.css" rel="stylesheet" media="screen">	
		<link href="/css/responsive.css" rel="stylesheet" media="screen">		
	</head>

<body>
	@include('header')


	@yield('content')

	@include('footer')

	
	 

<script src="https://code.jquery.com/jquery.js"></script>	
<script type="text/javascript" src="js/placeholder_support_IE.js"></script>
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		
		<script type="text/javascript">
			selectnav('nav-top', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
			
			selectnav('nav-bottom', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});			
		</script>	
		<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=59112938ef4e140012286c0a&product=sticky-share-buttons"></script>	
		
		
		@yield('javascript')
	</body>
</html>

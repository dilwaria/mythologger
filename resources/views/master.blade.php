<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 
 @include('superhead')

	

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <div class="languageCheck">
    	<div class="languageCheckText">
    		Translate this article to <b>Italian</b>
		</div>
    </div>
    <div class="container">

     @include('header')

	@yield('content')

	

	
	 

</div>
@include('footer')
 <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    

		
		@yield('javascript')
	</body>
</html>

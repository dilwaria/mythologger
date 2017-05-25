




 <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="{{route('homePage')}}"><img class="logoCss" src="/images/logo.png" alt="Applied Mythology Site" /></a>
            <h2 class="logoMoto">Connecting Contemporary World & Mythology </h2>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
           @if (url()->current() == route('homePage'))
            <li class="dropdown  active">
           @else
            <li class="dropdown  ">
            @endif
                <a href="{{route('homePage')}}">Home </a>

            </li>

                @if (url()->current() == route('categoryPage',['category'=>'hindu-mythology']))
                <li class="dropdown  active">
               @else
                <li class="dropdown  ">
                @endif
                <a href="{{route('categoryPage')}}/hindu-mythology">Hindu Mlogs </a>

            </li>
                
                @if (url()->current() == route('categoryPage',['category'=>'greek-mythology']))
                <li class="dropdown  active">
               @else
                <li class="dropdown  ">
                @endif
                
                <a href="{{route('categoryPage')}}/greek-mythology">Greek Mlogs </a>

            </li>
                @if (url()->current() == route('categoryPage',['category'=>'other-mythology']))
                <li class="dropdown  active">
               @else
                <li class="dropdown  ">
                @endif
                <a href="{{route('categoryPage')}}/other-mythology">Other Mlogs </a>

            </li>
            <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Categories <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.htm">Chinese</a></li>
                    <li><a href="page-right-sidebar.htm">Hindu</a></li>
                    <li><a href="page-left-sidebar.htm">Greek</a></li>
                    <li><a href="page-double-sidebar.htm">Other</a></li>
                </ul>
            </li> -->
            @if (url()->current() == route('contactus'))
            <li class="dropdown  active">
           @else
            <li class="dropdown  ">
            @endif
                <a href="{{route('contactus')}}">Contact </a>

            </li>
             <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm">Blog Style 1</a></li>
                    <li><a href="blog-style2.htm">Blog Style 2</a></li>
                    <li><a href="blog-style3.htm">Blog Style 3</a></li>
                    <li><a href="blog-style4.htm">Blog Style 4</a></li>
                    <li><a href="blog-single.htm">Blog Single</a></li>
                </ul>
             </li> -->
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="index.htm">Home</option>
                    <option value="features.htm">Categories</option>
                    <option value="page-full-width.htm"> -Chinese</option>
                        <option value="page-full-width.htm"> -Hindu</option>
                        <option value="page-right-sidebar.htm"> -Greek</option>
                        <option value="page-left-sidebar.htm"> -Other</option>
                    <option value="gallery-4col.htm">Archive</option>
                       
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->












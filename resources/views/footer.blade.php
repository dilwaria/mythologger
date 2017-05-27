    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>Contact Us</h5>
                    <address>
                        <strong>Mythologger Team</strong><br />
                        Sector-23, Gurugram<br />
                        Haryana, India<br />

                        Contact Us: <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@mythologger.com">contact@mythologger.com</a> 
                    </address>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/mythologger" class="social-icon facebook"></a></li>
                        <li><a href="https://twitter.com/MYTHOLOGGER365" class="social-icon twitter"></a></li>

                    <!--
                        <li><a href="javascript:void(0)" class="social-icon dribble"></a></li>
                        <li><a href="javascript:void(0)" class="social-icon rss"></a></li>
                        <li><a href="javascript:void(0)" class="social-icon forrst"></a></li>
                        !-->
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Testimonials</h5>
                    <ul>
                        <li> Comendable concept. Elucidating mythology in this sense is worth appreciating -- Rajeev Goyal,India</li>
                        <li>Amazing idea. Never thought that myhtology could be this much interesitng -- Zhang Yu, Philippines</li>
                        <li>Nice, succinct, simple. Great perspective. -- Maya Morris, U.S.A</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Popular M-logs</h5>
                     <ul class="post-list">
                     @foreach ( Widgets::getPopularPosts(4) as $posts)

                        <li><a target="_blank" href="<?php echo route('blogDescription',['blogID'=>$posts['id'], 'slug'=>$posts['slug']]) ?>">{{$posts['title']}}</a></li>
                         @endforeach
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Other Links</h5>
                     <ul class="post-list">

                        <li><a target="_blank" href="{{route('categoryPage')}}/hindu-mythology">Hindu Mythology</a></li>
                        <li><a target="_blank" href="{{route('categoryPage')}}/greek-mythology">Greek Mythology</a></li>
                        <li><a target="_blank" href="{{route('categoryPage')}}/chinese-mythology">Chinese Mythology</a></li>
                        <li><a target="_blank" href="{{route('categoryPage')}}/other-mythology">Other Mythologies</a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2017 Mythologger. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="{{route('homePage')}}">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="{{route('contactus')}}">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
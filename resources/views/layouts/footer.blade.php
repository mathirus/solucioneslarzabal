
    <section id="facts" class="facts">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row number-counters">

                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                        <h2>Some Fun Facts</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="counters-item">
                            <i class="fa fa-clock-o fa-3x"></i>
                            <strong data-to="3200">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Hours of Work</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="counters-item">
                            <i class="fa fa-users fa-3x"></i>
                            <strong data-to="120">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="counters-item">
                            <i class="fa fa-rocket fa-3x"></i>
                            <strong data-to="360">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p> Projects Delivered </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="counters-item">
                            <i class="fa fa-trophy fa-3x"></i>
                            <strong data-to="6454">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Awards Won</p>
                        </div>
                    </div>
                    <!-- end first count item -->

                </div>
            </div>
        </div>
    </section>

    <!--
    End Some fun facts
    ==================================== -->


    <!--
    Contact Us
    ==================================== -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50">

                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Let’s Discuss</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                </div>

                <!-- contact address -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3>Cras at ultrices erat, sed vulputate!</h3>
                        <p>2345 Setwant natrer, 1234,</p>
                        <p>Washington. United States.</p>
                        <p>(401) 1234 567</p>
                    </div>
                </div>
                <!-- end contact address -->

                <!-- contact form -->

                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="contact-form">
                        <h3>Say hello!</h3>
                    <form method="POST" action="{{ route('home') }}" id="contact-form">

                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="input-group">
                                <input type="submit" id="form-submit" class="pull-right" >
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end contact form -->

                <!-- footer social links -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <ul class="footer-social">
                        <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                        <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                        <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- end footer social links -->

            </div>
        </div>

        <!-- Google map -->
        <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
        <!-- End Google map -->

    </section>

    <!--
    End Contact Us
    ==================================== -->


    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="footer-single">
                        <img src="img/footer-logo.png" alt="">
                        <p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="footer-single">
                        <h6>Subscribe </h6>
                        <form action="#" class="subscribe">
                            <input type="text" name="subscribe" id="subscribe">
                            <input type="submit" value="&#8594;" id="subs">
                        </form>
                        <p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="footer-single">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="#">Inside Us</a></li>
                            <li><a href="#">Flickr</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Forum</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="footer-single">
                        <h6>Support</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Market Blog</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Pressroom</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-center">
                        Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Themefisher</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
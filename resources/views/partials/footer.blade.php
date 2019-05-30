<!-- Footer -->
<div class="footer">
    <div class="footerTop">
        <div class="row">
            <div class="large-3 medium-6 small-12 columns footer-widget">
                <h2>Newsletter</h2>
                <div class="tx-div"></div>
                <section class="newsletter-subscribe">
                        <div class="input-group input-group-rounded">
                                <p class="subheader">Subcribe to our weekly newsletter.</p>
                        <form action="{{ route('search.result') }}" method="GET">
                            @csrf
                          <div class="input-group">
                            <input class="input-group-field" type="search" name="sub" placeholder="Enter your email...">
                            <div class="input-group-button">
                              <input type="submit" class=" primary button" value="Submit">
                            </div>
                          </div>
                        </form>
                      </section>


            </div><!-- Widget 1 ends /-->

            <div class="large-5 medium-6 small-12 columns footer-widget quick-links">
                <h2>Useful Information</h2>
                <div class="tx-div"></div>
                <ul  class="menu vertical">
                    @foreach ($services1 as $item)
                    <li><a href="{{ route('services.show',$item->slug) }}"> {{ $item->name }}</a></li>
                    @endforeach
                </ul>
                <ul  class="menu vertical">
                    @foreach ($services2 as $item)
                    <li><a href="{{ route('services.show',$item->slug) }}"> {{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div><!-- Widget 2 Ends /-->

            {{--  <div class="large-3 medium-6 small-12 columns footer-widget">
                <h2>Quick Links</h2>
                <div class="tx-div"></div>
                <ul class="vertical office-hours">
                    <li><a href="http://"> Academice Support Service</a></li>
                    <li><a href="http://"> FAQs for Admissions</a></li>
                    <li><a href="http://">Information for the international student</a></li>
                    <li><a href="http://">Information for transfer students</a></li>
                    <li><a href="http://">Payment information</a></li>
                </ul>
            </div><!-- Widget 3 Ends /-->  --}}

            <div class="large-3 medium-6 small-12 columns footer-widget">
                <div class="textwidget">
                    <ul class="address">
                        <li>
                            <i class="fa fa-home"></i>
                            <h4>Address:</h4>
                            <p>
                                P.O. Box 62157 - 00200
                                <br> Nairobi, Kenya
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            <h4>Phone:</h4>
                            <p>+(254) 709-691000
                            <br>+(254) 704-913318</p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <h4>Email:</h4>
                            <p> admissions@cuea.edu</p>
                        </li>
                    </ul><hr>
                    <div class="socialicons">
                        Social:
                        <a target="_blank" href="https://www.facebook.com/TheCatholicUniversityOfEasternAfricaCuea?ref=bookmarks"><i class="fa fa-facebook"></i></a>
                        <a  target="_blank" href="https://twitter.com/cuea_official"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-youtube-play"></i></a>
                    </div><!-- Social Icons /-->
                </div><!-- text widget /-->
            </div><!-- widget 4 /-->
            <div class="clearfix"></div>
        </div><!-- Row Ends /-->

    </div><!-- footerTop Ends here.. -->

    <div class="footerbottom">
        <div class="row">
            <div class="medium-6 small-12 columns">
                <div class="copyrightinfo"><?php echo date("Y"); ?> &copy; <a href="/">Catholic University of Eastern Africa.</a> All Rights Reserved.</div>
            </div><!-- left side /-->
            <div class="medium-6 small-12 columns hide-for-small-only">
                <div class="pull-right">
                    <ul class="menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about.index') }}">About</a></li>
                        <li><a href="{{ route('news.index') }}">News</a></li>
                        <li><a href="{{ route('services.index') }}">Services</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div><!-- Right Side /-->
        </div><!-- Row /-->
    </div><!-- footer Bottom /-->
</div>
<!-- Footer Ends here /-->


<!-- Main Container /-->

<a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>

<!-- Including Jquery so All js Can run -->
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>


<!-- Including Foundation JS so Foundation function can work. -->
<script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>

<!-- Including Owl Carousel File -->
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- Webful JS -->
<script src="{{ asset('js/webful.js') }}"></script>

<!-- Including LightBox Plugin Delete if not using -->
<script src="{{ asset('js/lightbox.min.js') }}"></script>

<!-- REVOLUTION JS FILES Delete if Not Using Revolution Slider -->
<script type="text/javascript" src="{{ asset('lib/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
 The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

{{-- scroll animation script --}}


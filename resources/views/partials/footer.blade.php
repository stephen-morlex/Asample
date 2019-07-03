<!-- Footer -->
<div class="footer">
    <div class="footerTop">
        <div class="row">
            <div class="large-4 medium-6 small-12 columns footer-widget">
                    <h2>CUEA’S&nbsp;Affiliate&nbsp;Colleges</h2>
                    <div class="tx-div"></div>
                    <ul class="vertical office-hours">
                        <li><a href="https://www.cuofss.org/index.php" target="_blank">  Catholic University of South Sudan</a></li>
                        <li><a href="http://">Christ the King Major Seminary Philosophicum</a></li>
                        <li><a href="http://">Don Bosco Philosphicum, Moshi</a></li>
                        <li><a href="http://www.psi-online.org/" target="_blank">Psycho-Spiritual Institute (PSI)</a></li>
                        <li><a href="https://spiritanmissionaryseminary.com/" target="_blank">Spiritan Missionary Seminary, Arusha</a></li>
                        <li><a href="http://www.irs.org.pk/" target="_blank">Institute of Religious Studies (IRS)</a></li>
                        <li><a href="http://www.elimucentre.com/st-augustine-teachers-college-ishiara/" target="_blank">St. Augustine’s Teachers College, Ishiara</a></li>
                        <li><a href="http://">Institute of Catechetics and Pastoral Ministry (ICAPAMI)</a></li>
                        <li><a href="https://www.chemichemi.org/" target="_blank">ChemChemi ya Uzima</a></li>
                        <li><a href="https://amecea.org/ggaba-pastoral-institute/" target="_blank"> AMECEA Pastoral Institute</a></li>
                        <li><a href="http://www.consolatainstituteofphilosophy.com/" target="_blank">Consolata Institute of Philosophy</a></li>
                    </ul>
                    <hr>
                <h2>CUEA’S&nbsp;Constituent&nbsp;Colleges</h2>
                <div class="tx-div"></div>
                <ul class="vertical office-hours">
                    <li><a href="https://hekima.ac.ke/" target="_blank">Hekima University College</a></li>
                    <li><a href="http://tangaza.ac.ke/" target="_blank">Tangaza University College</a></li>
                    <li><a href="http://www.miuc.ac.ke/miuc/" target="_blank">Marist International University College</a></li>
                    <li><a href="https://www.uzimauniversity.ac.ke/" target="_blank">Uzima University College</a></li>
                    <li><a href="http://www.shu.co.ke/" target="_blank">Sacred Heart University College</a></li>
                </ul>
            </div><!-- Widget 3 Ends /-->

            <div class="large-5 medium-6 small-12 columns footer-widget quick-links">
                <h2>Useful Information</h2>
                <div class="tx-div"></div>
                <ul  class="vertical office-hours">
                    <li><a href="https://amecea.org/" target="_blank"> AMECEA</a></li>
                    @foreach ($services1 as $item)
                    <li><a href="{{ route('services.show',$item->slug) }}"> {{ $item->name }}</a></li>
                    @endforeach
                    @foreach ($services2 as $item)
                    <li><a href="{{ route('services.show',$item->slug) }}"> {{ $item->name }}</a></li>
                    @endforeach
                    <br>
                </ul>
                <hr>
                <br>
                 <h2>Quick Links </h2>
                <div class="tx-div"></div>
                <ul  class="vertical office-hours">
                    <li><a href="{{ route('job.index') }}"> Jobs@cuea</a></li>
                    <li><a href="{{ route('document.index') }}">Downloads</a></li>
                    <li><a href="{{ route('scholarships.index') }}">Scholarships</a></li>
                    <li><a href="{{ route('callforpapers.index') }}">Call for papers</a></li>
                    <li><a href="ftp://iso.cuea.edu/" target="_blank">Quality Assurance</a></li>
                </ul>
            </div><!-- Widget 2 Ends /-->
            <div class="large-3 medium-8 small-12 columns footer-widget">
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
                    <div class="socailicons">
                        <section class="newsletter-subscribe">
                            <div class="input-group input-group-rounded">
                                    <p class="subheader">Subcribe to our weekly newsletter.</p>
                            <form action="#">
                                {{-- @csrf --}}
                              <div class="input-group">
                                <input class="input-group-field" type="search" name="sub" placeholder="Enter your email...">
                                <div class="input-group-button">
                                  <input type="submit" class=" primary button" value="Submit">
                                </div>
                              </div>
                            </form>
                        </section>
                    </div>
                    <hr>
                    <div class="socialicons">
                        Social:
                        <a href="https://www.facebook.com/TheCatholicUniversityOfEasternAfricaCuea?ref=bookmarks" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <a href="https://twitter.com/cuea_official" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <a href="https://www.instagram.com/cuea_official/"target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                        <a href="#"><i class="fa fa-youtube-play fa-lg" target="_blank"></i></a></li>
                        <a target="_blank" href="https://www.linkedin.com/in/the-catholic-university-of-eastern-africa-4295b3a9?trk=hp-identity-name"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
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

<a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up fa-lg"></i></a>

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


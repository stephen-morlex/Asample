@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')


<!-- Banner Starts -->
<div class="main-banner">
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
            <ul>	<!-- SLIDE  -->
                @foreach ($carousels as $item)
                <li data-index="{{ $loop->index }}" data-transition="zoomout"
                data-slotamount="default"  data-easein="Power4.easeInOut"
                data-easeout="Power4.easeInOut" data-masterspeed="2000"
                data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500"
                 data-fsslotamount="7" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="{{ Voyager::image($item->image) }}"  alt="First Slide"  data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" />
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                        id="slide-16-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"

                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:300;s:300;"
                        data-start="1000"
                        data-basealign="slide"
                        data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                        id="slide-16-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['721','721','721','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"

                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;"
                        data-mask_in="x:0px;y:0px;"
                        data-mask_out="x:0;y:0;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">{{ $item->body }}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                        id="slide-16-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-82','-82','-82','-58']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"

                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;"
                        data-mask_in="x:0px;y:0px;"
                        data-mask_out="x:0;y:0;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">{{ $item->title }}
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption layer4 rs-parallaxlevel-0"
                        id="slide-16-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-responsive="off"><a href="{{ $item->link }}" class="button primary bordered-light">READ MORE</a>
                    </div>
                </li>
                <!-- SLIDE  -->

                @endforeach
            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div>
<!-- Banner Ends /-->




<!-- information boxes starts -->
<div class="information-boxes module">
        
        <div class="courses-info medium-4 small-12 columns" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
            <div class="">
                <h3><i class="fa fa-book" aria-hidden="true"></i> Academics</h3>
                <p>We are very happy to introduce many dynamic courses which includes many new and great features we are happy to  ...</p>
                <ul class="no-bullet">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Better designed programs for you</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Online Availability to sources</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Helping Board in your learning management</li>
                </ul>
                <div class="clearfix"></div>
                <a href="{{ route('faculty.index') }}" class="primary button bordered-light">Find out More!</a>
            </div>
        </div><!-- courses column Ends /-->
        
        <div class="faculty-info medium-4 small-12 columns" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
            <div class="">
                <h3><i class="fa fa-users" aria-hidden="true"></i> Student Life</h3>
                <p>We have got some best teachers available in town who can help you to polish your skills as much as you can ...</p>
                <ul class="no-bullet">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Better designed programs for you</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Online Availability to sources</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Helping Board in your learning management</li>
                </ul>
                <div class="clearfix"></div>
                <a href="{{ route('student.index') }}" class="primary button bordered-light">Explore more!</a>
            </div>
        </div><!-- faculty info ends /-->
        
        <div class="newadmission-info medium-4 small-12 columns" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
            <div class="">
                <h3><i class="fa fa-sign-in" aria-hidden="true"></i> Admission Process</h3>
                <p>We are happy to tell you that we are accepting new admissions for the semster,get enrolled asap ...</p>
                <ul class="no-bullet">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Find a course best suits of your choice</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Do entry exams and payment for the admission</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Start your course</li>
                </ul>
                <div class="clearfix"></div>
                <a href="{{ route('admission.index') }}" class="primary button bordered-light">Get Enrolled!</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- information boxes ends /-->



<!-- Welcome Message -->
<div class="welcome-message module">
	<div class="row">

            <div class="medium-8 medium-offset-3 small-12 columns our-process">
                    <h2>Why Cuea!</h2>

                    <div class="process">
                        <div class="number"><i class="fa fa-heart" aria-hidden="true"></i></div>
                        <div class="right-info">
                            <h3> Chartered Private University accredited by Commission of University Education.</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- process /-->

                    <div class="process">
                        <div class="number"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <div class="right-info">
                            <h3>Join a Seminar To know More about it!</h3>
                            <p> 34 solid years of offering education grounded on values
                                leading regional and international University.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- process /-->

                    <div class="process">
                        <div class="number"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <div class="right-info">
                            <h3>Get Enrolled and start better future with us!</h3>
                            <p>Rich diversity: Over 20 nationalities and 100+ programmes on offer</p>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- process /-->
                    <div class="process">
                            <div class="number"><i class="fa fa-share" aria-hidden="true"></i></div>
                            <div class="right-info">
                                <h3>Get Enrolled and start better future with us!</h3>
                                <p> Innovative and marketable graduates</p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->
                        <div class="process">
                                <div class="number"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                                <div class="right-info">
                                    <h3>Get Enrolled and start better future with us!</h3>
                                    <p>Thirsty Crow should Call us at: 123-123-1234 to drink water asap before all seats are reserved.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- process /-->
                </div><!-- Left Process Ends /-->


    </div><!-- Row /-->
    <div class="row">
            <div class="small-6 small-centered text-center columns">
                    <a href="{{ route('about.index') }}" style="text-align:center;" class="primary button">More about cuea!</a>
            </div>
        </div>

</div>
<!-- Welcome Message Ends /-->




<!-- Seminar/Events -->
<div class="seminar-events module">

    <div class="row">

            <div class="section-title">
                <h2>Upcoming Events</h2>
                <br>
            </div>


        <div class="events-wrapper">
            @forelse ($events as $e)
            <div class="medium-6 small-12 columns" >
                <div class="event">
                    <div  class="medium-8 small-12 columns event-data "  data-aos="zoom-in-right" data-aos-duration="2000">
                        <h4><a href="{{ route('event.show',$e->slug) }}">{!! $e->title !!}</a></h4>
                        <p> {!!  str_limit($e->content,70) !!}</p>
                        <p><strong>Timinings:</strong> {!!  Carbon\Carbon::parse($e->start)->format('g:i A')!!} - {!!  Carbon\Carbon::parse($e->end)->format('g:i A') !!}
                        <p><strong>Venue:</strong> {!! $e->location !!}
                        <strong>Date:</strong> {!! Carbon\Carbon::parse($e->date)->format('d-m-Y ') !!}</p>
                        <a href="{{ route('event.show',$e->slug) }}" class="button primary ">Join Event</a>
                    </div><!-- Event DAta /-->
                    <div class="medium-4 small-12 columns event-thumb" data-aos="zoom-in-left" data-aos-duration="3000">
                        <img src="{{ Voyager::image( $e->thumbnail('cropped'))}}" alt="{!! $e->title !!}" />
                    </div><!-- Event thumb /-->
                    <br>
                    <div class="clearfix"></div>
                </div><!-- Event div ends /-->
            </div><!-- Event Column Ends /-->

            @empty

            @endforelse

        </div><!-- Events Wrapper Ends /-->

    </div>
    <!-- Row Ends /-->
    <br>
    @if (count($events)>=1)
    <div class="load-more text-center">
        <a href="{{ route('events.index') }}" class="button primary">More Events...</a>
    </div>
    @else
    <h3 align="center" >there is no event at the moment!</h3>
    @endif

</div>
<!-- Seminar Events Ends /-->

<!-- Testimonials Section /-->
<div class="testimonials-wrapper side-controls module">
	<div class="section-title-wrapper">
		<div class="section-title">
			<h2>Social media feeds</h2>
			<h4>Dont miss out!</h4>
        </div>
        <br>
	</div> <!-- Title Ends /-->

	<div class="row">

		<div class="testimonials">
			<div class=" testimonial">
				<div class="testimonial-detail">
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    <a class="twitter-timeline" href="https://twitter.com/CUEA_OFFICIAL" data-widget-id="636436522443644928" data-theme="light" data-link-color="#660000" data-chrome="" data-border-color="">Tweets by @CUEA_OFFICIAL</a>
      		    </div><!-- Testimonial Detail /-->
				<div class="clearfix"></div>
			</div> <!-- Testimonial /-->

			<div class="testimonial" >
                    <div class="flex-video ">
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ny7pBK0_MTk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
             </div> <!-- Testimonial /-->
		</div><!-- Testimonials /-->

    </div><!-- Row /-->

</div>
<!-- Testimonials Section Ends /-->





<!-- Blog Posts -->
<div class="why-cuea">

        <div class="section-title">
            <h2>Latest News</h2>
            <br>
        </div>

    <div class="row">
        @if (count($news)>=1)
        <div class="posts-wrapper">
            @forelse($news as $newsItem)
            <div class="medium-4 small-12 columns">
                <div class="post">
                    <div class="post-thumb"
                    data-aos="zoom-in-down"
                    data-aos-duration="3000"
                    >
                        <a href="{{ route('news.show', $newsItem->slug) }}">
                            <img src="{{ Voyager::image( $newsItem->thumbnail('cropped'))}}" alt="{{ $newsItem->image }}" />
                        </a>
                    </div><!-- Thumb /-->
                    <div class="post-content"
                     data-aos="zoom-in-up"
                     data-aos-duration="3000">
                        <h4><a href="{{ route('news.show', $newsItem->slug) }}">{{ $newsItem->title }}</a></h4>
                        <div class="post-meta"><strong>Date:</strong> {{ $newsItem->created_at->diffForHumans() }} | <strong>Category:</strong> <a href="{{ route('news.category', $newsItem->newsCategory->slug) }}">{{ $newsItem->newsCategory->name }}</a> | <strong>Author:</strong> <a href="#">Administrator</a></div>
                        <p>{!! str_limit($newsItem->content, $limit = 80, $end = '...') !!}<a href="{{ route('news.show', $newsItem->slug) }}">Read More &raquo;</a></p>
                    </div><!-- post content /-->
                </div><!-- Post /-->
            </div><!-- Post column /-->
            @empty


            @endforelse

        </div><!-- Posts Wrapper /-->

        <div class="load-more text-center fixed">
            <a href="{{ route('news.index') }}" class="button primary">See More</a>
        </div><!-- Load more /-->
        @else
        <h3 align="center">No News at the moment!</h3>
        @endif
    </div><!-- Row Ends /-->


</div>
<!-- Blog Posts Ends /-->

<div class="blog-posts module grey-bg">

            <div class="section-title">
                <h2>Campus Gallery</h2>
            </div>
            <br>
           <div class="medium-12 gallery-image">
                        @foreach($galleries as $gallery)
                        @php $image = json_decode($gallery->image); @endphp
                        @if (isset($image[0]))
                        <div class="img-box">
                          <img src="{{ Voyager::image($image[0]) }}" alt="{{ $gallery->title }}" />
                          <div class="transparent-box">
                            <div class="caption">
                              {{--  <p>{{ $gallery->title }}</p>  --}}
                              <p class="opacity-low">{{ $gallery->description }}</p>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach

                </div>

 </div>

</div>



<!-- Our PArtners -->
<div class="brands-wrap side-controls module">
	<div class="section-title-wrapper">
		<div class="section-title">
			<h2>Our Partners</h2>
			<h4>We are proudly partner with following Companies</h4>
        </div>
        <br>
	</div> <!-- Title Ends /-->

	<div class="row">

		<div class="brand-carousel" >
            @if (count($partner) >= 1)
                @foreach ($partner as $partner)
                <div class="bran-logo"><a href="#" target="_blank"><img  alt="" src="{{Voyager::image( $partner->image) }}" class="thumbnail"
                    data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000"
                /></a></div>
                @endforeach
            @else
            {{--  <h3 align="center">No partner at the moment!</h3>  --}}
            @endif
		</div><!-- Brand carousel /-->

	</div><!-- Row /-->

</div>
<!-- Our Partners /-->




<!-- VIDEO -->
<div class="brands-wrap side-controls module">
	<div class="row">
        <iframe width="560" height="400" src="https://www.youtube-nocookie.com/embed/ny7pBK0_MTk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<!-- VIDEO /-->




<!-- Call to Action box -->
<div class="call-to-action">
   <div class="row">
		<div class="medium-10 small-12 columns">
			<h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>+(254) 709-691-000</span></h2>
		</div>
		<div class="medium-2 small-12 columns">
			<a href="{{ route('contact.index') }}" class="button secondary">Appointment</a>
		</div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->



@include('partials.footer')

<script>
        var quadimages = document.querySelectorAll("#quad figure");
        for(i=0; i<quadimages.length; i++) {
          quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") });
        }
</script>
@endsection

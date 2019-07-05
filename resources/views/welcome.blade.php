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
                <li data-index="{{ $loop->index}}" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="{{ Voyager::image($item->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                             id="slide-18-layer-3"
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
                             id="slide-18-layer-1"
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
                            data-responsive_offset="on">{{ $item->title }}
                        </div>
                        <!-- LAYER NR. 3 -->
                      e
                        <!-- LAYER NR. 4 -->
                        {{--  <div class="tp-caption layer4 rs-parallaxlevel-0"
                             id="slide-18-layer-4"
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
                        </div>  --}}
                    </li>
                @endforeach
                <!-- SLIDE  -->
            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div>
<!-- Banner Ends /-->
<!-- information boxes starts -->
<div class="information-boxes module">
        <div class="courses-info medium-4 small-12 columns">
            <div class="">
                <h3><i class="fa fa-book" aria-hidden="true"></i> Academics</h3>
                <p>We form graduates to be well-rounded, broad-minded social catalysts for integral human development.</p>
                <ul class="no-bullet">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Education grounded on values</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Accredited academic programmes</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Clear Learning path, Innovative and marketable graduates</li>
                </ul>
                <div class="clearfix"></div>
                <a href="{{ route('faculty.index') }}" class="primary button bordered-light">Find out More</a>
            </div>
        </div><!-- courses column Ends /-->
        <div class="faculty-info medium-4 small-12 columns">
            <div class="">
                <h3><i class="fa fa-users" aria-hidden="true"></i> Student Life</h3>
                <p>Our focus is holistic growth and lifelong learning for our students.</p>
                <ul class="no-bullet">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Rich extra-curricula activities.</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social events for fun and talent showcase.</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Participation in local and international competitions</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Spiritual movements</li>
                </ul>
                <div class="clearfix"></div>
                <a href="{{ route('student.index') }}" class="primary button bordered-light">Explore more</a>
            </div>
        </div><!-- faculty info ends /-->
        <div class="newadmission-info medium-4 small-12 columns">
            <div class="">
                <h3><i class="fa fa-sign-in" aria-hidden="true"></i> Admission Process</h3>
                <p>CUEA accepts qualified applicants from all over the world.</p>
                <ul class="no-bullet">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Applicants fill in the application form and pays the application fee.</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>The University accepts qualified applicants</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>The Applicant receives an Admission letter</li>
                    {{-- <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Government-Sponsored students get a direct placement</li> --}}
                </ul>
                <div class="clearfix"></div>
                <a href="{{ route('admission.index') }}" class="primary button bordered-light">Get Enrolled</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- information boxes ends /-->
<!-- Welcome Message -->
<div class="welcome-message module">
	<div class="row">
            <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Why CUEA</h2>
                    </div>
                    <br>
                </div> <!-- Title Ends /-->
                    <div class="medium-4 columns our-process">
                      <div class="media-object process">
                        <div class="number media-object-section">
                            <div class="number"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5><a href="http://www.cue.or.ke/index.php/component/accreditedinstitutions/?view=university&amp;Itemid=253"><h5> Chartered Private University accredited by Commission of University Education.</h5></a></h5>
                        </div>
                      </div>
                      <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-users" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5> Rich diversity: Over 30 nationalities and 100+ programmes on offer.</h5>
                        </div>
                      </div>
                      <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-certificate" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5> Clear learning path from Certificate, Diploma, Degree, Masters and Doctoral Courses with a high completion time rate.</h5>
                        </div>
                      </div>
                    </div>
                    <div class="medium-4 columns our-process">
                        <div class="media-object process">
                            <div class=" number media-object-section">
                                <div class="number"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                            </div>
                            <div class="media-object-section right-info">
                                <h5> 35 solid years of offering education grounded on values.</h5>
                            </div>
                          </div>
                          <div class="media-object process">
                            <div class=" number media-object-section">
                                <div class="number"><i class="fa fa-files-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="media-object-section right-info">
                                <h5>Training and examination centre for ACCA and KASNEB (CPA & CS).</h5>
                            </div>
                          </div>
                          <div class="media-object process">
                            <div class=" number media-object-section">
                                <div class="number"><i class="fa fa-building" aria-hidden="true"></i></div>
                            </div>
                            <div class="media-object-section right-info">
                                <h5> Two campuses: Main campus located in Langata, Nairobi and Gaba campus located in Eldoret.</h5>
                            </div>
                          </div>
                    </div>
                    <div class="medium-4 columns our-process">
                        <div class="media-object process">
                            <div class=" number media-object-section">
                                <div class="number"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            </div>
                            <div class="media-object-section right-info">
                                <h5> A leading regional and international University..</h5>
                            </div>
                          </div>
                          <div class="media-object process">
                            <div class=" number media-object-section">
                                <div class="number"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                            </div>
                            <div class="media-object-section right-info">
                                <a href="{{ route('student.index') }}"><h5>Rich extra-curricula activities, innovation and marketable graduates.</h5></a>
                            </div>
                          </div>
                          <div class="media-object process">
                            <div class=" number media-object-section">
                                <div class="number"><i class="fa fa-eye" aria-hidden="true"></i></div>
                            </div>
                            <div class="media-object-section right-info">
                                <h5>Quality and prompt research supervision for postgraduate students.</h5>
                            </div>
                          </div>
                    </div>
    </div><!-- Row /-->
    <br>

    <div class="row">
            <div class="small-6 small-centered text-center columns">
                    <a href="{{ route('about.index') }}" style="text-align:center;" class="primary button">More about cuea</a>
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
                        <h5><a href="{{ route('event.show',$e->slug) }}">{!! $e->title !!}</a></h5>
                        <p>{!!  substr(strip_tags($e->content), 0, 100) !!}...</p>
                        <p><strong>Timinings:</strong> {!!  Carbon\Carbon::parse($e->start)->format('g:i A')!!} - {!!  Carbon\Carbon::parse($e->end)->format('g:i A') !!}
                        <p><strong>Venue:</strong> {!! $e->location !!}
                        <strong>Date:</strong> {!! Carbon\Carbon::parse($e->date)->format('d-m-Y ') !!}</p>
                        <a href="{{ route('event.show',$e->slug) }}" class="button primary ">More Details</a>
                    </div><!-- Event DAta /-->
                    <div class="medium-4 small-12 columns event-thumb" data-aos="zoom-in-left" data-aos-duration="3000">
                        <img src="{{ Voyager::image( $e->thumbnail('cropped'))}}" alt="{!! $e->title !!}" />
                    </div><!-- Event thumb /-->
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
        <a href="{{ route('events.index') }}" class="button primary">More Events</a>
    </div>
    @else
    <h3 align="center" >there is no event at the moment!</h3>
    @endif

</div>
<!-- Seminar Events Ends /-->

<!-- Testimonials Section /-->
<div class="welcome-message module">
<div class="row">
  <div class="columns">
    <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
      <li class="tabs-title "><a href="#panel1c">Twitter</a></li>
      <li class="tabs-title is-active" aria-selected="true"><a href="#panel2c">Youtube</a></li>
    </ul>
    <div class="tabs-content" data-tabs-content="collapsing-tabs">
      <div class="tabs-panel " id="panel1c">
        <a class="twitter-timeline" data-width="1200" data-height="650" data-theme="light" data-link-color="#e79800" href="https://twitter.com/CUEA_OFFICIAL?ref_src=twsrc%5Etfw">Tweets by CUEA_OFFICIAL</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="tabs-panel is-active" id="panel2c">
            <div class="plyr__video-embed" id="player" download>
                    <iframe
                        src="https://youtu.be/ny7pBK0_MTk"
                        allowfullscreen
                        allowtransparency
                        captions
                        allow="autoplay"
                    ></iframe>
                </div>
        <div data-type="youtube" data-video-id="https://youtu.be/ny7pBK0_MTk" autoplay></div>
      </div>
      <div class="tabs-panel " id="panel3">
        <a class="twitter-timeline" data-width="1200" data-height="650" data-theme="light" data-link-color="#e79800" href="https://twitter.com/CUEA_OFFICIAL?ref_src=twsrc%5Etfw">Tweets by CUEA_OFFICIAL</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Testimonials Section Ends /-->

<!-- Blog Posts -->
<div class="why-cuea">
    <div class="section-title-wrapper">
		<div class="section-title">
			<h2>Latest news</h2>
        </div>
        <br>
	</div> <!-- Title Ends /-->
    <div class="row">
           @forelse($news as $newsItem)
            <div class="medium-4 small-12 columns" >
            <div class="card"  data-aos="fade-up"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                    <div class="card-image">
                         <img src="{{ Voyager::image( $newsItem->thumbnail('cropped'))}}" alt="">
                        <span class="card-date">{{ $newsItem->created_at->format('d') }} <br>{{ $newsItem->created_at->format('M') }}  </span>
                        <span class="card-tag"><h5><a href="{{ route('news.show', $newsItem->slug) }}">{{ $newsItem->title }}</a></h5></span>
                    </div>
                    <hr>
                    <div class="card-text">
                        <p>{!!  substr(strip_tags($newsItem->content), 0, 100) !!}...<a href="{{ route('news.show', $newsItem->slug) }}">Read More &raquo;</a></p>
                        <div class="card-meta">
                        <span><i class="fa fa-list"></i> <a href="{{ route('news.category', $newsItem->newsCategory->slug) }}">{{$newsItem->newsCategory->name}}</a></span>
                        </div>
                    </div>
            </div>

        </div>

         @empty

         @endforelse

    </div>
    <br>
     <div class="row">
            <div class="small-6 small-centered text-center columns">
                    <a href="{{ route('news.index') }}" style="text-align:center;" class="primary button">More news</a>
            </div>
    </div>
</div>

<!-- Blog Posts Ends /-->

<div class="blog-posts module grey-bg">
     <div class="row">
            <div class="section-title">
                <h2>Campus Gallery</h2>
            </div>
            <br>
    <div class="medium-12 small-12 columns gallery-image">
         @foreach($galleries as $gallery)
            @php $image = json_decode($gallery->image); @endphp
                @if (isset($image[0]))
                    <div class="media-object img-box">
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

<!-- Content Section Ends /-->
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
                @foreach ($partner as $partner)
                <div class="bran-logo"><a title="{{ $partner->title }}" href="{{ $partner->url }}" target="_blank"><img  alt="{{ $partner->title }}" src="{{Voyager::image( $partner->image) }}" class="thumbnail"
                    data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000"
                /></a>
            </div>
                @endforeach
		</div><!-- Brand carousel /-->
	</div><!-- Row /-->
</div>
<!-- Our Partners /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->

@include('partials.footer')

{{--  <script>
        var quadimages = document.querySelectorAll("#quad figure");
        for(i=0; i<quadimages.length; i++) {
          quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") });
        }
</script>  --}}
@endsection

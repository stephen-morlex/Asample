@extends('layouts.app')
@section('title', $faculty->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>{!! $faculty->name !!}</h2>
                        <div class="tx-div"></div>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li class="active"><a href="{{ route('faculty.index') }}">Faculties, Schools and Institute</a></li>
                     <li class="active"><a href="{{ route('faculty.show',$faculty->slug) }}">{{ $faculty->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->

<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-8 small-12 columns posts-wrap">
            {{--  <h2>{!! $faculty->name !!}</h2>  --}}
            <div class="event-thumb">
                <img  src="{{ Voyager::image( $faculty->image ) }}"  class="thumbnail" />
            </div><!-- Course Thumb /-->
            <div class="event-content">
                <p></p>
                    <p>{!! $faculty->description  !!}</p>
                    <hr>
                    <p>{!! $faculty->content !!}</p>
                </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
        <div class="medium-4 small-12 columns sidebar">
            {{-- Link to word from the Dean --}}
            @if (empty($faculty->dean))
            @else
                    <div class="widget">
                    <ol class="menu vertical">
                     <li><a href="{{ route('dean.show',$faculty->dean->slug) }}"> <i class="fa fa-file-text fa-lg" aria-hidden="true"></i> Word from the Dean</a></li>
                    </ol>
                  </div><!-- widget ends /-->
            @endif
            {{-- Link to faculty Leaders --}}
            @if (empty($faculty->leaders))
            @else
                <div class="widget">
                    <ol class="menu vertical">
                        <li><a href="{{ route('leader.faculty',$faculty->slug) }}"> <i class="fa fa-th-list fa-lg" aria-hidden="true"></i> Faculty Leadership</a></li>
                    </ol>
                </div><!-- widget ends /-->
            @endif
            <div class="widget">
                    <h2>{!! $faculty->name !!} Programmes</h2>
                    @if (count($sections)==0)
                    <p><a href="{{ route('program.index') }}">Show all programmes</a></p>
                    @else
                    <ul class="accordion"  data-accordion data-allow-all-closed="true">
                        @foreach ($sections as $section => $programs)
                            <li class="accordion-item " data-accordion-item>
                              <a href="#deeplink1" class="accordion-title">{{ App\Section::find($section)->name }}</a>
                              <div class="accordion-content" data-tab-content id="deeplink1">
                                    <ul style="max-height:150px !important;overflow:scroll;"class="menu vertical">
                                    @foreach ($programs as $program)
                                    <li><a href="{{route('program.show',$program->slug)}}">{!!$program->name !!}</a></li>
                                    <hr>
                                    @endforeach
                                </ul>
                              </div>
                            </li>
                          @endforeach
                    </ul>
                    @endif
            </div>
            <div class="widget">
                <ol class="menu vertical">
                     <li><a href="{{ Voyager::image( (json_decode($faculty->file))[0]->download_link) }}" target="_blank"> <i class="fa fa-download fa-lg" aria-hidden="true"></i>{!! $faculty->name !!} Brochure</a>
                    </li>
                    <br>
                    <li><a href="{{ route('admission.index') }}">  <i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i> Apply now</a></li>
                </ol>
            </div><!-- widget ends /-->

            <div class="widget">
                <h2>Intakes</h2>
                <ul class="menu vertical">
                    <li><a href="#">January - April</a></li>
                    <li><a href="#">May - july</a></li>
                    <li><a href="#">August - December</a></li>
                </ul>
            </div><!-- widget ends /-->

            <div class="widget">
                <h2> Some People also interested in</h2>

                <ul class="menu vertical">
                    @foreach ($alsoInterested as $f)
                    <li><a href="{{ route('faculty.show',$f->slug) }}">{{ $f->name }}</a></li>
                    @endforeach
                </ul>
            </div><!-- widget ends /-->
            <div class="clearfix"></div>
            </div><!-- widget ends /-->

        </div><!-- right bar ends here /-->

    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

<!-- Our Teachers -->

<div class="seminar-events content-area module">
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
                <a href="{{ route('about.index') }}" style="text-align:center;" class="primary button">More about cuea!</a>
        </div>
</div>

</div>
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

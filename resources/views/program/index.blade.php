@extends('layouts.app')
@section('title', 'Programms')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Programmes</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li ><a href="{{ route('program.index') }}">Programmes</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->
<div class="content-section">
    <div class="program-seminar">
        <div class="row">

            <div class="courses-wrapper">
                <div class="course-section">
                        <div class="section-title-wrapper">
                                <div class="section-title">
                                    <h2>Our Progammes</h2>
                                </div>
                                <br>
                            </div> <!-- Title Ends /-->
              @forelse ($sections as $section)
              <div class="medium-3 small-12 columns">
                        <div class="single-product">
                            <div class="product-img thumbnail" data-aos="fade-up"  data-aos-duration="2000">
                                <a href="{{route('program.section',$section->slug)}}">
                                    <img   class="front-image" src="{{ Voyager::image( $section->thumbnail('cropped'))}}" alt="{{$section->name}}">
                                </a>
                                <div class="add-to-cart-top" >
                                        <a href="{{route('program.section',$section->slug)}}" class="button primary">{{$section->name}}</a>
                                </div>
                            </div>
                            <div class="product-info"
                            data-aos="zoom-in"data-aos-anchor-placement="bottom-bottom" data-aos-duration="3000"
                            >
                                <h6><a href="{{route('program.section',$section->slug)}}">{{$section->name}}</a></h6>
                               <div class="tx-div"></div>
                            </div>
                        </div>
                    </div><!-- product Ends here -->
              @empty
              @endforelse
                    <div class="clearfix"></div>
                </div><!-- Courses Section Ends /-->
        </div><!-- Row Ends /-->

    </div>
    <!-- Our Teachers /-->
    </div>
</div>
<!-- Content Section Ends /-->
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
</div>
  <!-- Content Section Ends /-->
<div class="content-section">
     <div class="program-seminar">
             <div class="courses-wrapper">
                    <div class="course-section">
                            <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h2>Our programmes</h2>
                                    </div>
                                    <br>
                             </div> <!-- Title Ends /-->
                              @forelse ($programs as $section => $programs)
                              <div class="medium-3 small-12 columns">
                                    <div class="price-plan">
                                        <div class="price-title">
                                            <h4 class="title-heading">{{ App\Section::find($section)->name }}</h4>
                                        </div><!-- price title ends /-->
                                        <ul class="price-details">
                                            @foreach ($programs as $program)
                                            <li>
                                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                    <a href="{{route('program.show',$program->slug)}}">{!!$program->name !!}</a>
                                             </li>
                                            @endforeach
                                        </ul><!-- price details /-->
                                    </div><!-- price-plan /-->
                                </div><!-- first column ends /-->
                              @empty

                              @endforelse
                    <div class="clearfix"></div>
                    </div>
            </div>


    </div>
</div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

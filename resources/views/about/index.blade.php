@extends('layouts.app')
@section('title', 'About CUEA')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

    <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>About Cuea</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('about.index')}}">About cuea</a></li>
                    @foreach ($about as $a)
                    <li class="active"><a href="#"> {{ $a->title }}</a></li>
                    @endforeach

                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

    <!-- Content Area Starts -->
<div class="content-section">
    <div class="content-section module blog-page">
        <div class="row">
             <div class="medium-8 small-12 columns posts-wrap">
            <div class="event-thumb">
                 <div class="tx-div"></div>
            </div><!-- Course Thumb /-->
            <div class="event-content">
             <div>
                 <p>The Catholic University of Eastern Africa (CUEA), like most other universities, started in a modest way. It commenced as a graduate school of theology known as the Catholic Higher Institute of Eastern Africa (CHIEA).</p>
             </div>
                <div class="timeline">
                        <p></p>
                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                          </div>
                          <div class="timeline-content"
                           data-aos="zoom-in-right" data-aos-duration="2000"
                          >
                            <p class="timeline-content-date">1984</h2>
                                <hr>
                            <p>
                                    The Institute (CHIEA) was founded in 1984 by the regional ecclesiastical authority known as the Association of Member Episcopal Conferences of Eastern Africa (AMECEA). Eritrea, Ethiopia, Kenya, Malawi, Sudan, Tanzania, Uganda and Zambia are the member countries of AMECEA.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                          </div>
                          <div class="timeline-content right"
                           data-aos="zoom-in-left" data-aos-duration="2500"
                          >
                            <p class="timeline-content-date">1984</h2>
                                <hr>
                            <p>
                                    On 2 May 1984, CHIEA was authorized by the Congregation for Catholic Education, Vatican City (cf. Prot. N. 821/80/34), to offer two-year Licentiate/MA programmes in Theology. On 3 September of the same year, it was officially inaugurated by Rt Rev. Bishop Madaldo Mazombwe, the then Chairman of AMECEA.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                          </div>
                          <div class="timeline-content"
                           data-aos="zoom-in-right" data-aos-duration="2500"
                          >
                            <p class="timeline-content-date">1985</h2>
                                <hr>
                            <p>
                                    On 18 August 1985, it was formally opened by Pope John Paul II. In 1986, the Graduate School of Theology started negotiations with the Commission for Higher Education in Kenya towards the establishment of the Catholic University of Eastern Africa (CUEA).
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                          </div>
                          <div class="timeline-content right"
                           data-aos="zoom-in-left" data-aos-duration="2000"
                          >
                            <p class="timeline-content-date">1989</h2>
                                <hr>
                            <p>
                                    In 1989, the Institute obtained the "Letter of Interim Authority" as the first step towards its establishment as a private university. After three years of intensive negotiations between the Authority of the Graduate School of Theology (CHIEA) and the Commission for Higher Education, the Faculty of Arts and Social Sciences was established. The climax of the negotiations was a granting of the Civil Charter to CHIEA on 3 November 1992. This marked the birth of the university as a private institution.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                          </div>
                          <div class="timeline-content"
                           data-aos="zoom-in-right" data-aos-duration="2500"
                          >
                            <p class="timeline-content-date">2002- <span class="timeline-content-month">february</span></p>
                            <p>In 2002, the Faculties of Science and Commerce were established. Then in 2003, the Center for Social Justice & ethics was established.
                                 For more details see here.
                                </p>
                          </div>
                        </div>
                      </div>
            </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
           <div class="medium-4 small-12 columns sidebar">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Why Study With Us?</strong><br>
                                    Chartered Private University accredited by Commission of University Education.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->

                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Special Techniques</strong><br>
                                    34 solid years of offering education grounded on values.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->

                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>International University</strong><br>
                                    Rich diversity: Over 20 nationalities  and 100+ programmes on offer.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->

                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Get Admission</strong><br>
                                    admissions@cuea.edu <br>
                                    +254 (0) 709-691-111
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends -->

        </div><!-- Row Ends /-->
    </div>
</div><!-- Content Section Ends /-->

 <!-- Content Area Ends /-->
 <!-- Call to Action box -->
 @include('partials.call')
 <!-- Call to Action End /-->
 @include('partials.footer')
@endsection



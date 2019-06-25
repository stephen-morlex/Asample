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
                <h3>History of CUEA</h3>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui" d="M19 10v6a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2c0-1.1.9-2 2-2v-6a2 2 0 0 1-2-2V7a1 1 0 0 1 .55-.9l8-4a1 1 0 0 1 .9 0l8 4A1 1 0 0 1 21 7v1a2 2 0 0 1-2 2zm-6 0h-2v6h2v-6zm4 0h-2v6h2v-6zm-8 0H7v6h2v-6zM5 7.62V8h14v-.38l-7-3.5-7 3.5zM5 18v2h14v-2H5z"/></svg>
                          </div>
                          <div class="timeline-content"
                           data-aos="zoom-in-right" data-aos-duration="2000"
                          >
                            <p class="timeline-content-date">1984</h2>
                                <div class="tx-div"></div>
                            <p>
                                The Catholic University of Eastern Africa (CUEA), like most other universities, started in a modest way. It was established in 1984 as a graduate school of theology known as the Catholic Higher Institute of Eastern Africa (CHIEA) by the regional ecclesiastical authority known as the Association of Member Episcopal Conferences of Eastern Africa (AMECEA). Eritrea, Ethiopia, Kenya, Malawi, Sudan, Tanzania, Uganda and Zambia are the member countries of AMECEA.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui" d="M20 9v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2zm0-2V5H4v2h16zM6 9v10h12V9H6zm4 2h4a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2z"/></svg>
                          </div>
                          <div class="timeline-content right"
                           data-aos="zoom-in-left" data-aos-duration="2500"
                          >
                            <p class="timeline-content-date">1984</h2>
                                <div class="tx-div"></div>
                            <p>
                                 On 2 May 1984, CHIEA was authorized by the Congregation for Catholic Education, Vatican City (cf. Prot. N. 821/80/34), to offer two-year Licentiate/MA programmes in Theology. On 3 September of the same year, it was officially inaugurated by Rt Rev. Bishop Madaldo Mazombwe, the then Chairman of AMECEA.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/></svg>
                          </div>
                          <div class="timeline-content"
                           data-aos="zoom-in-right" data-aos-duration="2500"
                          >
                            <p class="timeline-content-date">1985</h2>
                                <div class="tx-div"></div>
                            <p>
                                    On 18 August 1985, it was formally opened by Pope John Paul II. In 1986, the Graduate School of Theology started negotiations with the Commission for Higher Education in Kenya towards the establishment of the Catholic University of Eastern Africa (CUEA).
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                          </div>
                          <div class="timeline-content right"
                           data-aos="zoom-in-left" data-aos-duration="2000"
                          >
                            <p class="timeline-content-date">1989</h2>
                                <div class="tx-div"></div>
                            <p>
                                    In 1989, the Institute obtained the "Letter of Interim Authority" as the first step towards its establishment as a private university. After three years of intensive negotiations between the Authority of the Graduate School of Theology (CHIEA) and the Commission for Higher Education, the Faculty of Arts and Social Sciences was established. The climax of the negotiations was a granting of the Civil Charter to CHIEA on 3 November 1992. This marked the birth of the university as a private institution.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                          </div>
                          <div class="timeline-content"
                           data-aos="zoom-in-right" data-aos-duration="2500"
                          >
                            <p class="timeline-content-date">2002</p>
                            <div class="tx-div"></div>
                            <p>In 2002, the Faculties of Science and Commerce were established. Then in 2003, the Center for Social Justice & ethics was established.
                                 For more details see here.
                                </p>
                          </div>
                        </div>
                      </div>
            </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
           <div class="medium-3 small-12 columns sidebar">
                      @foreach ($abouts as $item)
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <a href="{{ route('about.show',$item->slug) }}"><p><strong>{{ $item->title }}</strong><br></a></p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
            @endforeach
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



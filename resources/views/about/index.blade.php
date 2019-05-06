  @extends('layouts.app')


    @section('content')
    @include('partials.topNav')
    @include('layouts.mainNav')

    <br>
    <div class="row">
        <div class=" small-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li class="active"><a href="/">Home</a></li>
                    <li class="active"><a href="{{ route('about.index') }}">About Cuea</a></li>
                    @foreach ($about as $a)
                    <li class="active"><a href="#"> {{ $a->title }}</a></li>
                    @endforeach

                </ul>
            </nav>
        </div>
    </div>


    <!-- Content section -->
        <div class="content-section module blog-page">

            <div class="row">

                <div class="medium-9 small-12 columns posts-wrap">

                    <div class="event-thumb">
                        <img src="{{ asset('images/crop.png') }}" alt="Something0" class="thumbnail" />
                    </div><!-- Course Thumb /-->


                    <div class="event-content">


                        <!-- <ul class="accordion" data-accordion>
                            <li class="accordion-item is-active" data-accordion-item>
                                <a href="#" class="accordion-title">Brief History</a> -->
                                <!-- <div class="accordion-content" data-tab-content> -->

                                    <p style="text-align: justify;">
                                        The Catholic University of Eastern Africa (CUEA), like most other universities, started in a modest way. It commenced as a graduate school of theology known as the Catholic Higher Institute of Eastern Africa (CHIEA).<br><br>

                                        The Institute (CHIEA) was founded in 1984 by the regional ecclesiastical authority known as the Association of Member Episcopal Conferences of Eastern Africa (AMECEA). Eritrea, Ethiopia, Kenya, Malawi, Sudan, Tanzania, Uganda and Zambia are the member countries of AMECEA.<br><br>

                                        On 2 May 1984, CHIEA was authorized by the Congregation for Catholic Education, Vatican City (cf. Prot. N. 821/80/34), to offer two-year Licentiate/MA programmes in Theology. On 3 September of the same year, it was officially inaugurated by Rt Rev. Bishop Madaldo Mazombwe, the then Chairman of AMECEA.<br><br>

                                        On 18 August 1985, it was formally opened by Pope John Paul II. In 1986, the Graduate School of Theology started negotiations with the Commission for Higher Education in Kenya towards the establishment of the Catholic University of Eastern Africa (CUEA).<br><br>

                                        In 1989, the Institute obtained the "Letter of Interim Authority" as the first step towards its establishment as a private university. After three years of intensive negotiations between the Authority of the Graduate School of Theology (CHIEA) and the Commission for Higher Education, the Faculty of Arts and Social Sciences was established. The climax of the negotiations was a granting of the Civil Charter to CHIEA on 3 November 1992. This marked the birth of the university as a private institution.<br><br>

                                        In 2002, the Faculties of Science and Commerce were established. Then in 2003, the Center for Social Justice & ethics was established.
                                    </p>
                                <!-- </div> -->
                            <!-- </li>
                        </ul> -->

                    </div><!-- Course content /-->

                </div><!-- Posts wrap ends /-->

                <div class="medium-3 small-12 columns sidebar">
                    <div class="widget">
                        <h2>Links</h2>

                        <ol class="menu vertical">
                            <li class="active"><a href="#">Brief History</a></li>
                            <li><a href="our_vision_and_mission.html">Our Vision & Mission</a></li>
                            <li><a href="our_philosophy.html">Our Philosophy</a></li>

                            <li><a href="our_core_values.html">Our Core Value</a></li>
                            <li><a href="our_goals.html">Our Goals</a></li>
                            <li><a href="our_objective.html">Our Objective</a></li>

                            <li><a href="quality_policy.html">Quality Policy</a></li>
                            <li><a href="corporate_quality_objectives.html">Corporate Quality Objectives</a></li>
                            <li><a href="governance.html">Governance</a></li>
                        </ol>
                    </div><!-- widget ends /-->






                </div><!-- right bar ends here /-->

            </div><!-- Row Ends /-->

        </div>
        <!-- Content Section Ends /-->




        <!-- Call to Action box -->
<!--         <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i>  If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="#" class="button secondary">Appointment</a>
                </div>
           </div>
         </div> -->
        <!-- Call to Action End /-->


    @include('partials.footer')
    @endsection



@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Admission</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('admission.index')}}">Admission</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
<div class="content-section">

    <br>
    <div class="seminar-events">

        <div class="row">

                <div class="course-section">

                    <div class="section-title">
                    <h2><span>Application form</span></h2>
                    </div><!-- Section Title Ends /-->
                    
                            <div class="content-area module faq">
                                
                <div class="row">

                    <div class="medium-8 small-12 small-centered columns">
                        <h2>Use this form to apply.</h2>
                        <p>thanks!.</p>
                        @include('partials.message')
                        <div class="contact-form">
                      <form action="{{ route('application.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="medium-6 small-12 columns">
                                <label>
                                    <input type="text" name="fullName" value="{{ old('fullName') }}" placeholder="Your name here..." />
                                </label>
                            </div>
                            <div class="medium-6 small-12 columns">
                                <label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email here..." />
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-3 small-12 columns">
                                <label>
                                    <select name="countryCode" value="{{ old('countryCode') }}">
                                        <option value="1">Country code</option>
                                        <option value="2">+2547</option>
                                        <option value="3">+2567</option>
                                    </select>
                                </label>
                            </div>
                            <div class="medium-9 small-12 columns">
                                <label>
                                    <input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}" placeholder="Phone number..." />
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="faculty" value="{{ old('faculty') }}">
                                        
                                        <option value="1">Area of interest</option>
                                        @foreach ($faculties as $fl)
                                        <option value="{{ $fl->name }}">{{ $fl->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="program" value="{{ old('program') }}">

                                        <option value="1">Program of interest</option>
                                        @foreach ($program as $pl)
                                        <option value="{{ $pl->name }}">{{ $pl->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="modeOfStudy" value="{{ old('modeOfStudy') }}">
                                        <option value="1">Preferred mode of study</option>
                                        <option value="Full time">Full time</option>
                                        <option value="Odel">Odel</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                         
                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="phd" value="{{ old('phd') }}">
                                        <option value="1">Choose professional course</option>
                                        <option value="Phd in religion">Phd in religion</option>
                                        <option value="Phd in journalism">Phd in journalism</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->


                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="doctorate" value="{{ old('doctorate') }}">
                                        <option value="1">Choose doctorate program</option>
                                        <option value="Doctor of philosphy">Doctor of philosphy</option>
                                        <option value="Doctor of Nana">Doctor of Nana</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="masters" value="{{ old('masters') }}">
                                        <option value="1">Choose masters program</option>
                                        <option value="Masters in religous">Masters in religous matters</option>
                                        <option value="Odel">Odel</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="degree" value="{{ old('degree') }}">
                                        <option value="1">Choose degree program</option>
                                        <option value="Bachelors in Science">Bachelors in Science</option>
                                        <option value="Bachelors nursing">Bachelors nursing</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="diploma" value="{{ old('diploma') }}">
                                        <option value="1">Choose diploma program</option>
                                        <option value="Diploma IT">Diploma IT</option>
                                        <option value="Diploma in graphics">Diploma in graphics</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select name="certificate" value="{{ old('certificate') }}">
                                        <option value="1">Choose certificate program</option>
                                        <option value="Certificate in networks">Certificate in networks</option>
                                        <option value="Certificate in Artcraft">Certificate in Artcraft</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <input type="submit" class="button primary" value="Send your application" />
                            </div>
                        </div><!-- Row Ends /-->

                    </div><!-- Contact form /-->
                       </div> <!-- right sidebar ends -->
                   </form>


                </div><!-- row / -->
            </div>
            <!-- Content Area Ends /-->


                    <div class="clearfix"></div>
                </div><!-- Courses Section Ends /-->



        </div><!-- Row Ends /-->

    </div>
    <!-- Our Teachers /-->

</div>
<!-- Content Section Ends /-->


<!-- Call to Action box -->
<div class="call-to-action">
   <div class="row">
        <div class="medium-10 small-12 columns">
            <h2><i class="fa fa-phone" aria-hidden="true"></i>  If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
        </div>
        <div class="medium-2 small-12 columns">
            <a href="#" class="button secondary">Appointment</a>
        </div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->

@include('partials.footer')
@endsection

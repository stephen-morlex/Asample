@extends('layouts.app')
@section('title',  $admission->name)
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
                       <li class="active"><a href="#">{{ $admission->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

      <!-- Content Area Starts -->
        <div class="content-area module faq">
                <div class="row">

                    <div class="medium-9 small-12 columns">
                        <ul class="accordion" data-accordion>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Application Process</a>
                                <div class="accordion-content" data-tab-content>
                                    {!! $admission->process !!}
                                </div>
                            </li>

                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Application Requirments</a>
                                <div class="accordion-content" data-tab-content>
                                    {!! $admission->requirement !!}
                                </div>
                            </li>

                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Application Forms</a>
                                <div class="accordion-content" data-tab-content>
                                        <?php $file = (json_decode($admission->application))[0]->download_link; ?>
                                        <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$admission->Nom}} Click here to download the application form </a>
                                </div>
                            </li>

                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Brochure</a>
                                <div class="accordion-content" data-tab-content>
                                        <?php $file = (json_decode($admission->brochure))[0]->download_link; ?>
                                        <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$admission->Nom}} Click here to download the Brohure</a>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">Fees structure</a>
                                <div class="accordion-content" data-tab-content>

                                    {!! $admission->fees !!}
                                </div>
                            </li>

                        </ul> <!-- reasons accordion ends -->
                       </div> <!-- right sidebar ends -->



                       <div class="medium-3 small-12 columns sidebar">
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

                </div><!-- row / -->
            </div>
            <!-- Content Area Ends /-->

               <!-- Content Area Starts -->
       	<div class="financial">
               @foreach ($financial as $item)
               <div class="row">
                    <div class="medium-6 columns medium-push-6  gallery-image" >
                            <div class="img-box" data-aos="zoom-in-left"   data-aos-duration="2500"
                            data-aos-easing="ease-in-sine">
                                    <a href="{{ route('services.show',$item->slug) }}">
                                    <img class="thumbnail" src="{{ Voyager::image( $item->image)}}">
                                    <div class="transparent-box">
                                      <div class="caption">
                                        {{--  <p>{{ $item->name }}</p>  --}}
                                        <p class="opacity-low">{{ $item->name}}</p>
                                      </div>
                                    </div>
                                    </a>
                                  </div>
                    </div>
                    <div class="medium-6 columns medium-pull-6" data-aos="zoom-in-right"  data-aos-duration="3000"
                    data-aos-easing="ease-in-sine">
                    <a href="{{ route('services.show',$item->slug) }}"><h2>{{ $item->name }}.</h2></a>
                    <p>{!! str_limit($item->content,300) !!}<a href="{{ route('services.show', $item->slug) }}"><strong>Read More &raquo;</strong></a></p>
                    </div>
                    </div>
               @endforeach
               <hr>
                <div class="row">
                    <div class="medium-4 columns">
                    <h3>Photoshop</h3>
                    <p>AVivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
                    </div>
                    <div class="medium-4 columns">
                    <h3>Javascript</h3>
                    <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
                    </div>
                    <div class="medium-4 columns">
                    <h3>Marketing</h3>
                    <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
                    </div>
                    </div>
            </div>
            <!-- Content Area Ends /-->



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
@endsection

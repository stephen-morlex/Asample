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
                                        <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$admission->Nom}} Undergraduate Application</a>
                                </div>
                            </li>

                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Brochure</a>
                                <div class="accordion-content" data-tab-content>
                                        <?php $file = (json_decode($admission->brochure))[0]->download_link; ?>
                                        <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$admission->Nom}} Undergraduate Brohure</a>
                                </div>
                            </li>



                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">Fees</a>
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
                                From Last 30 years we are in industy and have honor. <br>
                                123-123-1234
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
                                We are providing special visual teaching techniques to help you grow faster.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->

                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Qualified Staff</strong><br>
                                Our Qualified best teachers from industry give you best professional Knowledge.
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
                                Rush before all seats are reserved for current batch. <br>
                                123-123-1234
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends -->

                </div><!-- row / -->
            </div>
            <!-- Content Area Ends /-->

               <!-- Content Area Starts -->
       	<div class="content-area module faq">
                <div class="row">

                    <div class="medium-9 small-12 columns">
                        <h2>To request additional information.</h2>
                        <p>Please contact us below thanks!.</p>
                        <div class="contact-form">

                        <div class="row">
                            <div class="medium-6 small-12 columns">
                                <label>
                                    <input type="text" value="" placeholder="Your name here..." />
                                </label>
                            </div>
                            <div class="medium-6 small-12 columns">
                                <label>
                                    <input type="text" value="" placeholder="Your last name here..." />
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-6 small-12 columns">
                                <label>
                                    <input type="text" value="" placeholder="Enter your Website ..." />
                                </label>
                            </div>
                            <div class="medium-6 small-12 columns">
                                <label>
                                    <input type="text" value="" placeholder="Reason contacting us ..." />
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select>
                                        <option value="1">Chose Course</option>
                                        <option value="2">Course One</option>
                                        <option value="3">Course Two</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <select>
                                        <option value="1">Chose Teacher</option>
                                        <option value="2">Teacher One</option>
                                        <option value="3">Teacher Two</option>
                                    </select>
                                </label>
                            </div>
                        </div><!-- Row Ends /-->

                        <div class="row">
                            <div class="medium-12 small-12 columns">
                                <label>
                                    <textarea rows="4" placeholder="Your message ..."></textarea>
                                </label>
                                <input type="submit" class="button primary" value="Send your message" />
                            </div>
                        </div><!-- Row Ends /-->

                    </div><!-- Contact form /-->
                       </div> <!-- right sidebar ends -->


                </div><!-- row / -->
            </div>
            <!-- Content Area Ends /-->



        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="#" class="button secondary">Appointment</a>
                </div>
           </div><!-- row /-->
         </div>
        <!-- Call to Action End /-->



@include('partials.footer')
@endsection

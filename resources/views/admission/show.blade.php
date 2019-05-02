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
              <li class="active"><a href="{{ route('admission.index') }}">Admission</a></li>
              <li class="active"><a href="{{ route('admission.index') }}">{{ $admission->name }}</a></li>
            </ul>
          </nav>
        </div>
      </div>


      <!-- Content Area Starts -->
        <div class="content-area module faq">
                <div class="row">

                    <div class="medium-9 small-12 columns">
                        <ul class="accordion" data-accordion>
                                <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Admission process</a>
                                        <div class="accordion-content" data-tab-content>
                                                <ul class="accordion" data-accordion>
                                                        <li class="accordion-item" data-accordion-item>
                                                            <a href="#" class="accordion-title">Application checklist</a>
                                                            <div class="accordion-content" data-tab-content>
                                                                <p>

                                                                        Undergraduate Applicants
                                                                        Non-refundable Application Fee (KES. 3,000 or USD $50) – No cash payments (see banking options)
                                                                        Complete and signed application form (Please observe the deadlines).
                                                                        Originals & a copy of all academic transcripts, diplomas or certificates (All originals, where necessary, will be returned
                                                                        High School Leaving Certificate.
                                                                        One recent passport size photograph (write your name on reverse side).
                                                                        Copy of the National Identity Card or Birth Certificate.
                                                                </p>
                                                            </div>
                                                        </li>

                                                        <li class="accordion-item" data-accordion-item>
                                                                <a href="#" class="accordion-title">Banking  Options</a>
                                                                <div class="accordion-content" data-tab-content>
                                                                    <p>
                                                                            All applicants must complete and sign the application form and submit it to the Admissions Office. Only complete applications will be processed. A non-refundable processing fee must accompany the application. However, no cash payments are accepted in the Finance office and all payments should be made by bankers cheques issued to United States International University (USIU-Africa), or deposited into the accounts below; (then forward the deposit slip to the Finance Office at USIU-Africa).
                                                                            <table class="stack">
                                                                                    <thead>
                                                                                      <tr>
                                                                                        <th width="300">Table Header</th>
                                                                                        <th>Table Header</th>
                                                                                        <th width="150">Table Header</th>
                                                                                        <th width="150">Table Header</th>
                                                                                      </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                      <tr>
                                                                                        <td>Content Goes Here</td>
                                                                                        <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                                                                                        <td>Content Goes Here</td>
                                                                                        <td>Content Goes Here</td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                        <td>Content Goes Here</td>
                                                                                        <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                                                                                        <td>Content Goes Here</td>
                                                                                        <td>Content Goes Here</td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                        <td>Content Goes Here</td>
                                                                                        <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                                                                                        <td>Content Goes Here</td>
                                                                                        <td>Content Goes Here</td>
                                                                                      </tr>
                                                                                    </tbody>
                                                                                  </table>
                                                                    </p>
                                                                </div>
                                                            </li>

                                                            <li class="accordion-item" data-accordion-item>
                                                                    <a href="#" class="accordion-title">Mobile Money Transfer</a>
                                                                    <div class="accordion-content" data-tab-content>

                                                                    </div>
                                                                </li>
                                                        </ul>

                                        </div>
                                    </li>
                            <li class="accordion-item " data-accordion-item>
                                <a href="#" class="accordion-title">Entrance / Eligibility Requirements</a>
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

                                    {{ $admission->fees }}
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

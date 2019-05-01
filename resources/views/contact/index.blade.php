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
                    <li class="active"><a href="{{ route('contact.index') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>


    @if($errors->all())
        <div class="alert alert-warning" role="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div><br>
    @endif



    <!-- Content section -->
    <div class="content-section module">
    	<div class="row">
        	
            <!-- Map Area -->
            <div class="map-wrapper module">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d286851.9103813513!2d-122.1651158!3d37.4064828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fa6b1117280ff%3A0xebbf998e5df289ab!2sMenlo+Park%2C+CA!5e0!3m2!1sen!2s!4v1471984430727" height="300"></iframe>
            </div>
            <!-- Map Ends /-->
            
            <!-- Contact content area --> 
            <div class="content-wrapper">
            
            	<div class="medium-3 small-12 columns">
                	<div class="contact-info">
                    	<img src="{{ asset('images/3.jpg') }}" alt="Calling Girl" />
                    </div>
                    <div class="contact-info">
                    	<h4>Meet our Company</h4>
                        <p>111 Street and house #1 Vilane, Washington 99221 USA</p>
                    </div>
                    <div class="contact-info">
                    	<h4>Get in Touch</h4>
                        <p><strong>Office: </strong>123-123-1234<br>
                        	<strong>Fax: </strong>123-323-3343<br>
                            <strong>Toll Free: </strong>123-425-6234<br>
                        </p>
                    </div>
                    <div class="contact-info">
                    	<h4>Follow Us</h4>
                         <div class="socialicons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </div><!-- Social Icons /-->
                    </div>
                </div><!-- Left column Ends /-->
            	


                <div class="medium-9 small-12 columns">
                	<h2>Please fill the form below to contact us</h2>

                    <div class="contact-form">
						<form action="{{ route('contact.store') }}" method="post">

                            @csrf
                        	<div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	First Name *
                                        <input type="text" value="{{ old('firstName') }}" required name="firstName" id="firstName" placeholder="Your first name here..." />
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Last Name *
                                        <input type="text" value="{{ old('lastName') }}" name="lastName" id="lastName" required placeholder="Your last name here..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Email *
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Enter your email ..." />
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Subject *
                                        <input type="text" required name="subject" id="subject" value="{{ old('subject') }}" placeholder="Reason contacting us ..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <!-- <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Select a Course
                                        <select name="course">
                                        	<option value="1">Chose Course</option>
                                            <option value="2">Course One</option>
                                            <option value="3">Course Two</option>
                                        </select>
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Select Teacher
                                        <select name="teacher">
                                        	<option value="1">Chose Teacher</option>
                                            <option value="2">Teacher One</option>
                                            <option value="3">Teacher Two</option>
                                        </select>
                                    </label>
                                </div>
                            </div> -->
                            <!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-12 small-12 columns">
                                	<label>
                                    	Your Comments 
                                        <textarea rows="10" required name="message" id="message" placeholder="Your message ...">{{ old('message') }}</textarea>
                                    </label>    
    								
                                	<input type="submit" class="button primary" value="Send your message" />
                                </div>
                            </div><!-- Row Ends /-->
						</form>
                    </div><!-- Contact form /-->
                </div><!-- Right Column Ends /-->
                <div class="clearfix"></div>
            </div>
            <!-- Contact Content Area /-->
            
        </div><!-- Row /-->
    </div>
    <!-- Content Section Ends /-->
    
    
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
       


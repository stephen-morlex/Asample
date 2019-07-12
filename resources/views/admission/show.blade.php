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
<div class="content-section">
    <div class="content-section module blog-page">
        <div class="row">
             <div class="medium-7 small-12 columns posts-wrap">
            <div class="event-thumb">
                 <h3>{{ $admission->name }} admission</h3>
                 <div class="tx-div"></div>
            </div><!-- Course Thumb /-->
            <div class="event-content">
                        <ul class="accordion"  data-accordion data-allow-all-closed="true">
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Application Process</a>
                                <div class="accordion-content" data-tab-content >
                                    {!! $admission->process !!}
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Application Requirements</a>
                                <div class="accordion-content" data-tab-content >
                                    {!! $admission->requirement !!}
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"  target="_blank"> Application</a>
                                <div class="accordion-content" data-tab-content >
                                    <a href="{{ route('application.index') }}">Apply online</a>
                                        <?php $file = (json_decode($admission->application))[0]->download_link; ?>
                                        <br>
                                        <hr>
                                        <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$admission->Nom}}Download the Application form</a>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"> Brochure</a>
                                <div class="accordion-content" data-tab-content >
                                        <?php $file = (json_decode($admission->brochure))[0]->download_link; ?>
                                        <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$admission->Nom}} Click here to download the Brohure</a>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">Fees structure</a>
                                <div class="accordion-content" data-tab-content >
                                    {!! $admission->fees !!}
                                </div>
                            </li>
                        </ul> <!-- reasons accordion ends -->
            </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
           <div class="medium-4 small-12 columns sidebar">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Why Study With Us?</strong>
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
               <!-- Content Area Starts -->
       	<div class="financial">
               @foreach ($financial as $item)
               <div class="row">
                    <div class="medium-6 columns medium-push-6  gallery-image" >
                            <div class="img-box" data-aos="zoom-in-left"   data-aos-duration="2500" data-aos-easing="ease-in-sine">
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
                   <p>{!!  substr(strip_tags($item->content), 0, 400) !!}...<a href="{{ route('services.show', $item->slug) }}">Read More &raquo;</a></p>
                    </div>
                    </div>
               @endforeach
    <div class="row">
            <div class="large-12 show-for-small columns">
                    <hr><h3>Student services</h3><hr>
                    @forelse ($admissionServices as $item)
                    <div class="large-3 small-6 columns"
                    data-aos="zoom-out-left"   data-aos-duration="2500"
                            data-aos-easing="ease-in-sine"
                    >
                            <a href="{{ route('services.show',$item->slug) }}"><img class="thumbnail" src="{{ Voyager::image( $item->image)}}">
                            <div class="panel">
                                <p>{!! $item->name !!}</p>
                            </div>
                            </div>
                        </a>
                    @empty
                        <p>Opps something went wrong</p>
                    @endforelse
        </div>
    </div>
</div>
            <!-- Content Area Ends /-->
            <!-- Call to Action box -->
            @include('partials.call')
            <!-- Call to Action End /-->
@include('partials.footer')
@endsection

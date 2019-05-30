 @extends('layouts.app')
 @section('title', ' Gallery')
 @section('content')
 @include('partials.topNav')
@include('layouts.mainNav')

 <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Gallery</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('gallery.index')}}">Gallery</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

        <!-- Content section -->
        <div class="content-section gallery-page module-gallery">

            <!-- Gallery Section -->
            <div class="gallery-wrapper module">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Amazing Campus Life</h2>
                        <p>Some Amazing Stuff from our Campus</p>
                    </div>
                </div> <!-- Title Ends /-->

                <div class="gallery-image">
                        @foreach($galleries as $gallery)
                        @php $image = json_decode($gallery->image); @endphp

                        @if (isset($image[0]))
                        <div class="img-box">
                          <img src="{{ Voyager::image($image[0]) }}" alt="{{ $gallery->title }}" />
                          <div class="transparent-box">
                            <div class="caption">
                              <p>{{ $gallery->title }}</p>
                              <p class="opacity-low">{{ $gallery->description }}</p>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach

                </div>
                {{--  <div class="gallery-container">

                        <a href="{{ $gallery->image }}" data-lightbox="campus-gallery" data-title="{{ $gallery->title }}">
                            <img class="gallery-thumb" src="{{ Voyager::image($image[0]) }}" alt="{{ $gallery->title }}">
                        </a>


                </div><!-- Gallery Container /-->  --}}

            </div>
            <!-- Gallery Section Ends /-->


        </div>
        <!-- Content Section Ends /-->

           @include('partials.footer')
    @endsection

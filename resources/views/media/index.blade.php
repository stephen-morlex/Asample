 @extends('layouts.app')
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
                       <li class="active"><a href="{{route('media.index')}}">Gallery</a></li>
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

                <div class="gallery-container">

                    @forelse($medias as $media)
                        <a href="{{ $media->image }}" data-lightbox="campus-gallery" data-title="{{ $media->title }}">
                            <img class="gallery-thumb" src="{{ $media->image }}" alt="{{ $media->title }}"/>
                        </a>
                    @empty
                        <h3 align="center">There is no media at the moment !</h3>
                    @endforelse

                </div><!-- Gallery Container /-->

            </div>
            <!-- Gallery Section Ends /-->


        </div>
        <!-- Content Section Ends /-->

           @include('partials.footer')
    @endsection

 @extends('layouts.app')
 @section('title', ' Gallery')
 @section('content')
 @include('partials.topNav')
@include('layouts.mainNav')
<div class="title-section module">
        <div class="row">
            <div class="small-12 columns">
                <h1>Galleries</h1>
            </div><!-- Top Row /-->
            <div class="small-12 columns">
                <ul class="breadcrumbs">
                   <li><a href="/">Home</a></li>
                   <li class="active"><a href="{{route('gallery.index')}}">Gallery</a></li>
                </ul><!-- Breadcrumbs /-->
            </div><!-- Bottom Row /-->
                    </div><!-- Row /-->
    </div>
<div>
    <ul class="tabs" id="example-tabs">
        <li class="tabs-title "><a href="{{route('gallery.index')}}" aria-selected="true">Images</a></li>
        <li class="tabs-title "><a href="{{route('video.index')}}" aria-selected="true">Videos</a></li>
        <li class="tabs-title "><a href="{{route('gallery.speech')}}" aria-selected="true">Speeches</a></li>
    </ul>
</div>
<!-- Content section -->
 <div class="content-section gallery-page module-gallery">
     <div class="row">
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
        </div>
    </div><!-- Gallery Section Ends /-->
</div>
        <!-- Content Section Ends /-->
           @include('partials.footer')
    @endsection

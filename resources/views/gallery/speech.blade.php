 @extends('layouts.app')
 @section('title', ' Gallery')
 @section('content')
 @include('partials.topNav')
@include('layouts.mainNav')

 <!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Speeches</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('gallery.index')}}">Gallery</a></li>
                       <li class="active"><a href="{{route('gallery.speech')}}">Speeches</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                        </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->
        <!-- Content section -->
 <div class="content-section gallery-page module-gallery">
    <div class="row">
        <!-- Gallery Section -->
        <div class="gallery-wrapper module">
            <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Some amazing speeches from our campus</h2>
                        <br>
                    </div>
            </div>
        </div><!-- Gallery Section Ends /-->
  </div>
  <div class="row">
    <div class="columns">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
          @forelse ($speeches as $speech => $items)
          <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">{{ $speech }} &nbsp Speeches</a>
                <div class="accordion-content" data-tab-content >
                        <ul class="menu vertical">
                                @foreach ($items as $speech)
                                <li><a href="{{ Voyager::image( (json_decode($speech->file))[0]->download_link) }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v4M8 23h8"/></svg> {!!$speech->title !!}</a></li>
                                @endforeach
                            </ul>
                </div>
          </li>
          @empty
          @endforelse
  </ul>
    </div>
  </div>
 </div>
        <!-- Content Section Ends /-->
           @include('partials.footer')
    @endsection

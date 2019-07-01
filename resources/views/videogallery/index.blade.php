@extends('layouts.app')
 @section('title', ' Video Gallery')
 @section('content')
 @include('partials.topNav')
@include('layouts.mainNav')



<div>
    <ul class="tabs" id="example-tabs">
        <li class="tabs-title is-active"><a href="{{route('gallery.index')}}" aria-selected="true">Images</a></li>
        <li class="tabs-title is-active"><a href="{{route('video.index')}}" aria-selected="true">Videos</a></li>
        <li class="tabs-title is-active"><a href="" aria-selected="true">Speeches</a></li>
    </ul>
</div>





<div class="content-section module blog-page">
    <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="row">
            <div class="medium-12 small-12 columns">
                
                @forelse($videos as $video)
                    <div class="medium-3 small-12 columns">
                        <div class="flex-video">
                            <iframe width="420" height="315" src="{{ $video->video_html }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                @empty
                    <h2>No video at the moment.</h2>
                @endforelse

            </div>
        </div><!-- Row Ends /-->
    </div>
</div>


<!-- Content Section Ends /-->
@include('partials.footer')
@endsection

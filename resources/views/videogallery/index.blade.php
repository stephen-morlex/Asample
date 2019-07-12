@extends('layouts.app')
 @section('title', ' Video Gallery')
 @section('content')
 @include('partials.topNav')
@include('layouts.mainNav')
<div class="title-section module">
        <div class="row">
            <div class="small-12 columns">
                <h1>Videos</h1>
            </div><!-- Top Row /-->
            <div class="small-12 columns">
                <ul class="breadcrumbs">
                   <li><a href="/">Home</a></li>
                   <li class="active"><a href="{{route('gallery.index')}}">Gallery</a></li>
                   <li class="active"><a href="{{route('video.index')}}">Videos</a></li>
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
<hr>
<div class="content-section module blog-page">
    <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="row">
            <div class="medium-12 small-12 columns">
                @forelse($videos as $video)
                    <div class="medium-6 small-12 columns">
                        <div class="flex-video">
                           {!! $video->video_html !!}
                        </div>

                        <p>{{ $video->title }}</p>

                        <hr style="border-bottom:2px solid #f0951f">
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

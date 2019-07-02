@extends('layouts.app')
  @section('title', 'News')
  @section('content')
  @include('partials.topNav')
  @include('layouts.mainNav')
  <!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>CUEA Jobs</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{ route('job.index') }}">jobs</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->
 <!-- Content section -->
<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-12 small-12 columns">
            <div class="blog-post">
                <div class="post-excerpt">
                    <h3>Latest Jobs</h3>
                    <div class="tx-div"></div>
                    @foreach ($jobs as $job)
                    <div class="callout">
                       <span class="label success">New</span>
                         <h4>{!! $job->title !!}</h4>
                         <p>{!! $job->description !!}</p>
                       <button data-toggle="read-more-content{{$job->id}}" href="#read-more-content{{$job->id}}">SHOW MORE <i class="fa fa-plus"></i></button>
                       <div class="read-more-content" id="read-more-content{{$job->id}}" data-toggler data-animate="hinge-in-from-top slide-out-right">
                         <h5>Job details:</h5>
                           <p><i class="fa fa-calendar" aria-hidden="true"></i> Due Date: <strong>{!! $job->due !!}</strong></p>
                           <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location: <strong>{!! $job->location !!} </strong></p>
                           <p><i class="fa fa-arrow-down" aria-hidden="true"></i> Attachment: <a href="{{ Voyager::image( (json_decode($job->file))[0]->download_link) }}"><strong>Download</strong></a></p>
                           <br>
                            <button data-toggle="read-more-content{{ $job->id }}" href="#">SHOW LESS <i class="fa fa-minus"></i></button>
                       </div>
                     </div>
                    @endforeach
                </div>
            </div>
        </div><!-- Posts wrap /-->
    </div><!-- Row Ends /-->
</div>
@include('partials.call')
@include('partials.footer')
@endsection

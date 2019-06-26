@extends('layouts.app')
  @section('title', 'News')
  @section('content')
  @include('partials.topNav')
  @include('layouts.mainNav')

  <!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Research and Publications</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="#">Research and Publications</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->


 <!-- Content section -->
<div class="content-section module blog-page">
    <div class="row">

        <div class="medium-12 small-12 columns posts-wrap">
            <div class="blog-post">
                <div class="post-excerpt">
                    <center><h2><a>{!! $publication->title !!}</a></h2></center>
                    <p>{!!  $publication->content !!}</p>
                </div>
            </div>
        </div><!-- Posts wrap /-->
        

    </div><!-- Row Ends /-->
</div>


@include('partials.call')
@include('partials.footer')
@endsection

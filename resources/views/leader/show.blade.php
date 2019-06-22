@extends('layouts.app')
@section('title', $leader->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>{!! $leader->name !!}</h2>
                        <div class="tx-div"></div>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="{{ route('leader.index') }}">Leader&apos;s</a></li>
                     <li class="active"><a href="{{ route('leader.show',$leader->slug) }}">{{ $leader->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->

<div class="content-section module blog-page">

    <div class="row">

        <div class="medium-12 small-12 columns posts-wrap">
                <div class="card-user-profile">
                    <img class="card-user-profile-img" src="{{ Voyager::image( $leader->image)}}" alt="picture of space" />
                        <div class="card-user-profile-content card-section">
                          <div class="card-user-profile-avatar">
                            <img src="{{ Voyager::image( $leader->thumbnail('small'))}}" alt="{{ $leader->name }}" title="{{ $leader->name }}" />
                          </div>
                          <p class="card-user-profile-name">{{ $leader->name }}</p>
                          <div class="tx-div"></div>
                          <p class="card-user-profile-status">{{ $leader->tilte }} of {{ $leader->faculty->name }}</p>
                          <hr>
                          <p class="card-user-profile-info">{!! $leader->bio !!}.</p>
                        </div>
                        <div class="card-user-profile-actions">
                          <a href="{{ Voyager::image( (json_decode($leader->file))[0]->download_link) }}" class="card-user-profile"><img width="50" height="10" src="{{ asset('/images/svg/cv.svg') }}" alt=""> </a>
                        </div>
                      </div>
        </div><!-- Posts wrap ends /-->
    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

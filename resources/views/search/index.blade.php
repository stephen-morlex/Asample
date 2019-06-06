@extends('layouts.app')
@section('title', $searchterm)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Search term {{ $searchterm }} found : {{ $searchResults->count() }} Results</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{ route('search.result') }}">Search</a></li>
                       <li class="active"><a href="#"></a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

 <!-- Content section -->
 <div class="content-section space-section module testimonial-page">

     <div class="row">

         <div class="medium-9 small-12 columns test-wrap">
             @if ($searchResults->count()==0)
             <div class="section-title">
                    <h2><span>Sorry,No Result found for the item {{ $searchterm }}</span></h2>
            </div>
             @else
             @foreach($searchResults->groupByType() as $type => $modelSearchResults)

                    <h2>{{ ucfirst($type) }}</h2>

            @foreach($modelSearchResults as $searchResult)
             <div class="medium-12 small-12 columns">
             <div class="testimonial">
                 <div class="testimonial-detail">
                     <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</h4></a>
                     {{--  <p>{{ $searchResult->body }}</p>  --}}
                 </div><!-- Testimonial Detail /-->
                 <div class="clearfix"></div>
              </div> <!-- Testimonial /-->
          </div><!-- Column Ends /-->
             @endforeach
             @endforeach
             @endif

         </div><!-- testimonial wrap /-->
     </div><!-- Row Ends /-->

 </div>
 <!-- Content Section Ends /-->
 <!-- Call to Action box -->
 @include('partials.call')
 <!-- Call to Action End /-->
@include('partials.footer')
@endsection

@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

 <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Schorlaship opprtunities</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('scholarships.index')}}">Scholarships</a></li>

                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content Area Starts -->

<div class="content-section">
    <div class="content-section module blog-page">
        <div class="row">
            <div class="medium-7 small-12 columns posts-wrap">
                @forelse ($scholarships as $scholarship)
                   <div class="single-post">
                       <h5 ><a href="{{ route('scholarships.show',$scholarship->slug) }}">{{ $scholarship->title }}</a></h5>
                       <div class="clearfix"></div>
                    </div><!-- post ends here /-->

                    @empty
                     <h2>No scholarships at the moment<h2>
                @endforelse
        </div><!-- Posts wrap ends /-->
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>Popular News</h2>
                    @foreach ($newsSide as $item)
                        <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!!  substr(strip_tags($item->content), 0,90) !!}...<a href="{{ route('news.show', $item->slug) }}">Read more</a></p>
                        </div>
                    @endforeach
            </div><!-- widget ends /-->
             </div>

        </div><!-- Row Ends /-->
    </div>
</div><!-- Content Section Ends /-->

<!-- Content Area Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

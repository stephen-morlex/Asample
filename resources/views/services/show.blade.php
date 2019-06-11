@extends('layouts.app')
@section('title', $service->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Student Services Information</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                         <li class="active"><a href="/">Home</a></li>
                         <li class="active"><a href="">Academics</a></li>
                         <li class="active"><a href="{{ route('services.index') }}">Student services information</a></li>
                        <li class="active"><a href="{{ route('services.show',$service->slug) }}">{{ $service->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->

<!-- Content section -->
<div class="content-section module blog-page">
    <div class="row">
         <div class="medium-8 small-12 columns posts-wrap">
            <div class="single-post">
                <div class="featured-image">
                        <h3 ><a href="{{ route('services.show',$service->slug) }}">{{ $service->name }}</a></h3>
                        <div class="tx-div"></div>
                    <a href="single-post.html">
                        <img class="display:none" src="{{ Voyager::image( $service->image ) }}" class="thumbnail" />
                    </a>
                 </div>

                <div class="post-excerpt">
                   {!! $service->content !!}
                </div><!-- post excerpt /-->
                 <div class="clearfix"></div>
            </div><!-- post ends here /-->
        </div><!-- Posts wrap ends /-->

        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>More student services</h2>
                <ol class="price-details">
                    @foreach ($sideServices as $sr)
                    <li>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="{{ route('services.show',$sr->slug)}}">{{ $sr->name }}</a>
                     </li>
                    @endforeach
                </ol>
            </div><!-- widget ends /-->
            <div class="widget">
                    <h2>Popular News</h2>
                    @foreach ($newsSide as $item)

                     <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!! str_limit($item->content, $limit = 50) !!} <a href="{{ route('news.show', $item->slug) }}">Read more...</a></p>
                         </div>

                    @endforeach
                </div><!-- widget ends /-->


        </div><!-- right bar ends here /-->

    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

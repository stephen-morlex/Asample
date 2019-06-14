@extends('layouts.app')
@section('title', 'Research')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Research</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('admission.index')}}">Research</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->

<!-- Content section -->
<div class="content-section module blog-page">
    <div class="row">
@forelse ($researches as $re)
<div class="medium-8 small-12 columns posts-wrap">
    <div class="single-post">
            <h3 ><a href="{{ route('research.show',$re->slug) }}">{{ $re->name }}</a></h3>
            <div class="tx-div"></div>
        <div class="featured-image">
            <a href="{{ route('research.show',$re->slug) }}">
                <img alt="" src="{{ Voyager::image( $re->image ) }}" class="thumbnail" />
            </a>
        </div>

        <div class="post-excerpt">
              <p> {!! $re->content !!}</p>
        </div><!-- post excerpt /-->
            <div class="clearfix"></div>
    </div><!-- post ends here /-->
</div><!-- Posts wrap ends /-->
@empty
        <div class="post-excerpt">
                <h3> There is no content at the moment</h3>
        </div><!-- post excerpt /-->
@endforelse
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
				<h2>More about Research </h2>
				    <ol class="menu vertical">
                        @foreach ($sideResearch as $sr)
                        <li><i class="fa fa-list-ul" aria-hidden="true">
                            <a href="{{ route('research.show',$sr->slug)}}">{{ $sr->name }}</a>
                        </i></li>
                            <br>
                        @endforeach
                    </ol>
			</div><!-- widget ends /-->
            <div class="widget">
                <h2>Popular News</h2>
                @foreach ($newsSide as $item)
                 <div class="popular-post">
                        <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                       <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!!  substr(strip_tags($item->content), 0,90) !!}...<a href="{{ route('news.show', $item->slug) }}">Read more</a></p>
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

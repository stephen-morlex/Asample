@extends('layouts.app')

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
                       <li class="active"><a href="{{route('research.index')}}">Research</a></li>
                       <li class="active"><a href="#">{{ $research->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
<div class="content-section module blog-page">

	<div class="row">


	<div class="medium-9 small-12 columns posts-wrap">

		<div class="single-post">
			<div class="featured-image">
				<a href="{{ route('research.show',$research->slug) }}">
					<img class="display:none" src="{{ Voyager::image( $research->image ) }}" class="thumbnail" />
				</a>
                </div>
                <hr>
                <br>
			<h3 ><a href="{{ route('research.show',$research->slug) }}">{{ $research->name }}</a></h3>

			<div class="post-excerpt">
			   {!! $research->content !!}
			</div><!-- post excerpt /-->

			 <div class="clearfix"></div>

		</div><!-- post ends here /-->

	</div><!-- Posts wrap ends /-->



		<div class="medium-3 small-12 columns sidebar">
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
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!! str_limit($item->content, $limit = 50) !!} <a href="{{ route('news.show', $item->slug) }}">Read more...</a></p>
                         </div>

                    @endforeach


                </div><!-- widget ends /-->

		</div><!-- right bar ends here /-->

	</div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

<div class="call-to-action">
   <div class="row">
		<div class="medium-10 small-12 columns">
			<h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
		</div>
		<div class="medium-2 small-12 columns">
			<a href="#" class="button secondary">Appointment</a>
		</div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->



@include('partials.footer')
@endsection

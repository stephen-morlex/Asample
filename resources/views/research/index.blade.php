@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- Content section -->
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="#">Research</a></li>
            </ul>
          </nav>
        </div>
      </div>

<!-- Call to Action box -->

<br>
<!-- Content section -->
<div class="content-section module blog-page">

    <div class="row">

@foreach ($research as $re)
    <div class="medium-9 small-12 columns posts-wrap">

            <div class="single-post">
                <div class="featured-image">
                    <a href="single-post.html">
                        <img alt="" src="{{ Voyager::image( $re->image ) }}" class="thumbnail" />
                    </a>
                 </div>
                 <hr>
                <h3 ><a href="{{ route('research.show',$re->slug) }}">{{ $re->name }}</a></h3>

                <div class="post-excerpt">
                   {!! $re->content !!}
                </div><!-- post excerpt /-->
                 <div class="clearfix"></div>

            </div><!-- post ends here /-->

        </div><!-- Posts wrap ends /-->


@endforeach
        <div class="medium-3 small-12 columns sidebar">
            <div class="widget">
                <h2>More about Research </h2>

                <ul class="menu vertical">
                    @foreach ($sideResearch as $sr)

                    <li><a href="{{ route('research.show',$sr->slug)}}">{{ $sr->name }}</a></li>
                    <hr>
                    @endforeach


                </ul>
            </div><!-- widget ends /-->


            <div class="widget">
                <h2>Popular Posts</h2>

                 <div class="popular-post">
                    <a href="#"><strong>My new post title come out</strong></a>
                    <p><img alt="" src="images/blogthumb.jpg" class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                 </div>

                 <div class="popular-post">
                    <a href="#"><strong>My new post title come out</strong></a>
                    <p><img alt="" src="images/help/blogthumb.jpg" class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                 </div>

                 <div class="popular-post">
                    <a href="#"><strong>My new post title come out</strong></a>
                    <p><img alt="" src="images/help/blogthumb.jpg" class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                 </div>

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

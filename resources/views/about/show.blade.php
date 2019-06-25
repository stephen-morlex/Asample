@extends('layouts.app')
@section('title', $about->title)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

 <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>About Cuea</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('about.index')}}">About cuea</a></li>
                       <li class="active"><a href="#">{{ $about->title }}</a></li>

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
		    <div class="single-post">
                    <h3 ><a href="{{ route('about.show',$about->slug) }}">{{ $about->title }}</a></h3>
                    <hr>
                <div class="post-excerpt">
                <p>{!! $about->content !!}</p>
                </div><!-- post excerpt /-->
			    <div class="clearfix"></div>
		    </div><!-- post ends here /-->
	    </div><!-- Posts wrap ends /-->
              <div class="medium-4 small-12 columns sidebar">
            @foreach ($abouts as $item)
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <a href="{{ route('about.show',$item->slug) }}"><p><strong>{{ $item->title }}</strong><br></a>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
            @endforeach

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

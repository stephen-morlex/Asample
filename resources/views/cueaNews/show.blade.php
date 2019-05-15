  @extends('layouts.app')
  @section('content')
  @include('partials.topNav')
  @include('layouts.mainNav')

  <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>News</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('news.index')}}">News</a></li>
                       <li class="active"><a href="{{route('news.show',$newsItem->slug)}}">{{ $newsItem->title}}</a></li>
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
                            <a href="#">
                                <img alt="{{ $newsItem->title }}" src="{{Voyager::image( $newsItem->image) }}" class="thumbnail" />
                            </a>
                        	<div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> {{  $newsItem->created_at->diffForHumans() }} | <i class="fa fa-user" aria-hidden="true"></i> <a>Administrator</a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="{{ route('news.category',$newsItem->newsCategory->slug) }}">{{ $newsItem->newsCategory->name }}</a> </div>
                         </div>

                        <h3><a href="#">{{ $newsItem->title }}</a></h3>

                        <div class="post-excerpt">
                           {!! $newsItem->content !!}

                        </div><!-- post excerpt /-->



                    </div><!-- post ends here /-->

                </div><!-- Posts wrap ends /-->

                <div class="medium-3 small-12 columns sidebar">
                    <div class="widget">
                        <h2>Categories</h2>

                        <ul class="menu vertical">
                            @foreach($newsCategories as $newsCategory)
                            <li><a href="{{ route('news.category',$newsCategory->slug) }}">{{ $newsCategory->name }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- widget ends /-->

                </div><!-- right bar ends here /-->

            </div><!-- Row Ends /-->

        </div>
        <!-- Content Section Ends /-->




    @include('partials.footer')
    @endsection
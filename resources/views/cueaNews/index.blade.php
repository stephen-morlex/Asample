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
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

        <!-- Content section -->
        <div class="content-section module blog-page">

            <div class="row">

                <div class="medium-9 small-12 columns posts-wrap">


                    @forelse($news as $item)
                    <div class="blog-post">

                        <div class="featured-image">
                            <a href="{{ route('news.show', $item->slug) }}">
                                <img alt="{{ $item->title }}" src="{{ $item->image }}" class="thumbnail" />
                            </a>
                        	<div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $item->created_at->diffForHumans() }} | <i class="fa fa-user" aria-hidden="true"></i> Administrator</a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="{{ route('news.category', $item->newsCategory->slug) }}">{{ $item->newsCategory->name }}</a></div>
                        </div>

                        <h3><a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a></h3>

                        <div class="post-excerpt">
                            <p>{{str_limit($item->content, $limit = 350, $end = '...')}} <a href="{{ route('news.show', $item->slug) }}">Read more &raquo;</a></p>
                        </div><!-- post content ends /-->
                    </div><!-- post Ends here /-->
                    @empty
                    <h3>There is no news at the moment</h3>
                    @endforelse


                </div><!-- Posts wrap /-->

                <div class="medium-3 small-12 columns sidebar">
                    <div class="widget">
                        <h3>Categories</h3>
                        <hr>

                        <ul class="menu vertical">
                            @forelse($newsCategories as $newsCategory)
                            <li><a href="{{ route('news.category', $newsCategory->slug) }}">{{ $newsCategory->name }}</a></li>
                            @empty
                            <h4>No category at the moment!</h4>
                            @endforelse
                        </ul>
                    </div><!-- widget ends /-->

                </div><!-- right bar ends here /-->

            </div><!-- Row Ends /-->

        </div>
        <!-- Content Section Ends /-->




    @include('partials.footer')
    @endsection

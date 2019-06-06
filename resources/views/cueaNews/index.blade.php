  @extends('layouts.app')
  @section('title', 'News')
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
        <div class="medium-8 small-12 columns posts-wrap">
                    @forelse($news as $item)
            <div class="blog-post">
                <div class="featured-image">
                    <a href="{{ route('news.show', $item->slug) }}">
                    <img alt="{{ $item->title }}" src="{{Voyager::image( $item->image) }}" class="thumbnail" />
                    </a>
                    <div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $item->created_at->diffForHumans() }} | <i class="fa fa-user" aria-hidden="true"></i> Administrator</a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="{{ route('news.category', $item->newsCategory->slug) }}">{{ $item->newsCategory->name }}</a></div>
                </div>
                        <h3><a href="{{ route('news.show', $item->slug) }}">{!! $item->title !!}</a></h3>
                    <div class="post-excerpt">
                        {!! str_limit($item->content, $limit = 350, $end = '...')!!} <a href="{{ route('news.show', $item->slug) }}">Read more &raquo;</a>
                    </div><!-- post content ends /-->
            </div><!-- post Ends here /-->
                    @empty
                    <h3>There is no news at the moment</h3>
                    @endforelse
                    <div class="small-12 small-centered text-center columns">
                            {{ $news->links('pagination') }}
                    </div>

        </div><!-- Posts wrap /-->
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>Categories</h2>
                <ol class="menu vertical">
                    @foreach($newsCategories as $newsCategory)
                    <li><i class="fa fa-list-ul" aria-hidden="true">
                        <a href="{{ route('news.category',$newsCategory->slug)}}">{{ $newsCategory->name }}</a>
                        </i>
                    </li>
                        <br>
                    @endforeach
                </ol>
            </div><!-- right bar ends here /-->
            <div class="widget">
                <h2>Popular News</h2>
                    @foreach ($newsSide as $item)
                        <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!! str_limit($item->content, $limit = 100) !!} <a href="{{ route('news.show', $item->slug) }}">Read more...</a></p>
                        </div>
                    @endforeach
            </div><!-- widget ends /-->
        </div>
    </div><!-- Row Ends /-->
</div>
        <!-- Content Section Ends /-->
        <!-- Call to Action box -->
        @include('partials.call')
        <!-- Call to Action End /-->
    @include('partials.footer')
    @endsection

@extends('layouts.app')
@section('title', 'About CUEA')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')


<br>
<div style="height:50px;">
    <ul class="tabs" id="example-tabs">
        @forelse ($aboutParents as $tab)
        <li class="tabs-title is-active"><a href="{{ route('parent.show',$tab->slug) }}" aria-selected="true">{!! $tab->title !!}</a></li>
        @empty

        @endforelse
    </ul>
</div><br>



<!-- Content section -->
<div class="content-section module blog-page">
            
    <div class="tabs-content" data-tabs-content="example-tabs">

        <div class="row">
            
            <div class="medium-9 small-12 columns posts-wrap">
                @forelse ($news as $newsItem)
                <div class="blog-post">
                    <div class="featured-image">
                        <a href="{{ route('news.show',$newsItem->slug) }}">
                            <img alt="{{ $newsItem->title }}" src="{{ $newsItem->image }}" class="thumbnail" />
                        </a>
                        <div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i>{!! Carbon\Carbon::parse($newsItem->date)->format('d-m-Y ') !!}<i class="fa fa-user" aria-hidden="true"></i> <a>Administrator</a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="{{ route('news.category', $newsItem->newsCategory->slug) }}">{{ $newsItem->newsCategory->name }}</a></div>
                    </div>
                    
                    <h3><a href="{{ route('news.show',$newsItem->slug) }}">{!! $newsItem->content !!}</a></h3>
                    
                    <div class="post-excerpt">
                        <p>{!! str_limit($newsItem->content, $limit = 550, $end = '...')!!}<a href="{{ route('news.show',$newsItem->slug) }}">Read more &raquo;</a></p>
                    </div><!-- post content ends /-->
                </div><!-- post Ends here /-->
                @empty
                <h3>There is no content at the moment</h3>
                @endforelse
                
                
            </div><!-- Posts wrap /-->
            
            <div class="medium-3 small-12 columns sidebar">
                <div class="widget">
                    <h2>Events</h2>
                    <ul class="menu vertical">
                        @forelse ($events as $event)
                        <li><a href="{{ route('event.show',$event->slug) }}">{!! $event->content !!}</a></li>
                        @empty
                        <h3>There is no event at the moment</h3>
                        @endforelse
                    </ul>
                </div><!-- widget ends /-->
                
                
            </div><!-- right bar ends here /-->
            
        </div><!-- Row Ends /-->


    </div>
         
</div>
<!-- Content Section Ends /-->


@include('partials.footer')
@endsection



@extends('layouts.app')
@section('title', $student->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Student Experience</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('student.index')}}">Student Experience</a></li>
                       <li class="active"><a href="#">{{ $student->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->
<!-- Content section -->
<div class="content-section">
    <div class="module">
        <div class="row">
            <div class="medium-8 small-12 columns">
                    <h2>{!! $student->name !!}</h2>
                    <div class="tx-div"></div>
                <div class="event-thumb">
                    <img src="{{ Voyager::image( $student->image ) }}" style="height:368;" class="thumbnail" />
                </div><!-- Event Thumb /-->
                    <div class="event-content">
                       <p>{!! $student->content !!}</p>
                    </div><!-- Events content /-->
            </div><!-- Events Wrapper Ends /-->
            <div class="medium-4 small-12 columns sidebar">
                <div class="widget">
                    <h2>More about student experience</h2>
                        @foreach ($studentSide as $ss)
                    <ol class="menu vertical">
                        <li>
                             <i class="fa fa-list-ul" aria-hidden="true">
                                <a href="{{ route('student.show', $ss->slug) }}">  {{ $ss->name }}</a>
                            </i>
                        </li>
                        <hr>
                    </ol>
                    @endforeach
                </div><!-- widget ends /-->
                <div class="widget">
                    <h2>Popular News</h2>
                    @foreach ($newsSide as $item)
                     <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!! str_limit($item->content, $limit =100) !!} <a href="{{ route('news.show', $item->slug) }}">Read more...</a></p>
                    </div>
                    <hr>
                    @endforeach
                </div><!-- widget ends /-->
            </div><!-- Sidebar Ends /-->
        </div><!-- Row Ends /-->
    </div>
</div><!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection


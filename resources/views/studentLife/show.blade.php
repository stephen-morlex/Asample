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
    <div class="content-section module blog-page">
        <div class="row">
             <div class="medium-8 small-12 columns posts-wrap">
            <div class="event-thumb">
                <br>
                 <h2>{{ $student->name }}</h2>
                 <div class="tx-div"></div>
                <img src="{{ Voyager::image( $student->image)}}"  class="thumbnail" />
            </div><!-- Course Thumb /-->
            <div class="event-content">
              <p> {!!  $student->content  !!}</p>
            </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
            <div class="medium-4 small-12 columns sidebar">
                <div class="widget">
                    <h2>More about student experience</h2>
                        @foreach ($studentSide as $ss)
                    <ol class="menu vertical">
                        <li>
                             <i class="fa fa-list-ul fa-lg" aria-hidden="true">
                                <a href="{{ route('student.show', $ss->slug) }}">  {{ $ss->name }}</a>
                            </i>
                        </li>
                    </ol>
                    <br>
                    @endforeach
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
            </div><!-- Sidebar Ends /-->
        </div><!-- Row Ends /-->
    </div>
</div><!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection


@extends('layouts.app')
@section('title', $chaplaincy->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>{!! $chaplaincy->name !!}</h2>
                        <div class="tx-div"></div>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="{{route('administrativeoffice.index')}}">ADMINISTRATIVE OFFICES</a></li>
                     <li class="active"><a href="{{ route('chaplaincy.index') }}">CHAPLAINCY</a></li>
                    <!-- <li class="active"><a href="{{ route('chaplaincy.show',$chaplaincy->slug) }}">{{ $chaplaincy->name }}</a></li> -->
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->

<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-8 small-12 columns posts-wrap">
             <h2>{!! $chaplaincy->name !!}</h2> 
            @if($chaplaincy->image)
                <div class="event-thumb">
                    <img  src="{{ Voyager::image( $chaplaincy->thumbnail('small'))}}"  class="thumbnail" />
                </div><!-- Course Thumb /-->
            @else

            @endif
            <div class="event-content">
                <p></p>
                    <p>{!! $chaplaincy->description  !!}</p>
                    <hr>
                    <p>{!! $chaplaincy->content !!}</p>
            </div><!-- Course content /-->
     </div><!-- Posts wrap ends /-->

        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <ol class="menu vertical">
                    @forelse($chaplaincies as $chaplaincy)
                    <li> <a href="{{route('chaplaincy.show',$chaplaincy->slug)}}"><i class="fa fa-list-ul fa-lg"> {!! $chaplaincy->name !!}</i></a></li>
                    <br>
                    @empty
                       <!--  <li>There is no chaplaincy at the moment.</li> -->
                    @endforelse
                </ol>
            </div><!-- widget ends /-->
            
            <div class="clearfix"></div>
      </div><!-- widget ends /-->

</div><!-- right bar ends here /-->
</div><!-- Row Ends /-->
</div>
<!-- Content Section Ends /-->

<!-- Our Teachers -->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
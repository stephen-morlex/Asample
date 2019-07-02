@extends('layouts.app')
@section('title', 'Student Services')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Governance</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                         <li class="active"><a href="/">Home</a></li>
                         <li class="active"><a href="{{ route('governor.index') }}"> Governance</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->
<!-- Content section -->
<div class="content-section space-section module testimonial-page">
     <div class="row">
        <div class="medium-8 small-12 columns test-wrap">
             @forelse ($members as $pro)
                 <div class="medium-12 small-12 columns">
                            <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                                    <img src="{{asset('/images/1.jpg')}}" alt="Man with backpack"
                                        class="d-block w-full">
                              <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                  <a href="">{{ $pro->name }} proship</a>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                </h1>
                                <p class="mb-1">
                                </p>
                              </div>
                           
                            </div>
                    </div><!-- product Ends here -->
                  @empty
                     <h2>Sorry there are no programs at the moment</h2>
                  @endforelse
                
        </div><!-- testimonial wrap /-->
                <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2> Levels</h2>
                <ul class="menu vertical">
                    @forelse($governance as $all)
                        <li><a href="#">{!! $all->title !!}</a></li>
                    @empty
                        <li>No content at the moment<li>
                    @endforelse
                </ul>
            </div>
            <div class="widget">
                <h2>Popular News</h2>
                    @foreach ($newsSide as $item)
                        <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!!  substr(strip_tags($item->content), 0,90) !!}...<a href="{{ route('news.show', $item->slug) }}">Read more</a></p>
                        </div>
                    @endforeach
            </div><!-- widget ends /-->
        </div><!-- right bar ends here /-->
    </div><!-- Row Ends /-->
</div
        <!-- Related Products Ends /-->
        <!-- Call to Action box -->
        @include('partials.call')
        <!-- Call to Action End /-->
@include('partials.footer')
@endsection



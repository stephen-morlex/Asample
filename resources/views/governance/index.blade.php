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

<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-8 small-12 columns ">
               @forelse ($members as $member)
               <div class="card-profile-stats">
                    <div class="card-profile-stats-intro">
                      <img class="card-profile-stats-intro-pic" src="{{ Voyager::image( $member->image)}}" alt="{{ $member->name }}" onerror="this.style.display='none'" />
                      <div class="card-profile-stats-intro-content">
                        <h5>{{ $member->name }}</h5>
                        <div class="tx-div"></div>
                        <p>{{ $member->position }}</p>
                      </div> <!-- /.card-profile-stats-intro-content -->
                    </div> <!-- /.card-profile-stats-intro -->
                  </div> <!-- /.card-profile-stats -->
               @empty
               <p>Oops! there are no members yet</p>
               @endforelse
        </div><!-- Posts wrap ends /-->
           <div class="medium-4 small-12 columns sidebar">
                <div class="widget">
                    <h2>Governance</h2>
                    <ol class="menu vertical">
                       @foreach ($governance as $governor)
                        <li>
                             <i class="fa fa-list-ul fa-lg" aria-hidden="true">
                                <a href="{{ route('governor.governor', $governor->slug) }}">  {{ $governor->title }}</a>
                            </i>
                        </li>
                        <br>
                        @endforeach
                    </ol>
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
<!-- Content Section Ends /-->

        <!-- Related Products Ends /-->
        <!-- Call to Action box -->
        @include('partials.call')
        <!-- Call to Action End /-->
@include('partials.footer')
@endsection



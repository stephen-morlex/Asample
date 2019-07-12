@extends('layouts.app')
@section('title')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Chaplain</h2>
                        <div class="tx-div"></div>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Chaplain</a></li>
                     <li class="active"><a href="{{ route('chaplaincy.index') }}">About the chaplain</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->
<div class="welcome-message module">
                <div class="row">
                    @forelse($chaplain as $c)
                        @if($c->image)
                            <div class="medium-3 small-12 columns">
                                <img alt="{!! $c->surname !!} {!! $c->lastname !!}" src="{{ Voyager::image( $c->image)}}"  />
                            </div><!-- Left Column /-->
                        @else

                        @endif
                    <div class="medium-6 small-12 columns">
                        <h2><span>{!! $c->firstname !!} {!! $c->lastname !!} {!! $c->surname !!}</span></h2>
                        <p>{!! $c->profile !!}.</p>
                    </div><!-- Right Column /-->
                @empty
                <h4 align="center">There is no chaplain at the moment!</h4>
                @endforelse
                <div class="medium-3 small-12 columns">
                     <div class="widget">
                          <h2>Chaplaincy</h2>
                        <ol class="menu vertical">
                            <li>
                                <i class="fa fa-list-ul" aria-hidden="true">
                                    <a href="{{ route('chaplaincy.index')}}">About the Chaplain</a>
                                </i>
                            </li><br>
                            @forelse($side_bar as $si)
                                <li><i class="fa fa-list-ul" aria-hidden="true">
                                    <a href="{{ route('chaplaincy.show',$si->slug)}}">{{ $si->name }}</a>
                                </i></li><br>
                            @empty
                                <li><i class="fa fa-list-ul" aria-hidden="true">
                                    <a href="#">Opps There is no data oops!</a>
                                </i></li>
                           @endforelse
                        </ol>
                    </div><!-- widget ends /-->
            </div>
        </div>
            </div>
            <!-- Welcome Message Ends /-->
</div>
<!-- Content Section Ends /-->

<!-- Our Teachers -->

<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
@extends('layouts.app')
@section('title')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1></h2>
                        <div class="tx-div"></div>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li class="active"><a href="{{ route('faculty.index') }}">Faculties, Schools and Institute</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->


<div class="welcome-message module">
            @forelse($chaplain as $c)
                <div class="row">
                
                    <div class="medium-3 small-12 columns">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg" alt="Education Background" />
                    </div><!-- Left Column /-->
                    
                    <div class="medium-6 small-12 columns">
                        <h2><span>{{!! $c->firstname !!}} {{!! $c->lastname !!}} {{!! $c->surname !!}}</span></h2>
                        
                        <p>{{!! $c->profile !!}}.</p>
                    </div><!-- Right Column /-->
                    
                @empty
                <h4 align="center">There is no chaplain at the moment!</h4>
                @endforelse

                <div class="medium-3 small-12 columns">
                  <div class="widget">
                    <ul>
                     <li><a href="{{route('chaplaincy.index')}}">About the Chaplain</a></li>
                    </ul>
                    @forelse($side_bar as $si)
                       <ul class="menu vertical">
                         <li><a href="{{route('chaplaincy.show',$si->slug)}}">{!! $si->name !!}</a></li>
                        </ul>
                    @empty
                      <h4 align="center">There is no content at the moment!</h4>
                    @endforelse

                     
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

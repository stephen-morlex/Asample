@extends('layouts.app')



@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<br>
<div class="row">
    <div class=" small-12 columns">
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li class="active"><a href="/">Home</a></li>
                <li class="active"><a href="{{ route('about.index') }}">about</a></li>
                <li class="active"><a href="#">{{ $about->title }}</a></li>
            </ul>
        </nav>
    </div>
</div>


<dir class="row">
    <p>{{ $about->title }}</p>
</dir>
      


<!-- Call to Action box -->
<div class="call-to-action">
   <div class="row">
        <div class="medium-10 small-12 columns">
            <h2><i class="fa fa-phone" aria-hidden="true"></i>  If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
        </div>
        <div class="medium-2 small-12 columns">
            <a href="#" class="button secondary">Appointment</a>
        </div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->



@include('partials.footer')
@endsection

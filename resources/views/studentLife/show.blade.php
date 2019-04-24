@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- Content section -->
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('student.index') }}">student experience</a></li>
              <li class="active"><a href="{{ route('student.show',$student->slug) }}">{{ $student->name }}</a></li>
            </ul>
          </nav>
        </div>
      </div>

@include('partials.footer')
@endsection


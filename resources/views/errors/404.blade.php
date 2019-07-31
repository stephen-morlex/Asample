@extends('layouts.app')
@section('title', 'Contact')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')


 <!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1>404 ERROR!</h1>
        </div><!-- Top Row /-->
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
    </div><!-- Row /-->
</div>

<div class="content-section module pageerror">
            <div class="row">
            	<h2>404!</h2>
                <h3>Page is not found!</h3>
                <div class="clearfix"></div>
                <div class="medium-6 columns error-page-form">
                    <div class="input-group">
                       <form action="{{ route('search.result') }}" method="GET">
                    @csrf
                  <div class="input-group">
                    <input class="input-group-field" type="search" name="query" placeholder="Searching...">
                    <div class="input-group-button">
                      <input type="submit" class=" primary button" value="Search">
                    </div>
                  </div>
                </form>
                    </div>
                </div><!-- Error Page Form /-->
            </div><!-- Row Ends /-->
        </div>

@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

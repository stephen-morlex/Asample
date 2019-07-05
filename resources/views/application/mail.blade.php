@extends('layouts.app')
@section('title', 'Contact')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<section class="section bg-gray text-center">
    <h2 class="mb-20">Get a Quote</h2>
    <h2>Hello Admin,</h2>
    <p>You received an email from : <a href="admission@cuea.edu"> admission@cuea.edu</a> </p>
    <p>Here are the details:</p>
    <p>This is an email we will contact you on: {{ $email }}</p>
    <p>This is a phone Number we will contact you on: {{$telephone}}</p>

    <p>Thank You</p>
  </section>
@endsection


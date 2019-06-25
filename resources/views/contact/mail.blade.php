@extends('layouts.app')
@section('title', 'Contact')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<section class="section bg-gray text-center">
    <h2 class="mb-20">Get a Quote</h2>
    <h2>Hello Admin,</h2>
    <p>You received an email from : {{$fullName}}</p>
    <p>Here are the details:</p>
    <p>Name: {{ $fullName }}</p>
    <p>Email: {{ $email }}</p>
    <p>Phone Number: {{$phoneNumber}}</p>
    <p>Subject: {{ $subject }}</p>
    <p>Message: {{ $user_message }}</p>
    <p>Thank You</p>
  </section>
@include('partials.footer')
@endsection

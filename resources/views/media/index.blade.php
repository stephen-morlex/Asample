


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
                    <li class="active"><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>


    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Grid Gallery</title>
    <link rel="stylesheet" href="{{ asset('galery/css/grid-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('galery/css/master.min.css') }}">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  </head>
  <body>
    <div id="gg-screen" hidden></div>
    <main>

      <div class="main">
        <div class="gg-box">
            <img src="{{ asset('galery/img/1.jpg') }}">
            <img src="{{ asset('galery/img/2.jpg') }}">
            <img src="{{ asset('galery/img/3.jpg') }}">
            <img src="{{ asset('galery/img/4.jpg') }}">
            <img src="{{ asset('galery/img/2.jpg') }}">
            <img src="{{ asset('galery/img/5.jpg') }}">
            <img src="{{ asset('galery/img/7.jpg') }}">
            <img src="{{ asset('galery/img/8.jpg') }}">
            <img src="{{ asset('galery/img/9.jpg') }}">
            <img src="{{ asset('galery/img/10.jpg') }}">
            <img src="{{ asset('galery/img/11.jpg') }}">
            <img src="{{ asset('galery/img/12.jpg') }}">
            <img src="{{ asset('galery/img/13.jpg') }}">
            <img src="{{ asset('galery/img/14.jpg') }}">
            <img src="{{ asset('galery/img/15.jpg') }}">
            <img src="{{ asset('galery/img/16.jpg') }}">
            <img src="{{ asset('galery/img/17.jpg') }}">
            <img src="{{ asset('galery/img/18.jpg') }}">
            <img src="{{ asset('galery/img/19.jpg') }}">
            <img src="{{ asset('galery/img/20.jpg') }}">
        </div>
      </div>
    </main>
    <script type="text/javascript" src="{{ asset('galery/js/grid-gallery.min.js') }}"></script>
  </body>
</html>


    @include('partials.footer')
    @endsection


<!doctype html>
<html lang="en">
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Catholic University of Eastern Africa - @yield('title')</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


     @include('meta::manager', [
            'title'         => 'CUEA',
            'description'   => 'Catholic University of Eastern Africa',
            'image'         => '',
        ])
    <!-- FavIcon -->
    <link rel="icon" href="{{ asset('/images/favicon2.png') }}">

    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/foundation.min.css') }}" media="all" />



    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.css') }}" media="all" />

    <!-- Lightbox IMage Gallery Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lightbox.min.css') }}" media="all" />

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" media="all" />


    <!-- Font Awesome CSS File -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">



    <!-- Google Fonts For Stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION STYLE SHEETS Delete If not using Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/lib/revolution/css/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/lib/revolution/css/layers.css') }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/lib/revolution/css/navigation.css') }}">
    {{-- scroll animation --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.3/plyr.css" />


<script async src="//platform-api.sharethis.com/js/sharethis.js#property=5ced204190e94700129832d2&product="sticky-share-buttons"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
</div>

</head>

<body>

	<!-- Page Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
            	<div id="object"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader Ends /-->

    <div class="main-container">
        @yield('content')

    </div>

    {{-- scroll script --}}

     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script src="https://cdn.plyr.io/3.5.3/plyr.polyfilled.js"></script>

  <script>
    AOS.init();
  </script>
  {{--  <script src="{{ asset('/js/app.js') }}"></script>  --}}
  <script>

      $(document).foundation();
  </script>
  <script>
    const player = new Plyr('#player');
  </script>
</body>
</html>

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
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

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
    @yield('script')

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
<script>
    
    $(document).ready(function(){
        var i = 1;
        var j=1;
    
        $('#add').click(function(){
            i++;
                    $('#dynamic_field').append('<div class="row" id="row'+i+'"><div class="medium-3 small-12 columns"><label>High school name</label><label><input type="text" name="high_school'+i+'" placeholder="The name of  your high school here..." /></label></div> <div class="medium-3 small-12 columns"><label>School Address</label><label><input type="text" name="school_address'+i+'" value="{{ old('school_address') }}" placeholder="The address of your school here..." /></label></div><div class="medium-2 small-12 columns"><label>When started</label><label><input type="date" name="when_started_highschool'+i+'" value="{{  old('when_started_highschool') }}" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>When ended</label><label><input type="date" name="when_ended_highschool'+i+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>&nbsp;</label><button  type="button" name="remove" id="'+i+'" class="btn_remov button alert">Remove</button></div></div><!-- Row Ends /-->');

             
              
              // $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" placeholder="Enter name"></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td></tr>');

              // <button  type="button" name="add" id="add" class="button success">Add more</button>  
 
      
        });
        $(document).on("click", ".btn_remov",function(){
            var button_id = $(this).attr("id");
            $("#row"+button_id+"").remove();
            
        });
        $('#submit').click(function(){
           $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data){
                alert(data);
                $('#add_name')[0].reset();
            }
           })
        });
    });
</script>
<script>
    $(document).ready(function(){
         var j=1;

         $('#add2').click(function(){
                j++;
                
                $('#dynamic_field2').append('<div class="row" id="row'+j+'"><div class="medium-3 small-12 columns"><label>college name</label><label><input type="text" name="college'+j+'" placeholder="The name of college here..." /></label></div><div class="medium-3 small-12 columns"><label>School Address</label><label><input type="text" name="college_address'+j+'" placeholder="The address of your school here..." /></label></div><div class="medium-2 small-12 columns"><label>When started</label><label><input type="date" name="when_started_college'+j+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>When Ended</label><label><input type="date" name="when_ended_college'+j+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>&nbsp;</label><button  type="button" name="remove" id="'+j+'" class="btn_remove2 button alert">Remove</button></div></div><!-- Row Ends /-->');
            
    });
         $(document).on("click", ".btn_remove2",function(){
            var button_id = $(this).attr("id");
            $("#row"+button_id+"").remove();
            
        });
     });
</script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>

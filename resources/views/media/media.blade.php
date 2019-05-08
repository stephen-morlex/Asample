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
                    <li class="active"><a href="#">Gallery</a></li>
                </ul>
            </nav>
        </div>
    </div>


        <!-- Content section -->
        <div class="content-section gallery-page module-gallery">
        	
            <!-- Gallery Section -->
            <div class="gallery-wrapper module">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Amazing Campus Life</h2>
                        <p>Some Amazing Stuff from our Campus</p>
                    </div>
                </div> <!-- Title Ends /-->
                
                <div class="gallery-container">

                    @forelse($medias as $media)
                        <a href="{{ $media->image }}" data-lightbox="campus-gallery" data-title="{{ $media->title }}">
                            <img class="gallery-thumb" src="{{ $media->image }}" alt="{{ $media->title }}"/>
                        </a>
                    @empty
                        <P>No image</P>
                    @endforelse
                
                </div><!-- Gallery Container /-->
                
            </div>
            <!-- Gallery Section Ends /-->
            
            
        </div>
        <!-- Content Section Ends /-->
        
           @include('partials.footer')
    @endsection
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
              <li class="active"><a href="#">Faculties, Schools and Instituate</a></li>
            </ul>
          </nav>
        </div>
      </div>


<<<<<<< HEAD
<<<<<<< HEAD
   <br>
   <br>

          <!-- Content section -->
          <div class="content-section course-page">

                <!-- Seminar/Events -->
                <div class="module">
                    <div class="row">

                        <div class="courses-wrapper">

                            <div class="course-section">

                                <div class="section-title">
                                    <h2><span>Faculties, Schools & Institutes</span></h2>
                                </div><!-- Section Title Ends /-->
                                <hr style=" border: 5px solid #e79800;
                                border-radius: 5px;">

                                    @forelse ($faculties as $fa)

                                    <div class="medium-6 small-12 columns">

                                        <div class="course">
                                            
                                            <div class="course-thumb animated zoomInRight delay-1s">
                                                <a href="{{ route('faculty.show', $fa->slug) }}">
                                                <img src="{{ $fa->image }}" alt="{{ $fa->name }}" title="{{ $fa->name }}" />
                                                 </a>
                                            </div>
                                            <h3>{{ Str::limit($fa->name) }}</h3>
                                         <a  class="middle" href="{{ route('faculty.show',$fa->slug) }}" class="secondary button">More About {{ Str::limit($fa->name,50) }}</a>
                                      <br>
                                        </div><br>
                                    </div>

                                    @empty
                                            <h3> There is no faculties uploaded yet.</h3>
                                    @endforelse


                                <div class="clearfix"></div>
                            </div><!-- Courses Section Ends /-->

                        </div><!-- Events Wrapper Ends /-->

                    </div><!-- Row Ends /-->
                </div>
                <!-- Seminar Events Ends /-->

            </div>
            <!-- Content Section Ends /-->




=======
=======
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f
<!-- Content section -->
        <div class="content-section module single-products-page products-page">
            <div class="row">
            	
               
                
            </div><!-- Row Ends /-->
        </div>
        <!-- Content Section Ends /-->
        
		<!-- Related Products -->
       
        	<div class="row">
            	<div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Faculties, Schools and Instituate</h2>
                        <p>we have more than <strong>{{$faculties->count() }}</strong> Faculties, Schools and Instituate!</p>
                    </div>
                </div><!-- title ends -->
                
                <div class="products-wrap">
                @forelse ($faculties as $f)
                    <div  class="medium-4 small-12 columns" >
                        <div class="single-product">
                            <div class="product-img thumbnail" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
                                <a href="{{route('faculty.show',$f->slug)}}">
                                    <img   class="front-image" src="{{ Voyager::image( $f->thumbnail('cropped'))}}">
                                </a>
                                <div class="add-to-cart-top">
                                        <a href="{{route('faculty.show',$f->slug)}}" class="button primary">{{$f->name}}</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h6><a href="{{route('faculty.show',$f->slug)}}">{{$f->name}}</a></h6>
                               <div class="tx-div"></div>
                            </div>
                        </div>
                    </div><!-- product Ends here -->
                @empty
                    
                @endforelse
                	
                </div><!-- products wrap -->
                
            </div><!-- Row Ends -->
        </div>
        <!-- Related Products Ends /-->
<<<<<<< HEAD
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f
=======
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f
        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="#" class="button secondary">Appointment</a>
                </div>
           </div><!-- row /-->
         </div>
        <!-- Call to Action End /-->



@include('partials.footer')
@endsection



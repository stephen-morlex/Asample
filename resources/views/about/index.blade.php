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
                    <li class="active"><a href="{{ route('about.index') }}">About Cuea</a></li>
                    @foreach ($about as $a)
                    <li class="active"><a href="#"> {{ $a->title }}</a></li>
                    @endforeach

                </ul>
            </nav>
        </div>
    </div>
    <br>
    <!-- Content Area Starts -->
    <div class="content-area module faq">
     <div class="row">

         <div class="medium-9 small-12 columns">
             <ul class="accordion" data-accordion>
                @forelse ($about as $a)
                <li class="accordion-item {{ request()->is('about*') ? 'active' : '' }}" data-accordion-item>
                    <a href="#" class="accordion-title">{!! $a->title !!}</a>
                    <div class="accordion-content" data-tab-content>
                      {!! $a->content !!}
                    </div>
                </li>
                @empty

                @endforelse
             </ul> <!-- reasons accordion ends -->
            </div> <!-- right sidebar ends -->

            <div class="medium-3 small-12 columns">
                <ul class="accordion" data-accordion>
                   @forelse ($about as $a)
                   <li class="accordion-item {{ request()->is('about*') ? 'active' : '' }}" data-accordion-item>
                       <a href="#" class="accordion-title">{!! $a->title !!}</a>
                       <div class="accordion-content" data-tab-content>
                         {!! $a->content !!}
                       </div>
                   </li>
                   @empty

                   @endforelse
                </ul> <!-- reasons accordion ends -->
               </div> <!-- right sidebar ends -->
     </div><!-- row / -->
 </div>
 <!-- Content Area Ends /-->






        <!-- Call to Action box -->
       <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i>  If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="#" class="button secondary">Appointment</a>
                </div>
           </div>
         </div> -->
        <!-- Call to Action End /-->


    @include('partials.footer')
    @endsection



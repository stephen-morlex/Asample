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
             <div>
                 <p>The Catholic University of Eastern Africa (CUEA), like most other universities, started in a modest way. It commenced as a graduate school of theology known as the Catholic Higher Institute of Eastern Africa (CHIEA).</p>
             </div>
                <div class="timeline">
                        <p></p>
                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                          </div>
                          <div class="timeline-content">
                            <p class="timeline-content-date">1984</h2>
                                <hr>
                            <p>
                                    The Institute (CHIEA) was founded in 1984 by the regional ecclesiastical authority known as the Association of Member Episcopal Conferences of Eastern Africa (AMECEA). Eritrea, Ethiopia, Kenya, Malawi, Sudan, Tanzania, Uganda and Zambia are the member countries of AMECEA.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                          </div>
                          <div class="timeline-content right">
                            <p class="timeline-content-date">1984</h2>
                                <hr>
                            <p>
                                    On 2 May 1984, CHIEA was authorized by the Congregation for Catholic Education, Vatican City (cf. Prot. N. 821/80/34), to offer two-year Licentiate/MA programmes in Theology. On 3 September of the same year, it was officially inaugurated by Rt Rev. Bishop Madaldo Mazombwe, the then Chairman of AMECEA.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M17 24h-10l-2-14h14l-2 14zm-.592-10h-8.816l.571 4h7.674l.571-4zm1.631-8c0 .922 1.092 1.618 1.961 1.618v1.382h-16v-1.382c.87 0 2-.697 2-1.618h12.039zm-7.73-.691c2.819-2.143-.594-2.353.077-3.868-2.361 2.113.85 2.169-.077 3.868zm2.486-.001c4.236-3.238-.877-3.067.105-5.308-3.382 2.895 1.259 2.959-.105 5.308z"/></svg>
                          </div>
                          <div class="timeline-content">
                            <p class="timeline-content-date">1985</h2>
                                <hr>
                            <p>
                                    On 18 August 1985, it was formally opened by Pope John Paul II. In 1986, the Graduate School of Theology started negotiations with the Commission for Higher Education in Kenya towards the establishment of the Catholic University of Eastern Africa (CUEA).
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 11.5c0 3.613-2.951 6.5-6.475 6.5-2.154 0-4.101-1.214-5.338-3h-2.882l-1.046-1.013-1.302 1.019-1.362-1.075-1.407 1.081-4.188-3.448 3.346-3.564h8.841c1.145-1.683 3.104-3 5.339-3 3.497 0 6.474 2.866 6.474 6.5zm-10.691 1.5c.98 1.671 2.277 3 4.217 3 2.412 0 4.474-1.986 4.474-4.5 0-2.498-2.044-4.5-4.479-4.5-2.055 0-3.292 1.433-4.212 3h-9.097l-1.293 1.376 1.312 1.081 1.38-1.061 1.351 1.066 1.437-1.123 1.715 1.661h3.195zm5.691-3.125c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg>
                          </div>
                          <div class="timeline-content right">
                            <p class="timeline-content-date">1989</h2>
                                <hr>
                            <p>
                                    In 1989, the Institute obtained the "Letter of Interim Authority" as the first step towards its establishment as a private university. After three years of intensive negotiations between the Authority of the Graduate School of Theology (CHIEA) and the Commission for Higher Education, the Faculty of Arts and Social Sciences was established. The climax of the negotiations was a granting of the Civil Charter to CHIEA on 3 November 1992. This marked the birth of the university as a private institution.
                            </p>
                          </div>
                        </div>

                        <div class="timeline-item">
                          <div class="timeline-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill-rule="evenodd" clip-rule="evenodd"><path d="M7.467 0c1.102.018 5.555 2.549 6.386 8.558.905-.889 1.409-3.664 1.147-4.843 3.952 2.969 6 6.781 6 11.034 0 5.094-3.43 9.251-8.963 9.251-5.728 0-9.037-3.753-9.037-8.276 0-6.26 5.052-7.62 4.467-15.724zm3.262 19.743c-.749.848-.368 1.945.763 2.045 1.035.093 1.759-.812 2.032-1.792.273-.978.09-2.02-.369-2.893-.998 1.515-1.52 1.64-2.426 2.64zm4.42 1.608c2.49-1.146 3.852-3.683 3.852-6.58 0-2.358-.94-4.977-2.5-7.04-.743 2.867-2.924 3.978-4.501 4.269.05-3.219-.318-6.153-2.602-8.438-.296 4.732-4.321 7.63-4.398 12.114-.029 1.511.514 3.203 1.73 4.415.491.489 1.054.871 1.664 1.16-.121-.608-.062-1.254.195-1.848.911-2.106 3.333-2.321 4.202-5.754.952.749 3.275 3.503 2.778 6.358-.082.469-.224.923-.42 1.344z"/></svg>
                          </div>
                          <div class="timeline-content">
                            <p class="timeline-content-date">2002- <span class="timeline-content-month">february</span></p>
                            <p>In 2002, the Faculties of Science and Commerce were established. Then in 2003, the Center for Social Justice & ethics was established.
                                 For more details see here.
                                </p>
                          </div>
                        </div>
                      </div>


            </div> <!-- right sidebar ends -->

            <div class="medium-3 small-12 columns">
                <ul class="accordion" >
                   @forelse ($abouts as $a)
                   <li class="accordion-item {{ request()->is('about*') ? 'active' : '' }}">
                       <a href="{{ route('about.show',$a->slug) }}" class="accordion-title">{!! $a->title !!}</a>
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
         </div>
        <!-- Call to Action End /-->


    @include('partials.footer')
    @endsection



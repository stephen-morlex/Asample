
        <!-- Header Starts -->
        <div class="header">
        	<div class="row">

                <div class="medium-4 small-12 columns">
                	<div class="logo">
                    	<a href="/">
                        	<img src="{{ asset('images/crop.png') }}" alt="Webful Education" />
                        </a>
                    </div><!-- logo /-->
                </div><!-- left Ends /-->

                <div class="medium-8 small-12 columns nav-wrap">
                	<!-- navigation Code STarts here.. -->
                    <div class="top-bar">
                        <div class="top-bar-title">
                            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                <a data-toggle><span class="menu-icon dark float-left"></span></a>
                            </span>
                        </div>

                        <nav id="responsive-menu">
                                <ul class="menu vertical medium-horizontal" data-responsive-menu="accordion medium-dropdown">
                                    <li class="single-sub parent-nav"><a href="/">Home</a>
                                        <!-- <ul class="child-nav menu vertical">
                                            <li><a href="index.html">Home Version 1</a></li>
                                            <li><a href="index2.html">Home Version 2</a></li>

                                        </ul> -->
                                    </li>
                                    <li class="single-sub parent-nav"><a href="admission.html">Academics </a>
                                        <ul class="child-nav menu vertical">
                                            <li><a href="{{ route('faculty.index') }}">Faculties, Schools & Institutes</a></li>
                                            <li><a href="{{ route('program.index') }}">Programs</a></li>
                                            <li><a href="{{ route('services.index') }}">Student Service information</a></li>

                                        </ul>
                                    </li>
                                    <li class="single-sub parent-nav"><a href="{{ route('admission.index') }}">Admissions</a>
                                        <ul class="child-nav menu vertical">
                                            @foreach ($ad as $s)
                                                <li><a href="{{ route('admission.show', $s->slug) }}">{{ $s->name }} Admission</a></li>
                                            @endforeach


                                        </ul>
                                    </li>
                                    <li class="single-sub parent-nav"><a href="{{ route('research.index') }}"> Research</a>
                                        <ul class="child-nav menu vertical">

                                           @forelse ($researchNav as $r)
                                           <li><a href="{{ route('research.show', $r->slug) }}">{{ $r->name }}</a></li>
                                           @empty

                                           @endforelse



                                        </ul>
                                    </li>
                                    <li class="single-sub parent-nav">
                                        <a href="{{ route('student.index') }}">Student&nbsp;Life</a>
                                        <ul class="child-nav menu vertical">
                                                @foreach ($studLife as $sl)
                                                    <li><a href="{{ route('student.cat', $sl->slug) }}">{{ $sl->name }}</a></li>
                                                @endforeach


                                            </ul>
                                    </li>
                                    <li class="single-sub parent-nav"><a href="{{ route('about.index') }}">About</a>
                                        <ul class="child-nav menu vertical">
                                            @foreach ($abouts as $about)
                                                <li><a href="{{ route('about.show', $about->slug) }}">{{ $about->title }}</a></li>
                                            @endforeach





                                         </ul>
                                    </li>
                                    <!-- <li class="single-sub parent-nav"><a href="blog1.html">Blog</a>
                                        <ul class="child-nav menu vertical">
                                            <li><a href="blog1.html">Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="{{ route('contact.index') }}">Contact </a></li>
                                </ul>
                            </nav>
                        </div><!-- top-bar Ends -->
                        <!-- Navigation Code Ends here -->
                        <div class="search-wrap float-right">
                            <a href="#" class="search-icon-toggle" data-toggle="search-dropdown"><i class="fa fa-search"></i></a>
                        </div><!-- search wrap ends -->
                        <div class="dropdown-pane" id="search-dropdown" data-dropdown data-auto-focus="true">
                          <input type="text" placeholder="Enter keyword and press enter .... " />
                        </div>
                    </div><!-- right Ends /-->
                </div>
                <!-- Navigation Wrapper Ends /-->

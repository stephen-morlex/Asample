<div class="header header-new">
    <div class="row">

        <div class="medium-4 small-12 columns">
            <div class="logo">
                <a href="/">
                    <img src="/images/s5_logo.png" alt="Webful Education">
                </a>
            </div><!-- logo /-->
        </div><!-- left Ends /-->
        <div class="search-wrap float-right">
            <a href="#" class="search-icon-toggle" data-toggle="search-dropdown" aria-controls="search-dropdown" data-is-focus="false" data-yeti-box="search-dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
        </div><!-- search wrap ends -->
        <div class="dropdown-pane" id="search-dropdown" data-dropdown="jgqsh8-dropdown" data-auto-focus="true" aria-hidden="true" data-yeti-box="search-dropdown" data-resize="search-dropdown" aria-labelledby="fgomhf-dd-anchor" data-events="resize">
          <input type="text" placeholder="Enter keyword and press enter .... ">
        </div>

    </div><!-- Row Ends /-->
</div>
<div class="navigation-style-two">
    <div class="row nav-wrap">
        <!-- navigation Code STarts here.. -->
        <div class="top-bar">
            <div class="top-bar-title">
                <span data-responsive-toggle="responsive-menu" data-hide-for="medium" style="display: none;">
                    <a data-toggle=""><span class="menu-icon dark float-left"></span></a>
                </span>
            </div>

            <nav id="responsive-menu">
                <ul class="menu vertical medium-horizontal dropdown" data-responsive-menu="accordion medium-dropdown" role="menubar" data-dropdown-menu="020c49-dropdown-menu">
                    <li class="single-sub parent-nav"><a href="/">Home</a></li>
                    <li class="single-sub parent-nav"><a href="{{ route('faculty.index') }}">Academics </a>
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
                        <a href="{{ route('student.index') }}">StudentLife</a>
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

                   <li class="single-sub parent-nav"><a href="{{ route('contact.index') }}">Portals </a>
                            <ul class="child-nav menu vertical">
                                <li><a href="https://student.cuea.edu/">Student portal</a></li>
                                <li><a href="https://staff.cuea.edu/site/login">Teacher portal</a></li>
                                <li><a href="https://www.premiercert.org/cuea/">Degree verification</a></li>
                            </ul>
                     </li>
                     <li class="single-sub parent-nav"><a href="{{ route('contact.index') }}">Contact</a></li>
            </nav>
        </div><!-- top-bar Ends -->
        <!-- Navigation Code Ends here -->

    </div><!-- right Ends /-->
</div>

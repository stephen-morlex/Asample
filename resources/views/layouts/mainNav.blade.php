 <div class="header header-new">
    <div class="row">

        <div class="medium-7 small-12 columns">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo2.png') }}" alt="CUEA">
                </a>
            </div>
        </div>
        <div class="medium-5 small-12 columns">
            <section class="newsletter-subscribe">
                <div class="newsletter-subscribe-inner">
                    <form action="{{ route('search.result') }}" method="GET">
                        @csrf
                        <div class="input-group">
                            <input class="input-group-field" type="text" name="query" placeholder="Searching...">
                            <div class="input-group-button">
                                <input type="submit" class=" primary button" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

    </div>
</div>



<div class="navigation-style-two">
    <div class="row nav-wrap">
      
        <div class="top-bar">
            <div class="top-bar-title">
                <span data-responsive-toggle="responsive-menu" data-hide-for="medium" style="display: none;">
                    <a data-toggle=""><span class="menu-icon dark float-left"></span></a>
                </span>
            </div>
            <nav id="responsive-menu">
                <ul class="menu vertical medium-horizontal" data-responsive-menu="accordion medium-dropdown">
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
                    <li class="single-sub parent-nav"><a href="{{ route('student.index') }}">Student Life</a>
                        <ul class="child-nav menu vertical">
                            @foreach ($studLife as $sl)
                                <li><a href="{{ route('student.cat', $sl->slug) }}">{{ $sl->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="single-sub parent-nav"><a href="{{ route('about.index') }}">About Cuea</a>
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
                </ul>
            </nav>
        </div>
    </div>
</div>






<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Internship Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    @include('include.basiccss')


</head>

<body>

    <div class="page-loading">
        <img src="/front_asset/images/loader.gif" alt="" />
    </div>

    <div class="theme-layout" id="scrollup">

        <div class="responsive-header">
            <div class="responsive-menubar">
                <div class="res-logo"><a href="/" title=""><img src="/front_asset/images/resource/logo 7.png" alt="" /></a></div>
                <div class="menu-resaction">
                    <div class="res-openmenu">
                        <img src="/front_asset/images/icon.png" alt="" /> Menu
                    </div>
                    <div class="res-closemenu">
                        <img src="/front_asset/images/icon2.png" alt="" /> Close
                    </div>
                </div>
            </div>
            <div class="responsive-opensec">

                <!-- Btn Extras -->
                <form class="res-search">
                    <input type="text" placeholder="Job title, keywords or company name" />
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
                <div class="responsivemenu">
                    @include('include.menu')
                </div>
            </div>
        </div>

        <header class="stick-top forsticky">
            <div class="menu-sec">
                <div class="container">
                    <div class="logo">
                        <a href="/" title=""><img class="hidesticky" src="/front_asset/images/resource/logo 7.png" alt="" /><img class="showsticky" src="/front_asset/images/resource/logo 7.png" alt="" /></a>
                    </div>
                    <!-- Logo -->

                    <!-- Btn Extras -->
                    <nav>
                        @include('include.menu')
                    </nav>
                    <!-- Menus -->
                </div>
            </div>
        </header>

        <section>
            <div class="block no-padding">
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-featured-sec">
                                <div class="new-slide">
                                    <img src="/front_asset/images/resource/vector-1.png">
                                </div>
                                <div class="job-search-sec">
                                    <div class="job-search">
                                        <h3>The Easiest Way to Get Your Internship</h3>
                                        <span>Find Internship, Employment & Career Opportunities</span>
                                        <form method="GET">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
                                                <a href="{{ route('student.register') }}" class="btn btn-primary btn-block">
                                                    Student Register
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
                                                <a href="{{ route('employer.register') }}" class="btn btn-primary btn-block">
                                                    Employer Register
                                                </a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="scroll-to">
                                    <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>How it Works</h2>
                                <span>Follow the steps</span>
                            </div>
                            <div class="how-works">
                                <div class="how-workimg"><img src="/front_asset/images/resource/hw1.jpg" alt="" /></div>
                                <div class="how-work-detail">
                                    <div class="how-work-box">
                                        <span>1</span>
                                        <i class="la la-user"></i>
                                        <h3>Register an account</h3>
                                        <p>Internship is the leading and longest-running online recruitment in Turkey. We understand that job-seekers come to us not only for a Internship, but for an pportunity to realize their professional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="how-works flip">
                                <div class="how-workimg"><img src="/front_asset/images/resource/hw2.jpg" alt="" /></div>
                                <div class="how-work-detail">
                                    <div class="how-work-box">
                                        <span>2</span>
                                        <i class="la la-file-text"></i>
                                        <h3>Specify & Search Your Internship</h3>
                                        <p>You’ll receive applications via email. You can also manage jobs and candidates from your Indeed dashboard. Review applications, Schedule interviews and view recommended candidates all from one place.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="how-works">
                                <div class="how-workimg"><img src="/front_asset/images/resource/hw3.jpg" alt="" /></div>
                                <div class="how-work-detail">
                                    <div class="how-work-box">
                                        <span>3</span>
                                        <i class="la la-pencil"></i>
                                        <h3>Apply For Internship</h3>
                                        <p>Internship is the leading and longest-running online recruitment in Turkey. We understand that Internship-seekers come to us not only for a job, but for an pportunity to realize their professional.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="scroll-here">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Popular Categories</h2>
                                <span>37 jobs live - 0 added today.</span>
                            </div>
                            <!-- Heading -->
                            <div class="cat-sec">
                                <div class="row no-gape">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-bullhorn"></i>
											<span>Design, Art & Multimedia</span>
											<p>(22 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-graduation-cap"></i>
											<span>Education Training</span>
											<p>(6 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-line-chart "></i>
											<span>Accounting / Finance</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-users"></i>
											<span>Human Resource</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-sec">
                                <div class="row no-gape">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-phone"></i>
											<span>Telecommunications</span>
											<p>(22 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-cutlery"></i>
											<span>Restaurant / Food Service</span>
											<p>(6 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-building"></i>
											<span>Construction / Facilities</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
											<i class="la la-user-md"></i>
											<span>Health</span>
											<p>(3 open positions)</p>
										</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="browse-all-cat">
                                <a href="#" title="">Browse All Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block double-gap-top double-gap-bottom">
                <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div>
                <!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="simple-text-block">
                                <h3>Make a Difference with Your Online Resume!</h3>
                                <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                                <a href="#" title="">Create an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="scroll-here">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="heading">
                                <h2>Featured Internship</h2>
                                <span>Leading Students already using Internship and talent.</span>
                            </div>
                            <!-- Heading -->
                            <div class="job-listings-sec">
                                @foreach ($int as $item)
                                    <!-- Job -->
                                    <div class="job-listing" style="padding-left:50px;">
                                        <div class="job-title-sec">
                                            <h3><a href="/internships/details/{{$item->id}}" title="">{{$item->title}}</a></h3>
                                            <span>{{$item->category}}</span>
                                        </div>
                                        <span class="job-lctn"><i class="la la-user-tie"></i>{{$item->employer->name}}</span>
                                        <a href="/internships/details/{{$item->id}}"><span class="job-is ft">Apply</span></a>

                                    </div>
                                    <!-- /Job -->
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-12">
                            <div class="pagination" style="align-items: center; display:inherit;">
                                {!! $int->links() !!}
                            </div><!-- Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Featured Internships</h2>
                                <span>Leading Employers already using job and talent.</span>
                            </div>
                            <!-- Heading -->
                            <div class="job-listings-sec">
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="front_asset/images/resource/l1.png" alt="" /> </div>
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is ft">FULL TIME</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="front_asset/images/resource/l2.png" alt="" /> </div>
                                        <h3><a href="#" title="">Marketing Director</a></h3>
                                        <span>Tix Dog</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Rennes, France</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is pt">PART TIME</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="front_asset/images/resource/l3.png" alt="" /> </div>
                                        <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                        <span>StarHealth</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>London, United Kingdom</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is ft">FULL TIME</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="front_asset/images/resource/l4.png" alt="" /> </div>
                                        <h3><a href="#" title="">Application Developer For Android</a></h3>
                                        <span>Altes Bank</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Istanbul, Turkey</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is fl">FREELANCE</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="front_asset/images/resource/l5.png" alt="" /> </div>
                                        <h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
                                        <span>Vincent</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Ajax, Ontario</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is tp">TEMPORARY</span>
                                </div>
                                <!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="front_asset/images/resource/l6.png" alt="" /> </div>
                                        <h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
                                        <span>MediaLab</span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i>Ankara / Turkey</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    <span class="job-is ft">FULL TIME</span>
                                </div>
                                <!-- Job -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="browse-all-cat">
                                <a href="#" title="">Load more listings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block no-padding">
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="simple-text">
                                <h3>Gat a question?</h3>
                                <span>We're here to help. Check out our FAQs, send us an email or call us at +94 760527243</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('include.footer')

    </div>




    @include('include.basicjs')

</body>

</html>

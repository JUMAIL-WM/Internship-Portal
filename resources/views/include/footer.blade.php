<footer>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="about_widget">
                            <div class="logo">
                                <a href="/" title=""><img src="/front_asset/images/resource/logo 7.png" alt="" /></a>
                            </div>
                            <span>ideaGeek
                                29A, Wajirawansa Mawatha, Obeysekerapura, Rajagiriya, 10100, LK</span>
                            <span>+94740014335</span>
                            <span>hello@ideageek.net</span>
                            <div class="social">
                                <a href="https://www.facebook.com/ideaGeek.net/" title=""><i class="la la-facebook"></i></a>
                                <a href="https://x.com/ideageekNet" title=""><i class="la la-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/ideageek/" title=""><i class="la la-linkedin"></i></a>
                                <a href="https://www.instagram.com/ideageeknet/" title=""><i class="la la-instagram"></i></a>
                            </div>
                        </div>
                        <!-- About Widget -->
                    </div>
                </div>
                <div class="col-lg-4 column">
                    <div class="widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <div class="link_widgets">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{route('about')}}" title="">About Us </a>
                                    <a href="{{route('contact')}}" title="">Contact Us</a>
                                    <a href="{{route('faq')}}" title="">FAQ's </a>
                                    <a href="{{route('how_it_work')}}" title="">How It Works</a>
                                    <a href="{{route('termcon')}}" title="">Terms &amp; Conditions</a>
                                </div>
                                @if (Session::has('LoggedStu') && Session::has('LoggedEmp'))

                                @else
                                    <div class="col-lg-6">
                                        <a href="{{route('employer.register')}}" title="">Register As Employer </a>
                                        <a href="#" title="">Register As Student </a>
                                        <a href="#" title="" onclick="openEmployerLogin()">Login As Employer </a>
                                        <a href="#" title="" onclick="openStudentLogin()">Login As Student </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 column">
                    <div class="widget">
                        <h3 class="footer-title">Find Internship</h3>
                        <div class="link_widgets">
                            <div class="row">
                                {{-- <div class="col-lg-12">
                                    @foreach ($cat as $item)
                                        <a href="/internship/" title="">{{$item->name}}</a>
                                    @endforeach
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="download_widget">
                            <a href="/" title=""><img src="/front_asset/images/resource/dw1.png" alt="" /></a>
                            <a href="/" title=""><img src="/front_asset/images/resource/dw2.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-line">
        <span> © 2025 digizen. All rights reserved | ideated and initiated by  <a href="https://ideageek.net" style="color:white;" target="_blank"> IdeaGeek </a></span>
        <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
    </div>
</footer>

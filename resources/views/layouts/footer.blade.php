    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" style="width: 60%; height: auto" alt="">
                                </a>
                            </div>
                            <p>
                                    <a href="mailto:infodesk@AAASoftware.nl">support@aaasoftware.nl</a> <br>
                                    <!--+10 873 672 6782 <br>
                                    600/D, Green road, NewYork-->
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/AAASoftware-104049804641814" target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/software_aaa" target="_blank">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <!--
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    -->
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="/services#service1">Website bouwen</a></li>
                                <li><a href="/services#service2">SEO technieken</a></li>
                                <li><a href="/services#service3">Andere oplossingen</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Handige Links
                            </h3>
                            <ul>
                                <li><a href="/welcome#about">Over ons</a></li>
                                <li><a href="/contact#form">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Abonneer
                                    </h3>
                                    <form action="/nieuwsbrief" method="POST" class="newsletter_form">
                                        <input type="email" name="email" placeholder="Voer uw email in" required>
                                        @csrf
                                        <button type="submit">Abonneer</button>
                                    </form>
                                    <p class="newsletter_text">Abonneer op onze nieuwsbrief voor de laatste updates en de nieuwste acties.</p>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  | Made by <a href="https://AAASoftware.nl" target="_blank">AAASoftware.nl</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->


    <!-- JS here -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/navclass.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
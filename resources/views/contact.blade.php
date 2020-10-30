@include('layouts.topnav')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div id="form" class="bradcam_text">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <br>
    <section class="">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Kom in contact</h2>
                        </div>
                        <div class="col-lg-8">
                            <form action="/contact" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="info" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Beschrijf zo duidelijk mogelijk wat uw wensen zijn.'" placeholder="Beschrijf zo duidelijk mogelijk wat uw wensen zijn." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="company" id="subject" type="string" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bedrijfsnaam'" placeholder="Bedrijfsnaam">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="firstName" id="name" type="string" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Voornaam'" placeholder="Voornaam" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="lastName" id="name" type="string" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Achternaam'" placeholder="Achternaam" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="phone" id="name" type="int" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefoon'" placeholder="Telefoon">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                <div class="form-group mt-3">
                                    <button type="submit" class="button boxed-btn">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                        <!--
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Buttonwood, California.</h3>
                                    <p>Rosemead, CA 91770</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3>+1 253 565 2365</h3>
                                    <p></p>
                                </div>
                            </div>
                            -->
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3>support@aaasoftware.nl</h3>
                                    <p>De hele week door bereikbaar.
                                    Wij proberen u te helpen binnen 24 uur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
@include('layouts.footer')
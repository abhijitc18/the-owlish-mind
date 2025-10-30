<?php require 'includes/header.php'; ?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(/theowlishmind/assets/images/banner-one.jpeg)"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
                    <h3 class="subheading">
                        Everyday We Bring Hope and Smile to the Patient We Serve
                    </h3>
                    <p>
                        <a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(/theowlishmind/assets/images/banner-two.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">Smile Makes <br />A Lasting Impression</h1>
                    <h3 class="subheading">
                        Your Health is Our Top Priority with Comprehensive, Affordable medical.
                    </h3>
                    <p>
                        <a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
                style="background-image: url(/theowlishmind/assets/images/Welcome-To-Owlish-Mind.png)">
            </div>
            <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5 pt-md-5">
                        <span class="subheading mb-2">Welcome to The Owlish Mind</span>
                        <h2 class="mb-2" style="font-size: 32px">
                            Expert psychological services for individuals, students, professionals, and organizations.
                        </h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                    <p>
                        Founded in 2019, The Owlish Mind is committed to enhancing mental well-being for everyone, from
                        children to seniors. We provide a safe and private space where you can access personalized
                        psychological support.
                    </p>
                    <p>
                        Our experienced team offers confidential psychotherapy and thorough psycho-diagnostic
                        assessments, carefully designed to meet your unique needs. We understand that facing mental
                        health challenges can be difficult, and we are here to guide and empower you on your journey
                        towards improved mental wellness. At The Owlish Mind, your well-being is our priority.
                    </p>
                    <div class="founder d-flex align-items-center mt-5">
                        <div class="img" style="background-image: url(/theowlishmind/assets/images/doc-1.jpg)"></div>
                        <div class="text pl-3">
                            <h3 class="mb-0">Akash Gaikwad</h3>
                            <span class="position">CEO, Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb" id="book-appointment">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="consultation w-100 text-center px-4 px-md-5">
                    <h3 class="mb-4">Counselling Services</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <a href="/theowlishmind/pages/services" class="btn-custom">See Services</a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="consultation consul w-100 px-4 px-md-5">
                    <div class="text-center">
                        <h3 class="mb-4">Get Your Free Counselling Session Now</h3>
                    </div>
                    <form method="POST" action="/theowlishmind/code/book_appointment" class="appointment-form"
                        id="bookappointment">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="text" name="full_name" id="full_name" class="form-control"
                                        placeholder="Full name" required />
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        placeholder="Phone No." required />
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon">
                                                <span class="ion-ios-arrow-down"></span>
                                            </div>
                                            <select name="service" id="service" class="form-control" required>
                                                <option value="">Services</option>
                                                <option value="Individual Counselling Sessions">Individual Counselling
                                                    Sessions</option>
                                                <option value="Comprehensive Psychotherapies">Comprehensive
                                                    Psychotherapies</option>
                                                <option value="Psycho-Diagnostic Assessments">Psycho-Diagnostic
                                                    Assessments</option>
                                                <option value="Career Counselling">Career Counselling</option>
                                                <option value="Couple Therapy">Couple Therapy</option>
                                                <option value="Group Therapy">Group Therapy</option>
                                                <option value="Remediation Services">Remediation Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon">
                                            <span class="ion-md-calendar"></span>
                                        </div>
                                        <input type="text" name="date" id="date"
                                            class="form-control appointment_date" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="submit" value="Appointment" class="btn btn-secondary py-2 px-4" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="consultation w-100 text-center px-4 px-md-5">
                    <h3 class="mb-4">About A Counsellor</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <a href="#counsellors" class="btn-custom">Meet our Counsellor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-4">Our Counselling Services</h2>
                <p>
                    We Can Help You With This Situation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-drilling"></span> -->
                        <span class="fas fa-user"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Individual Counselling Sessions</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-tooth"></span> -->
                        <span class="fas fa-brain"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Comprehensive Psychotherapies</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-dental-floss"></span> -->
                        <span class="fas fa-clipboard-check"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Psycho-Diagnostic Assessments</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-shiny-tooth"></span> -->
                        <span class="fas fa-briefcase"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Career Counselling</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-dentist-chair"></span> -->
                        <span class="fas fa-heart"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Couple Therapy</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-tooth-1"></span> -->
                        <span class="fas fa-users"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Group Therapy</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <!-- <span class="flaticon-tooth-with-braces"></span> -->
                        <span class="fas fa-puzzle-piece"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Remediation Services</h3>
                        <p>
                            Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section intro" style="background-image: url(/theowlishmind/assets/images/take-care-our-patients.jpeg)"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">
                    We promised to take care our patients and we delivered.
                </h3>
                <p>
                    A small river named Duden flows by their place and supplies it with the necessary regelialia. It is
                    a paradisematic country
                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Counsellors</span>
                <h2 class="mb-4">Our Qualified Counsellor</h2>
                <p>
                    Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(/theowlishmind/assets/images/doc-1.jpg)">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Dr. Lloyd Wilson</h3>
                        <span class="position mb-2">Denstist</span>
                        <div class="faded">
                            <p>
                                I am an ambitious workaholic, but apart from that, pretty simple person.
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-google-plus"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(/theowlishmind/assets/images/doc-2.jpg)">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Dr. Rachel Parker</h3>
                        <span class="position mb-2">Dentist</span>
                        <div class="faded">
                            <p>
                                I am an ambitious workaholic, but apart from that, pretty simple person.
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-google-plus"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(/theowlishmind/assets/images/doc-3.jpg)">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Dr. Ian Smith</h3>
                        <span class="position mb-2">Dentist</span>
                        <div class="faded">
                            <p>
                                I am an ambitious workaholic, but apart from that, pretty simple person.
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-google-plus"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(/theowlishmind/assets/images/doc-4.jpg)">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Dr. Alicia Henderson</h3>
                        <span class="position mb-2">Dentist</span>
                        <div class="faded">
                            <p>
                                I am an ambitious workaholic, but apart from that, pretty simple person.
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-google-plus"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                                            class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Counsellors</span>
                <h2 class="mb-4">Meet Our Qualified Counsellors</h2>
                <p>Our dedicated counsellors provide personalized mental health support tailored to your unique journey.
                </p>
            </div>
        </div>
        <div class="row justify-content-center" id="counsellors">

            <!-- Counsellor 1 -->
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url(/theowlishmind/assets/images/doc-1.jpg);">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Akash Gaikwad</h3>
                        <span class="position mb-2">Counsellor</span>
                        <div class="faded">
                            <p>
                                A licensed psychologist with over 10 years of experience, specializing in clinical,
                                educational, and corporate psychology, focused on providing accessible and impactful
                                mental health services.
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <span class="icon-whatsapp"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <span class="icon-instagram"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <span class="icon-linkedin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counsellor 2 -->
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url(/theowlishmind/assets/images/doc-2.jpg);">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Urdhavi Bedagakar</h3>
                        <span class="position mb-2">Operations Head</span>
                        <div class="faded">
                            <p>
                                An experienced professional in administration and event management, dedicated to
                                creating impactful, research-driven wellness programs for students, educators, and
                                professionals.
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <span class="icon-whatsapp"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <span class="icon-instagram"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <span class="icon-linkedin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Testimonials</span>
                <h2 class="mb-4">Our Clients Says About Us</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_man.jpg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    The counselling sessions helped me manage stress and anxiety. I feel more confident
                                    and at peace now. Highly recommended. Thank you so much.
                                </p>
                                <p class="name">Amit Jadhav</p>
                                <span class="position">Businessman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_woman.jpeg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Professional and compassionate service! The therapy sessions really helped me
                                    overcome my fears and improve my mental well-being.
                                </p>
                                <p class="name">Snehal Patil</p>
                                <span class="position">Banker</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_man.jpg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    I struggled with depression, but after regular counselling, I feel much better.
                                    Thank you for guiding me through tough times!.
                                </p>
                                <p class="name">Rohit Deshmukh</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_woman.jpeg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Best counselling center! The sessions were insightful and truly life-changing. I
                                    learned how to handle stress and stay positive.
                                </p>
                                <p class="name">Swapnali Kulkarni</p>
                                <span class="position">Housewife</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_woman.jpeg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    The psychologist was patient and understanding. Their advice helped me build better
                                    relationships and self-confidence.
                                </p>
                                <p class="name">Pooja Bhosale</p>
                                <span class="position">Tuition Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_woman.jpeg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    I was skeptical at first, but the therapy really worked wonders for me. The support
                                    and guidance were invaluable! Thank you.
                                </p>
                                <p class="name">Neha Gaikwad</p>
                                <span class="position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_man.jpg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Great experience! The assessment was detailed, and the counsellor helped me set
                                    clear goals for my mental health journey.
                                </p>
                                <p class="name">Omkar Pawar</p>
                                <span class="position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img"
                                style="background-image: url(/theowlishmind/assets/images/Testimonial_woman.jpeg)">
                            </div>
                            <div class="text pl-4 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    The friendly environment and expert guidance made a huge difference in my life.
                                    Highly grateful for the support! Thank you so much.
                                </p>
                                <p class="name">Mrunal Chavan</p>
                                <span class="position">Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro" style="background-image: url(/theowlishmind/assets/images/book_appoinment.jpg)"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Get Your Free counselling Session Now</h2>
                <p class="mb-0">
                    Empowering Minds, Healing Souls - Your Trusted Partner for Psychological Assessment &
                    Counselling Services.
                </p>
                <p></p>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <p class="mb-0">
                    <a href="#book-appointment" class="btn btn-secondary px-4 py-3 scroll-link">Free Consutation</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Pricing</span>
                <h2 class="mb-4">Our Pricing</h2>
                <p>
                    Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="pricing-entry pb-5 text-center">
                    <div>
                        <h3 class="mb-4">Basic</h3>
                        <p>
                            <span class="price">$24.50</span>
                            <span class="per">/ session</span>
                        </p>
                    </div>
                    <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                    </ul>
                    <p class="button text-center">
                        <a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="pricing-entry pb-5 text-center">
                    <div>
                        <h3 class="mb-4">Standard</h3>
                        <p>
                            <span class="price">$34.50</span>
                            <span class="per">/ session</span>
                        </p>
                    </div>
                    <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                    </ul>
                    <p class="button text-center">
                        <a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="pricing-entry active pb-5 text-center">
                    <div>
                        <h3 class="mb-4">Premium</h3>
                        <p>
                            <span class="price">$54.50</span>
                            <span class="per">/ session</span>
                        </p>
                    </div>
                    <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                    </ul>
                    <p class="button text-center">
                        <a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="pricing-entry pb-5 text-center">
                    <div>
                        <h3 class="mb-4">Platinum</h3>
                        <p>
                            <span class="price">$89.50</span>
                            <span class="per">/ session</span>
                        </p>
                    </div>
                    <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                    </ul>
                    <p class="button text-center">
                        <a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Blog</h2>
                <p>
                    Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end"
                        style="background-image: url('/theowlishmind/assets/images/image_1.jpg')">
                        <div class="meta-date text-center p-2">
                            <span class="day">09</span>
                            <span class="mos">Apr</span>
                            <span class="yr">2025</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="#">Unlocking Your Potential: The Life-Changing Impact of Individual Counseling</a>
                        </h3>
                        <p>
                            Discover how individual counseling empowers self-discovery, resilience, and a path to a more
                            fulfilling life.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0">
                                <a href="#" class="btn btn-primary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end"
                        style="background-image: url('/theowlishmind/assets/images/image_2.jpg')">
                        <div class="meta-date text-center p-2">
                            <span class="day">18</span>
                            <span class="mos">Feb</span>
                            <span class="yr">2025</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="#">Transforming Lives: The Power of Comprehensive Psychotherapies</a>
                        </h3>
                        <p>
                            Comprehensive psychotherapies blend tailored techniques to foster emotional healing,
                            personal growth, and lasting mental wellness.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0">
                                <a href="#" class="btn btn-primary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end"
                        style="background-image: url('/theowlishmind/assets/images/image_3.jpg')">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">Dec</span>
                            <span class="yr">2024</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="#">Healing Hearts Together: The Transformative Power of Couple Therapy.</a>
                        </h3>
                        <p>
                            Couple therapy rebuilds trust and intimacy, fostering stronger connections through guided,
                            compassionate communication.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0">
                                <a href="#" class="btn btn-primary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
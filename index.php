<?php require 'includes/header.php'; ?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(/theowlishmind/assets/images/banner01.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">Where your mind<span>feels understood</span></h1>
                    <h3 class="subheading">
                        The Owlish Mind – Psychological Assessment & Counselling Services.
                    </h3>
                    <!-- <p>
                        <a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a>
                    </p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(/theowlishmind/assets/images/banner02.png)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">Helping You Heal<br><span>One Step at a Time</span></h1>
                    <h3 class="subheading">
                        Personalized therapy and psychological care to help you feel balanced, calm, and empowered.
                    </h3>
                    <!-- <p>
                        <a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
                style="background-image: url(/theowlishmind/assets/images/The-Owlish-Mind.png)">
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
                        Founded in 2019, The Owlish Mind is committed to promoting mental well-being for individuals across all age groups. We provide confidential, personalized, and evidence-based psychological services, including psychotherapy, psycho-diagnostic assessments, career counselling, and mental health interventions.
                    </p>
                    <p>
                        To make mental health support accessible and inclusive, we collaborate with multi-specialty clinics, educational institutions, and corporate organizations. Our specialized student programs address learning difficulties, behaviour modification, and cognitive development through structured interventions.
                    </p>
                    <p>
                        At The Owlish Mind, we strive to create a safe, professional, and supportive environment where individuals can achieve emotional clarity, resilience, and personal growth.
                    </p>
                    <div class="founder d-flex align-items-center mt-5">
                        <div class="img" style="background-image: url(/theowlishmind/assets/images/psychologist.png)"></div>
                        <div class="text pl-3">
                            <h3 class="mb-0">Akash Gaikwad</h3>
                            <span class="position">Psychologist</span>
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
                    <p>For more detailed our Counselling Services</p>
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
                                        placeholder="Full name" autocomplete="off" required />
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="E-mail"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        placeholder="Phone No." autocomplete="off" required />
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
                                            class="form-control appointment_date" placeholder="yyyy-mm-dd" autocomplete="off" required />
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
                    <h3 class="mb-4">About A Psychologist</h3>
                    <p>To know more about our psychologist </p>
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
                <p>Helping you move forward with confidence, strength, and resilience.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-user"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Individual Counselling Sessions</h3>
                        <p>
                            Personalized, one-on-one support to help you process emotions, reduce stress, and navigate life’s challenges with clarity and resilience.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-brain"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Comprehensive Psychotherapies</h3>
                        <p>
                            Explore long-term healing through evidence-based therapies that target anxiety, depression, trauma, and behavioral issues.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-clipboard-check"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Psycho-Diagnostic Assessments</h3>
                        <p>
                            Detailed assessments to identify psychological conditions, learning difficulties, or developmental delays, tailored to each individual.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-briefcase"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Career Counselling</h3>
                        <p>
                            Discover your strengths, interests, and career paths through guided sessions to make confident academic or professional choices.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-heart"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Couple Therapy</h3>
                        <p>
                            Strengthen your relationship through open communication, emotional connection, and effective conflict resolution techniques.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-users"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Group Therapy</h3>
                        <p>
                            Benefit from shared experiences in a supportive group environment focused on growth, empathy, and mental wellness.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-puzzle-piece"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Remediation Services</h3>
                        <p>
                            Structured interventions for children with learning difficulties to enhance academic performance and cognitive skills.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fas fa-hand-holding-heart"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Customized Wellness Programs</h3>
                        <p>
                            Our interventions are tailored to the specific needs of individuals, students, and professionals for maximum impact.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section intro" style="background-image: url(/theowlishmind/assets/images/emotional-well-being.png)"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="mb-4">
                    We’re committed to your emotional well-being.
                </h3>
                <p>
                    Our counselling approach focuses on understanding your concerns with empathy and care.
                    We create a safe, confidential space where you can heal, grow, and regain balance in life.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Team Members</span>
                <h2 class="mb-4">Meet Our Qualified Team</h2>
                <p>Our dedicated team provide personalized mental health support tailored to your unique journey.
                </p>
            </div>
        </div>
        <div class="row justify-content-center" id="counsellors">

            <!-- Counsellor 1 -->
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url(/theowlishmind/assets/images/psychologist-akash.png);">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Akash Gaikwad</h3>
                        <span class="position mb-2">Psychologist</span>
                        <div class="faded">
                            <p>
                                A licensed psychologist with over 10 years of experience, specializing in clinical,
                                educational, and corporate psychology, focused on providing accessible and impactful
                                mental health services.
                            </p>
                            <!-- <ul class="ftco-social text-center">
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
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counsellor 2 -->
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url(/theowlishmind/assets/images/administrative-head.png);">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Urdhavi Bedagakar</h3>
                        <span class="position mb-2">Administrative Head</span>
                        <div class="faded">
                            <p>
                                An experienced professional in administration and event management, dedicated to
                                creating impactful, research-driven wellness programs for students, educators, and
                                professionals.
                            </p>
                            <!-- <ul class="ftco-social text-center">
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
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
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
                                    My relationships have improved significantly. I used to struggle with accepting people as they are and often felt frustrated when my ideas were dismissed. Through therapy, I’ve learned to embrace differences, respond with greater understanding, and build healthier, more meaningful connections.
                                </p>
                                <p class="name">anonymous</p>
                                <!-- <span class="position">Businessman</span> -->
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
                                    I’ve learned powerful techniques for expressing gratitude, accepting situations, forgiving, and moving forward. These practices have helped me handle people more effectively and strengthened my confidence day by day.
                                </p>
                                <p class="name">anonymous</p>
                                <!-- <span class="position">Banker</span> -->
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
                                    थेरपीनंतर माझ्या आत्मविश्वासात खूप वाढ झाली आहे. आता मी माझं काम कोणत्याही अडथळ्याशिवाय करतो आणि आधीसारखे नकारात्मक विचार मनात येत नाहीत. मानसिक स्थिरता आणि भावनिक सुरक्षितता दोन्ही वाढल्या आहेत.
                                </p>
                                <p class="name">anonymous</p>
                                <!-- <span class="position">Marketing Manager</span> -->
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
                                    I’ve learned the skill of compartmentalization—keeping stress from one area of life from affecting another. It has helped me let go more easily, stay balanced, and enjoy the little things without feeling overwhelmed.
                                </p>
                                <p class="name">anonymous</p>
                                <!-- <span class="position">Housewife</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get First Counselling -->
<section class="ftco-intro" style="background-image: url(/theowlishmind/assets/images/book-appoinment.png)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Get Your First Counselling Session Now</h2>
                <p class="mb-0">
                    Empowering Minds, Healing Souls - Your Trusted Partner for Psychological Assessment & Counselling Services.
                </p>
                <p></p>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <p class="mb-0">
                    <a href="#book-appointment" class="btn btn-secondary px-4 py-3 scroll-link">Book Appoinment</a>
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

<!-- Blog -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Blog's</h2>
            </div>
        </div>
        <div class="row">

            <!-- Bolg One -->
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="/theowlishmind/pages/blog-single" class="block-20 d-flex align-items-end justify-content-end"
                        style="background-image: url('/theowlishmind/assets/images/blog-01.gif');">
                        <div class="meta-date text-center p-2">
                            <span class="day">20</span>
                            <span class="mos">June</span>
                            <span class="yr">2025</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="/theowlishmind/pages/blog-one">Therapy for Overall Wellbeing: Building Emotional Fitness for Everyday Life</a>
                        </h3>
                        <p>
                            Think of it less as a rescue mission and more as regular maintenance. Like exercise strengthens your body, therapy strengthens your inner world.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <!-- <p class="mb-0">
                                <a href="/theowlishmind/pages/blog-one" class="mr-2">Admin</a>
                                <a href="/theowlishmind/pages/blog-one" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p> -->
                            <p class="ml-auto mb-0">
                                <a href="/theowlishmind/pages/blog-one" class="btn btn-primary">
                                    Read More <span class="ion-ios-arrow-round-forward"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bolg Two -->
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="/theowlishmind/pages/blog-two" class="block-20 d-flex align-items-end justify-content-end"
                        style="background-image: url('/theowlishmind/assets/images/blog-02.gif');">
                        <div class="meta-date text-center p-2">
                            <span class="day">18</span>
                            <span class="mos">Sept</span>
                            <span class="yr">2025</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="/theowlishmind/pages/blog-two">Grief in a Breakup: When Love Becomes Loss</a>
                        </h3>
                        <p>
                            Most people don’t realize how much grief hides behind the language of endings. You don’t just lose a partner; you lose routines, shared jokes, small rituals, the version of yourself that existed in that relationship.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <!-- <p class="mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p> -->
                            <p class="ml-auto mb-0">
                                <a href="/theowlishmind/pages/blog-two" class="btn btn-primary">
                                    Read More <span class="ion-ios-arrow-round-forward"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bolg Three -->
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="/theowlishmind/pages/blog-three" class="block-20 d-flex align-items-end justify-content-end"
                        style="background-image: url('/theowlishmind/assets/images/blog-03.gif');">
                        <div class="meta-date text-center p-2">
                            <span class="day">01</span>
                            <span class="mos">Nov</span>
                            <span class="yr">2025</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="/theowlishmind/pages/blog-three">Overstimulation by Smartphones and Cognitive Impairment: The Quiet Decline of Attention</a>
                        </h3>
                        <p>
                            We reach for our phones in line at the grocery store, in moments of silence, even between thoughts. It’s almost instinctive — a reflex built on microbursts of stimulation.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <!-- <p class="mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p> -->
                            <p class="ml-auto mb-0">
                                <a href="/theowlishmind/pages/blog-three" class="btn btn-primary">
                                    Read More <span class="ion-ios-arrow-round-forward"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
<?php require '../includes/header.php'; ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/theowlishmind/assets/images/common_banner.png');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="/theowlishmind/index.php">Home
                            <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                    <span>Contact <i class="ion-ios-arrow-forward"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form method="POST" action="/theowlishmind/code/inquiry" id="inquiryForm">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your email"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone number"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                            placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map" class="map">
                    <iframe class="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.322178064301!2d74.56267059999999!3d16.848565500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc11995041f93af%3A0xefee9fab02d1f9da!2sThe%20Owlish%20Mind!5e1!3m2!1sen!2sin!4v1741781908365!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p>
                        <span>Address:</span>
                        <a href="https://maps.app.goo.gl/1esKH3f39TAbRdBS6">
                            T-2, Third floor, S square, Regular Corner complex, 100 ft circle, Kolhapur Rd, Sangli,
                            Maharashtra 416416.
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p>
                        <span>Phone:</span>
                        <a href="tel:7385507338">+91 7385507338</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p>
                        <span>Email:</span>
                        <a href="mailto:owlishmind@gmail.com">owlishmind@gmail.com</a>
                    </p>
                </div>
            </div>
            <!-- <div class="col-md-3 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p>
                        <span>Website</span>
                        <a href="#">yoursite.com</a>
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</section>

<?php require '../includes/footer.php'; ?>
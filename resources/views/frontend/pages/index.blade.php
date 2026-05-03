@extends('frontend.layouts.app')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Grow Your Business with Modern Solutions</h1>
                <p data-aos="fade-up" data-aos-delay="100">Automas Technologies – delivering innovative solution
                    and digital services with a talented team of experts.</p>
                <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                    <a href="#services" class="btn-get-started">Get Started <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="/assets/img/hero.png" class="img-fluid animated" alt=""
                    style="height: auto;width:100%">
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Our Services<br></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <i class="bi bi-server icon"></i> <!-- Server icon for Hosting & Server Solutions -->
                    <h3>Hosting & Server Solutions</h3>
                    <p>BD Hosting, Cloud Hosting, Dedicated Server, VPS</p>
                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative">
                    <i class="bi bi-telephone-inbound icon"></i> <!-- Call icon for Call Center Solutions -->
                    <h3>Call Center Solutions</h3>
                    <p>ViciDial, Issabel Cloud Call Center, IP-PABX.</p>
                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <i class="bi bi-chat-dots icon"></i> <!-- Chat/message icon for SMS Solution -->
                    <h3>SMS Solution</h3>
                    <p>BUK SMS, Masking SMS OTP SMS, and more.</p>
                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item item-red position-relative">
                    <i class="bi bi-robot icon"></i> <!-- Robot icon for AI Services -->
                    <h3>AI Services</h3>
                    <p>AI powered Customer Engagement, WhatsApp CPM, AI Chatbot.</p>
                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

        </div>
    </div>
</section>
<!-- /Services Section -->

<!-- Pricing Section -->
<style>
    .viewBtn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 24px;
        border-radius: 50px;
        border: 2px solid #F37036;
        background: #F37036;
        color: white;
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;

    }

    .viewBtn {
        color: white;
    }
</style>
<section id="pricing" class="pricing section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Check Our Affordable Pricing<br></p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">

        </div><!-- End Row -->
        <div class="text-center mt-4">

            <a href="prices.html" class="viewBtn">View All Pricing</a>
        </div>
    </div><!-- End Container -->

</section>
<!-- /Pricing Section -->

<!-- Services Section -->
<style>
    .viewBtn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 24px;
        border-radius: 50px;
        border: 2px solid #F37036;
        background: #F37036;
        color: white;
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;

    }

    .viewBtn:hover {
        color: white;
    }


    .orangeBg {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0.5px solid #F37036;
        padding: 8px 0;
        border-radius: 40px;
        transition: all 0.3s ease;
        background: transparent;
    }

    .orangeBg:hover {
        background-color: #F37036;
        color: white;
    }

    .borderChange {
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .bgP {
        background: #F37036;
        padding: 4px 6px;
    }

    .text-n {
        color: #012970;
    }
</style>

<section id="shop" class="shop section py-5">
    <div class="container text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Our Best Products</h2>
        <p class="text-muted">Quality picks, just for you.</p>
    </div>

    <div class="container">
        <div class="row g-4">
            <!-- Product -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card border-0 borderChange shadow-sm overflow-hidden h-100 position-relative product-hover">
                    <div class="position-relative">
                        <img src="assets/img/shop/product-1.jpg" class="card-img-top"
                            alt="FLYINGVOICE FIP11CP Color Screen IP Phone">
                        <span
                            class="badge bgP position-absolute top-0 start-0 m-3 rounded-pill"><sup>৳</sup>5700</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-n fw-semibold mb-2">FLYINGVOICE FIP11CP Color Screen IP Phone
                        </h5>
                        <p class="card-text small text-muted mb-0">FIP11C/FIP11CP features new UI design with
                            2.4-inch LCD color screen display with backlight. It supports 3 SIP accounts, 2.4G
                            Wi-Fi, dual 10/100 Mbps ports and IPv4/IPv6. Integrated PoE(FIP11CP only). Equipped
                            with HD handset and HD speaker, start HD voice collaboration easier.</p>
                    </div>
                    <div class="">
                        <!--<a href="https://automas.shop/products/flyingvoice-fip11cp-3-sip-poe-ip-phone" target="_blank" class="btn btn-dark btn-sm w-100">Buy Now</a>-->
                        <a href="https://automas.shop/products/flyingvoice-fip11cp-3-sip-poe-ip-phone"
                            target="_blank" class="orangeBg">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card border-0 borderChange shadow-sm overflow-hidden h-100 position-relative product-hover">
                    <div class="position-relative">
                        <img src="assets/img/shop/product-2.jpg" class="card-img-top"
                            alt="ZKTeco F22 Fingerprint Time Attendance And Access Control Terminal">
                        <span
                            class="badge bgP position-absolute top-0 start-0 m-3 rounded-pill"><sup>৳</sup>11800</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-n fw-semibold mb-2">ZKTeco F22 Fingerprint Time Attendance
                            And Access Control Terminal</h5>
                        <p class="card-text small text-muted mb-0">Key Features
                            Model: F22
                            2.4-inch TFT LCD Color Screen
                            Fingerprint capacity: 3,000
                            Card Capacity: 5000(Optional) ID or Mifare card
                            Multiple verification methods: Fingerprint, Card</p>
                    </div>
                    <div class="">
                        <!--<a href="https://automas.shop/products/zkteco-f22-fingerprint-time-attendance-and-access-control-terminal" target="_blank" class="btn btn-dark btn-sm w-100">Buy Now</a>-->
                        <a href="https://automas.shop/products/zkteco-f22-fingerprint-time-attendance-and-access-control-terminal"
                            target="_blank" class="orangeBg">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card border-0 borderChange shadow-sm overflow-hidden h-100 position-relative product-hover">
                    <div class="position-relative">
                        <img src="assets/img/shop/product-3.jpg" class="card-img-top"
                            alt="Hikvision DS-2CE12KF0T-FS 5MP 3K ColorVu Audio Fixed Bullet Camera">
                        <span
                            class="badge bgP position-absolute top-0 start-0 m-3 rounded-pill"><sup>৳</sup>4200</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-n fw-semibold mb-2">Hikvision DS-2CE12KF0T-FS 5MP 3K ColorVu
                            Audio Fixed Bullet Camera</h5>
                        <p class="card-text small text-muted mb-0">Key Features

                            Model: DS-2CE12KF0T-FS

                            Image Sensor: 3K CMOS, 2960 × 1665 Resolution

                            24/7 color imaging with F1.0 aperture

                            Built-in Microphone, Up to 40m White Light Distance

                            2.8mm, 3.6mm, 6mm fixed focal lens, IP67 Water and Dust Resistant</p>
                    </div>
                    <div class="">
                        <!--<a href="https://automas.shop/products/hikvision-ds-2ce12kf0t-fs-5mp-3k-colorvu-audio-fixed-bullet-camera" target="_blank" class="btn btn-dark btn-sm w-100">Buy Now</a>-->
                        <a href="https://automas.shop/products/hikvision-ds-2ce12kf0t-fs-5mp-3k-colorvu-audio-fixed-bullet-camera"
                            target="_blank" class="orangeBg">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card border-0 borderChange shadow-sm overflow-hidden h-100 position-relative product-hover">
                    <div class="position-relative">
                        <img src="assets/img/shop/product-4.jpg" class="card-img-top"
                            alt="ZKTeco ZM100 Smart Door Lock With Bio-metric">
                        <span
                            class="badge bgP position-absolute top-0 start-0 m-3 rounded-pill"><sup>৳</sup>30000</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-n fw-semibold mb-2">ZKTeco ZM100 Smart Door Lock With
                            Bio-metric</h5>
                        <p class="card-text small text-muted mb-0">The smart lock with hybrid biometric
                            recognition technology.Provide high security unlock way by safety mode -
                            Face+Fingerprint.Reversible design to fit for all door open direction.Rechargeable
                            lithium battery</p>
                    </div>
                    <div class="">
                        <!--<a href="https://automas.shop/products/zkteco-zm100-smart-door-lock-with-bio-metric" target="_blank" class="btn btn-dark btn-sm w-100">Buy Now</a>-->
                        <a href="https://automas.shop/products/zkteco-zm100-smart-door-lock-with-bio-metric"
                            target="_blank" class="orangeBg">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <!--<a href="https://www.automas.shop/" class="btn btn-outline-dark">View All Products</a>-->
        <a href="https://automas.shop/" class="viewBtn">View All Products</a>
    </div>
</section>
<!-- /Services Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Happy Clients</h2>
        <p>Our Honourable Happy Clients.<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                    <div>
                        <span>500+</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                    <div>
                        <span>500+</span>
                        <p>Projects</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
                    <div>
                        <span>2000+</span>
                        <p>Hours Of Support</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
                    <div>
                        <span>20</span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section>
<!-- /Stats Section -->

<!-- Features Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Powerful Solutions for Hosting, IP-PABX & Bulk SMS<br></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">

            <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                <img src="/assets/img/feature-hosting.png" class="img-fluid" alt="">
            </div>

            <div class="col-xl-6 d-flex">
                <div class="row align-self-center gy-4">

                    <!-- Hosting Feature -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check-circle"></i>
                            <h3>High-Speed SSD Hosting</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <!-- Hosting Feature -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check-circle"></i>
                            <h3>99.99% Uptime Guarantee</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <!-- IP-PABX Feature -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check-circle"></i>
                            <h3>Secure Cloud IP-PABX</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <!-- IPBX Feature -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check-circle"></i>
                            <h3>Call Recording & Analytics</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <!-- Bulk SMS Feature -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check-circle"></i>
                            <h3>Instant Bulk SMS Delivery</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <!-- Bulk SMS Feature -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check-circle"></i>
                            <h3>Detailed SMS Reports</h3>
                        </div>
                    </div><!-- End Feature Item -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Features Section -->

<!-- About Section -->
<section id="why-choose-us" class="py-5 bg-light">
    <div class="container text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Why Choose Us?</h2>
        <p class="text-muted">The trusted choice for reliable, secure, and dedicated service.</p>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center bg-primary text-white"
                        style="width:70px; height:70px;">
                        <i class="bi bi-shield-lock fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-primary mb-2">Robust Security</h5>
                    <p class="text-muted mb-0">Your data stays safe with our expert-managed, high-security
                        infrastructure.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center bg-warning text-white"
                        style="width:70px; height:70px;">
                        <i class="bi bi-graph-up-arrow fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-warning mb-2">Guaranteed Uptime</h5>
                    <p class="text-muted mb-0">Count on us for 99.99% uptime so your business never stops
                        running.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center bg-info text-white"
                        style="width:70px; height:70px;">
                        <i class="bi bi-hand-thumbs-up fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-info mb-2">Trusted Reliability</h5>
                    <p class="text-muted mb-0">We build lasting relationships with transparency and dependable
                        service.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center bg-success text-white"
                        style="width:70px; height:70px;">
                        <i class="bi bi-headset fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-success mb-2">24/7 Support</h5>
                    <p class="text-muted mb-0">Our dedicated support team is always ready to help you anytime,
                        anywhere.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /About Section -->

<!-- Faq Section -->
<section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>What is IPTSP and how does it benefit my business?</h3>
                        <div class="faq-content">
                            <p>IPTSP (Internet Protocol Telephony Service Provider) delivers voice communication
                                services over the internet using VoIP technology, helping businesses reduce
                                telephony
                                costs and improve scalability.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>How reliable is your IPTSP service?</h3>
                        <div class="faq-content">
                            <p>Our IPTSP service is backed by robust infrastructure with 99.99% uptime, ensuring
                                clear
                                call quality and uninterrupted connectivity for your business communications.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>What is IPBX hosting?</h3>
                        <div class="faq-content">
                            <p>IPBX hosting is a cloud-based phone system that manages your organization's calls
                                via the
                                internet, eliminating the need for on-premise hardware and enabling advanced
                                features
                                like call routing, voicemail, and conferencing.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Can I customize my IPBX features?</h3>
                        <div class="faq-content">
                            <p>Yes! Our IPBX hosting allows you to customize call flows, IVR menus, and user
                                extensions
                                to fit your business needs perfectly.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div><!-- End Faq Column-->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">

                    <div class="faq-item">
                        <h3>How does Bulk SMS service work?</h3>
                        <div class="faq-content">
                            <p>Our Bulk SMS service lets you send thousands of text messages instantly to your
                                customers
                                for marketing campaigns, alerts, or notifications, using a reliable and scalable
                                platform.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Do you provide sender ID customization for Bulk SMS?</h3>
                        <div class="faq-content">
                            <p>Yes, you can use custom sender IDs to display your brand name as the message
                                sender,
                                enhancing brand recognition and customer trust.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Is Bulk SMS service secure and compliant?</h3>
                        <div class="faq-content">
                            <p>Absolutely. We ensure compliance with local regulations and implement security
                                measures
                                to protect your data and maintain the integrity of your messaging campaigns.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Can Bulk SMS integrate with my CRM system?</h3>
                        <div class="faq-content">
                            <p>Yes, our Bulk SMS platform supports integration with popular CRM systems,
                                allowing you to
                                automate messaging workflows and enhance customer engagement.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                </div>
            </div><!-- End Faq Column-->
        </div>
    </div>
</section>
<!-- /Faq Section -->

<!-- Live Chat Section -->
<!-- Help Banner Section -->
<style>
    .bgChat {
        background-color: #012970;
        padding: 80px 0px;
    }
</style>
<div id="chat" class="portfolio section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Chat</h2>
        <p>Use chat option to ask any query</p>
    </div>

    <section class="container text-white rounded-3 bgChat">
        <div class="container py-4 px-3">
            <div class="row align-items-center">

                <!-- Text Column -->
                <div class="col-12 col-lg-7 text-center text-lg-start mb-3 mb-lg-0">
                    <h4 class="text-uppercase fw-bold mb-2 text-white">
                        Need Some <span class="text-warning">Help?</span>
                    </h4>
                    <p class="mb-0 small" style="text-align: justify;">
                        Contact our experts anytime—whether you're stuck, confused, or need guidance on where to
                        begin.
                    </p>
                </div>

                <!-- Buttons Column -->
                <div class="col-12 col-lg-5 text-center text-lg-end">
                    <div
                        class="d-flex flex-nowrap gap-2 justify-content-center justify-content-lg-end overflow-auto pb-2">

                        <!-- Call Now -->
                        <a href="tel:+8801886660980"
                            class="btn text-white fw-semibold px-3 py-2 d-inline-flex align-items-center text-nowrap flex-shrink-0"
                            style="min-width: 100px; background-color: #f35813;">
                            <i class="bi bi-telephone-fill me-1"></i> Call Now
                        </a>

                        <!-- Facebook -->
                        <a href="https://m.me/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-primary fw-semibold px-3 py-2 d-inline-flex align-items-center text-nowrap flex-shrink-0"
                            style="min-width: 100px;">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </a>

                        <!-- WhatsApp -->
                        <a href="https://wa.me/+8801886660980" target="_blank" rel="noopener noreferrer"
                            class="btn btn-success fw-semibold px-3 py-2 d-inline-flex align-items-center text-nowrap flex-shrink-0"
                            style="min-width: 100px;">
                            <i class="bi bi-whatsapp me-1"></i> WhatsApp
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- /Live Chat Section -->

<!-- Clients Section -->
<style>
    /* Make images clear and sharp by default */
    .swiper-slide img {
        filter: none !important;
        opacity: 1 !important;
        transition: transform 0.3s ease;
    }

    /* Subtle zoom effect on hover */
    .swiper-slide img:hover {
        transform: scale(1.05);
    }
</style>

<section id="clients" class="clients section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>We work with best clients<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 1000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                        },
                        "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                        },
                        "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                        },
                        "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-1.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-2.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-3.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-4.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-5.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-6.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-7.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-8.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-9.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-10.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-11.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-12.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-13.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-14.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-15.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-16.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-17.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-18.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-19.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-20.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-21.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-22.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-23.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-24.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-25.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-26.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-27.jpg" class="img-fluid"
                        alt="client-img">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/clients/c-28.jpg" class="img-fluid"
                        alt="client-img">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
<!-- /Clients Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Saturday - Thursday </p>
                            <p>9:00 AM - 11:00 PM</p>
                            <p class="text-white"> .</p>
                            <p class="text-white"> .</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <!--<p>MH Heritage, Level-1, Flat-B1, House-132, Road-6, Mohammadia Housing Society, Dhaka-1207</p>-->
                            <p>MH Heritage, Level-1, House-132, Road-6, Mohammadia Housing Society, Dhaka-1207
                            </p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <a href="tel:09617-300600" class="text-dark">
                                09617-300600
                            </a>
                            <p class="text-white"> .</p>
                            <!--<a href="tel:09617-300600" class="text-dark">-->
                            <!--    09617-300600-->
                            <!--</a>-->

                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <a href="mailto:info@automas.com.bd" class="text-dark">
                                info@automas.com.bd
                            </a>
                            <a href="mailto:support@automas.com.bd" class="text-dark">
                                support@automas.com.bd
                            </a>
                        </div>
                    </div><!-- End Info Item -->
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email"
                                required="">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                required="">
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                required=""></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Map</h2>
    <p>Our Location</p>
</div><!-- End Section Title -->
<!-- Map Section -->
<div class="text-center">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17935.60424462942!2d90.3216254513372!3d23.757659199763047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1003b33b851%3A0xb1368ff7b68919cd!2sAutomas%20Technologies!5e1!3m2!1sen!2sbd!4v1752258070303!5m2!1sen!2sbd"
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agathis Solution</title>

    {{-- Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/termicons@1.0.3/css/termicons.min.css"rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif;">

    {{-- Hero Section --}}
    <div class="hero-section" style="background: #1b1b1b; padding: 35px 110px">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-custom" data-bs-theme="dark">
            <div class="container-fluid">
                <img src="assets/SVG/logo.svg" alt="" style="width: 72px; margin-right: 20px;">
                <a class="navbar-brand" href="#" style="font-size: 40px; font-weight: 700;"><span
                        style="color: #00704A">Agathis</span> Solution.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0" style="font-size: 24px; font-weight: 500;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <a class="btn" href="">
                            <i class="ti til-instagram"
                                style="font-size: 24px; background: #00704A; border-radius: 100%; padding: 7px"></i>
                        </a>
                        <a class="btn" href="">
                            <i class="ti til-linkedin"
                                style="font-size: 24px; background: #00704A; border-radius: 100%; padding: 7px"></i>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}

        <hr style="height:2px; border-width:0; color:gray; background-color: rgba(255,255,255,.25); margin-top: 52px">

        {{-- Banner --}}
        <div class="row d-flex align-items-center" style="color: #fff; margin: 116px 0">
            <div class="col-9">
                <h1 style="font-size: 114px; font-weight: 700;">Elevate Your Digital <span
                        style="color: #00704A">Experience</span> With Us</h1>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <h1 style="font-size: 32px; font-weight: 500;">Web, Android, IOS, <br>
                    UI/UX Design, Illustration, Icons,
                    3D Design</h1>
            </div>
        </div>
        <img src="assets/img/banner.png" alt="" style="margin-bottom: 108px">
        {{-- End Banner --}}
    </div>
    {{-- End Hero Section --}}

    <!-- Marquee -->
    <div class="container-fluid p-0">
        <div class="marquee">
            <ul class="marquee__content">
                <li>
                    WEB APPLICATION • MOBILE APP • UI/UX DESIGN •
                    ILLUSTRATION • ICONS • 3D DESIGN<span style="color: transparent">.</span>
                </li>
            </ul>
            <!-- Mirrors the content above -->
            <ul class="marquee__content" aria-hidden="true">
                <li>
                    WEB APPLICATION • MOBILE APP • UI/UX DESIGN •
                    ILLUSTRATION • ICONS • 3D DESIGN
                </li>
            </ul>
        </div>
    </div>
    <!-- End Marquee -->

    {{-- Main Section --}}
    <div class="main-section" style="margin: 0 110px">
        {{-- Our Service --}}
        <div class="row d-flex align-items-center" style="margin-top: 140px">
            <div class="col-7">
                <h1 style="font-size: 68px; font-weight: 700; margin-bottom: 56px"><span style="color: #00704A">Our</span> Services</h1>
                <p style="font-size: 34px; font-weight: 500; margin-bottom: 92px">We showcase the comprehensive range of solutions that we
                    offer to help you achieve your goals.</p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <button style="background: #00704A; color: #fff; border: none; border-radius: 20px; padding: 30px 30px; font-size: 30px; font-weight: 700;">See Other Service</button>
            </div>
        </div>
        <div class="row" style="margin-bottom: 140px">
            <div class="col-6">
                <a href="" style="text-decoration: none">
                    <div class="card" style="border: none">
                        <div class="card-body">
                            <img src="assets/img/web.png" alt="" style="margin-bottom: 60px">
                            <div class="card-title" style="margin-bottom: 56px">
                                <h1 style="font-size: 68px; font-weight: 700;">Web Application</h1>
                            </div>
                            <div class="card-text">
                                <p style="font-size: 28px; font-weight: 500;">A portfolio is a showcase of your work and achievements that demonstrate Our skills, expertise, and experience.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="" style="text-decoration: none">
                    <div class="card" style="border: none">
                        <div class="card-body">
                            <img src="assets/img/uiux.png" alt="" style="margin-bottom: 60px">
                            <div class="card-title" style="margin-bottom: 56px">
                                <h1 style="font-size: 68px; font-weight: 700;">UI/UX Design</h1>
                            </div>
                            <div class="card-text">
                                <p style="font-size: 28px; font-weight: 500;">UI/UX Design service focuses on creating visually appealing and user-friendly interfaces for websites and mobile apps.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-- End Our Service --}}

        {{-- Our Portfolios --}}
        <div class="row d-flex align-items-center" style="margin-top: 140px">
            <div class="col-7">
                <h1 style="font-size: 68px; font-weight: 700; margin-bottom: 56px"><span style="color: #00704A">Our</span> Portfolios</h1>
                <p style="font-size: 34px; font-weight: 500; margin-bottom: 92px">We showcase the comprehensive range of solutions that we
                    offer to help you achieve your goals.</p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <button style="background: #00704A; color: #fff; border: none; border-radius: 20px; padding: 30px 30px; font-size: 30px; font-weight: 700;">See More</button>
            </div>
        </div>
        <div class="row" style="margin-bottom: 140px">
            <div class="col-7">
                <img src="assets/img/barterin.png" alt="" width="100%">
            </div>
            <div class="col-5" style="padding-left: 40px">
                <h1 style="font-size: 68px; font-weight: 700; margin-bottom: 75px">Barterin Mobile App</h1>
                <p style="font-size: 34px; font-weight: 500; margin-bottom: 75px">Barterin redefines transactions through barter, eliminating the need for money. Discover a diverse marketplace, enjoy a seamless experience, and build trust with secure transactions.</p>
                <button style="background: none; border: 5px solid #00704a; border-radius: 10px; padding: 20px 30px; font-size: 28px; font-weight: 700; margin-right: 40px">Mobile App</button>
                <button style="background: none; border: 5px solid #00704a; border-radius: 10px; padding: 20px 30px; font-size: 28px; font-weight: 700;">Marketplace</button>
            </div>
        </div>
        {{-- End Our Portfolios --}}

        {{-- Trusted Company --}}
        <div class="row d-flex justify-content-center">
            <div class="col-5 text-center">
                <h1 style="font-size: 50px; font-weight: 700; margin-bottom: 52px">More than 3000 companies have <span style="color: #00704A">trusted us</span></h1>
                <p style="font-size: 22px; font-weight: 500; margin-bottom: 85px; color: rgba(0, 0, 0,.5)">We are a team of passionate developers and designers who are
                    dedicated to transforming ideas into visually stunning and
                    immersive experiences that captivate and engage audiences.</p>
            </div>
        </div>
            <div class="row d-flex flex-wrap" style="margin-bottom: 20px">
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-wrap" style="margin-bottom: 140px">
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="border: none; background: #F5F4F9; padding: 50px 62px; border-radius: 15px">
                        <img src="assets/SVG/adobe.svg" alt="">
                    </div>
                </div>
            </div>
        {{-- End Trusted Company --}}
    </div>

    {{-- Testimonial --}}
    <div class="testimonial" style="background: #1b1b1b; padding: 50px 110px 96px 110px; color: #fff;">
        <img src="" alt="">
        <h1 class="m-0" style="font-size: 146px; font-weight: 700; color: #00704A">“</h1>
        <h1 style="font-size: 62px; font-weight: 500; padding-bottom: 72px">Agathis Solution expertise exceeded my expectations. They brought our vision to life with precision and creativity, delivering a stunning and user-friendly interface.</h1>
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-2">
                        <img src="assets/img/profile.jpg" alt="" width="100%" style="border-radius: 100%">
                    </div>
                    <div class="col-10">
                        <h1 class="m-0" style="font-size: 32px; font-weight: 500;">Miftakhul Rizky</h1>
                        <p style="font-size: 22px; font-weight: 500; opacity: 50%;">CEO of Termicons</p>
                    </div>
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
    {{-- End Testimonial --}}

    {{-- Contact Us --}}
    <div class="contact-section" style="padding: 100px 110px">
        <div class="card" style="border: none; background: #00704A; color: #fff; padding: 112px 95px; border-radius: 40px">
            <div class="row d-flex align-items-center">
                <div class="col-8">
                    <h1 class="p-0" style="font-size: 82px; font-weight: 700; margin-bottom: 50px">Have a Wonderfull idea?</h1>
                    <p class="m-0" style="font-size: 38px; font-weight: 500; opacity: 75%;">Let’s make your project a success together by
                        harnessing our expertise and passion for
                        delivering exceptional design solutions.</p>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <button style="font-size: 28px; font-weight: 700; color: #00704A; background: #fff; padding: 20px 60px; border: none; border-radius: 50px">Let's Talk</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Contact Us --}}

    {{-- End Main Section --}}

    {{-- Footer Section --}}
    <div class="footer-section" style="background: #1b1b1b">
        <footer class="row border-top" data-bs-theme="dark" style=" padding: 78px 130px; margin-right: 0;">
            <div class="col-4 mb-3">
                <div class="row">
                    <div class="col-2" style="margin-right: 20px">
                        <img src="assets/SVG/logo.svg" alt="" style="width: 73px;">
                    </div>
                    <div class="col-8">
                        <h1 style="font-size: 40px; font-weight: 700; color: #fff"><span style="color: #00704A">Agathis</span> Solution.</h1>
                        <p style="font-size: 22px; font-weight: 500; color: rgba(255,255,255,.5)">Elevate Your Digital Experience with Us</p>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

            <div class="col-2"></div>

            <div class="col-2 mb-3">
                <h5 style="color: #fff; font-size: 26px">About</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Company</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Our Service</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Featured</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Testimonial</a>
                    </li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <h5 style="color: #fff; font-size: 26px">Help</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Contact Us</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">FaQ</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Term of Service</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Customer Service</a>
                    </li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <h5 style="color: #fff; font-size: 26px">Legal</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Privacy Policy</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-size: 22px; font-weight: 500;">Copyright</a>
                    </li>
                </ul>
            </div>
        </footer>
        <h1 class="m-0" style="text-align: center; font-size: 22px; font-weight: 500; color: rgba(255,255,255,.5); padding-bottom: 70px">© 2023 Agathis Solution. All Rights Reserved.</h1>
    </div>
    {{-- End Footer --}}
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tendex</title>
        <!-- Favicon icon -->
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="./images/logoi.png"
        />

        <link rel="stylesheet" href="./css/style.css" />
    </head>

    <body class="@@dashboard">
        <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

        <div id="main-wrapper">
            <div class="header landing">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar">
                                <div class="brand-logo">
                                    <a href="index')}}">
                                        <img src="./images/logo.png" alt="" />
                                    </a>
                                </div>
                                <div class="header-right">
                                    <div
                                        class="dark-light-toggle"
                                        onclick="themeToggle()"
                                    >
                                        <span class="dark"
                                            ><i class="icofont-moon"></i
                                        ></span>
                                        <span class="light"
                                            ><i class="icofont-sun-alt"></i
                                        ></span>
                                    </div>
                                    <a href="#" class="btn btn-primary">Buy</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro" id="intro" data-scroll-index="0">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-md-6">
                            <div class="intro-content my-5">
                                <h1>
                                    Tendex - Laravel Crypto Exchange landing
                                    page with dashboard
                                </h1>
                                <p>
                                    Tendex is the complete UI Kit for
                                    cryptocurrency exchange. Sign in, Signup,
                                    Phone and ID card verification, One time
                                    password verify and add bank, debit card
                                    settings and profile etc pages included.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 py-md-5">
                            <div class="intro-demo_img">
                                <img
                                    src="./images/demo/portfolio.jpg"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="demo section-padding">
                <div class="container">
                    <div class="row py-lg-5 justify-content-center">
                        <div class="col-xl-7">
                            <div class="section-title text-center">
                                <h2>Pages</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/home.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Home One</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('index2') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/home2.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Home Two</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('index3') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/home3.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Home Three</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('dashboard') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/dashboard.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('price') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/price.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Price</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('app') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/app.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>App</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('about') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/about.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>About</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('team') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/team.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Team</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('blog') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/blog.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Blog</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('career') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/career.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Career</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('contact') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/contact.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Contact</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('privacy-policy') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/privacy.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Privacy</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('faq') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/faq.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Faq</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('dashboard') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/dashboard.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('buy-sell') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/trade.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Trade</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('accounts') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/wallet.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Wallet</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('price-details') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/price-details.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Price Details</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('profile') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/profile.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Profile</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('signin') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/signin.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Sign in</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('signup') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/signup.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Sign up</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('reset') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/reset.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Reset</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('verify-email') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/verify-email.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Verify Email</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('otp-1') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/verify-phone.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Verify Phone</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('otp-2') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/verify-code.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Verify Code</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a href="{{ url('lock') }}" target="_blank">
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/lock.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Lock</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-profile') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/profile-edit.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Profile Edit</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-application') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/application.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Application</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-security') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/security.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Security</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-activity') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/activity.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Activity</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-payment-method') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/payment.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Payment</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-api') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/api.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>API</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="demo_img">
                                <a
                                    href="{{ url('settings-fees') }}"
                                    target="_blank"
                                >
                                    <div class="img-wrap">
                                        <img
                                            src="./images/demo/fees.jpg"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </a>
                                <h4>Fees</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="features section-padding bg-light"
                data-scroll-index="2"
            >
                <div class="container">
                    <div class="row py-lg-5 justify-content-center">
                        <div class="col-xl-7">
                            <div class="section-title text-center">
                                <span>Problem?</span>
                                <h2>Don't Worry, I am waiting your question</h2>
                                <p>
                                    Refreshing my inbox, waiting for your mail
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="customer-support-content">
                                <span><i class="fab fa-whatsapp"></i></span>
                                <h4>+8801843666660</h4>
                                <p>
                                    Without sleeping time, I am avaiable in
                                    Whstsapp. I recommend Whstsapp
                                </p>
                                <a
                                    href="https://api.whatsapp.com/send?phone=008801843666660"
                                    >Send Message
                                    <i class="la la-angle-right"></i
                                ></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="customer-support-content">
                                <span><i class="fab fa-skype"></i></span>
                                <h4>sporsho9</h4>
                                <p>
                                    Without sleeping time, I am avaiable in
                                    skype. I also recommend Skype
                                </p>
                                <a href="skype:profile_name?sporsho9"
                                    >Add Skype <i class="la la-angle-right"></i
                                ></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="customer-support-content">
                                <span><i class="fas fa-envelope"></i></span>
                                <h4>qkit.inc@gmail.com</h4>
                                <p>
                                    When you send me email, I get notification,
                                    and quickly reply you
                                </p>
                                <a href="mailto:qkit.inc@gmail.com"
                                    >Send Email <i class="la la-angle-right"></i
                                ></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="customer-support-content">
                                <span><i class="fas fa-headset"></i></span>
                                <h4>Pre sale question</h4>
                                <p>
                                    You have need more design or customization?
                                    Dont worry about Quality
                                </p>
                                <a
                                    href="https://docs.google.com/forms/d/109oFBGTIIuWEt5JbmyqQE0vUc8hLw1pKxuFpQwE5Vig"
                                    >Hire Now <i class="la la-angle-right"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="copyright">
                                <p>
                                    © Copyright <span id="year"></span>
                                    <a href="#">Tendex</a> I All Rights Reserved
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="#"
                                            ><i class="bi bi-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="bi bi-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="bi bi-linkedin"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="bi bi-youtube"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./js/scripts.js"></script>
    </body>
</html>

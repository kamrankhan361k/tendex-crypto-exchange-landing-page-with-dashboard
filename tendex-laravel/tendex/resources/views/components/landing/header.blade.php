<div class="header landing" id="landing_header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="brand-logo">
                            <a href="{{ url('') }}">
                                <img
                                    src="./images/logo.png"
                                    alt=""
                                    class="logo-primary"
                                />
                                <img
                                    src="./images/logow.png"
                                    alt=""
                                    class="logo-white"
                                />
                            </a>
                        </div>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div
                            class="collapse navbar-collapse"
                            id="navbarNavDropdown"
                        >
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        data-toggle="dropdown"
                                        >Home
                                    </a>
                                    <div class="dropdown-menu">
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('') }}"
                                            >Home 1</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('home-2') }}"
                                            >Home 2</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('home-3') }}"
                                            >Home 3</a
                                        >
                                        <!-- <a class="dropdown-item" href="{{url('index4')}}">Home 4</a>
                             <a class="dropdown-item" href="{{url('index5')}}">Home 5</a>
                             <a class="dropdown-item" href="{{url('index6')}}">Home 6</a>
                             <a class="dropdown-item" href="{{url('index7')}}">Home 7</a> -->
                                    </div>
                                </li>
                                <!-- <li class="nav-item">
                         <a class="nav-link" href="{{url('index')}}">Home</a>
                     </li> -->
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{ url('price') }}"
                                        >Price</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('app') }}"
                                        >App</a
                                    >
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        data-toggle="dropdown"
                                        >Company
                                    </a>
                                    <div class="dropdown-menu">
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('about') }}"
                                            >About us</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('team') }}"
                                            >Team</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('blog') }}"
                                            >Blog</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('career') }}"
                                            >Career</a
                                        >
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        data-toggle="dropdown"
                                        >Support
                                    </a>
                                    <div class="dropdown-menu">
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('contact') }}"
                                            >Contact us</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('helpdesk') }}"
                                            >Help Desk</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('privacy-policy') }}"
                                            >Privacy</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="{{ url('faq') }}"
                                            >FAQ</a
                                        >
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{ url('dashboard') }}"
                                        >Dashboard</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <div class="signin-btn">
                            <a
                                class="btn btn-primary"
                                href="{{ url('signin') }}"
                                >Sign in</a
                            >
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

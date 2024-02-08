<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg  navbar-light auto">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index.html">
                    <h2><b>Ubon</b></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('datatable')}}">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Key Facts</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Attraction Places</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Location</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Journey to Ubon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Where in Ubon</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Hotel</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Transportation</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Food</a>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="category.html">Tour Package</a>

                        <li class="nav-item">
                            <a href="{{route('wedding.Package')}}" class="nav-link">Wedding Package </a>
                        </li>

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">About the Project</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    </ul>
                   
                </div>
            </div>
        </nav>
    </div>
</header>

<section>
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/hero-banner.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/hero-banner.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/hero-banner.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
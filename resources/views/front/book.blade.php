<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('/')}}" target="">
    <title>Thế Giới Sách</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="front/css/animate.css">

    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">

    <link rel="stylesheet" href="front/css/flaticon.css">
    <link rel="stylesheet" href="front/css/style.css">
</head>

<body>

    <div class="container-fluid px-md-5  pt-4 pt-md-5">
        <div class="row justify-content-between">
            <div class="col-md-8 order-md-last">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <a class="navbar-brand" href="index.html">Publishing <span>Company</span> <small>Book Publishing Company</small></a>
                    </div>
                    <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                        <form action="#" class="searchform order-lg-last">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control pl-3" placeholder="Search">
                                <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item"><a href="about" class="nav-link">Về chúng tôi</a></li>
                    <li class="nav-item active"><a href="book" class="nav-link">Sách</a></li>
                    <li class="nav-item"><a href="author" class="nav-link">Tác giả</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <h1 class="mb-0 bread">Book Store</h1>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-10">
                    <div class="row mb-4">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <h4 class="product-select">Select Types of Products</h4>
                            <select class="selectpicker" multiple>
                                <option>Audio Books</option>
                                <option>Business Books</option>
                                <option>Children Books</option>
                                <option>Cooking</option>
                                <option>Lifestyles</option>
                                <option>Mystery</option>
                                <option>Romance</option>
                                <option>Science Fiction</option>
                                <option>History</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-md-5">
            <div class="row">
                @foreach($results as $result)
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="book-wrap d-lg-flex">
                        <div class="img d-flex justify-content-end" style="background-image: url(front/images/{{$result->productImages[0]->path}});">
                        </div>
                        <div class="text p-4">
                            <h2><a href="#">{{$result -> name}}</a></h2>
                            <span class="position">{{$result->Author->Name}}</span>
                            <p class="mb-2"><span class="price">${{$result -> price}}</span></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="book-wrap d-lg-flex">
                        <div class="img d-flex justify-content-end" style="background-image: url(front/images/book-4.jpg);">
                            <div class="in-text">
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                    <span class="flaticon-shopping-cart"></span>
                                </a>
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Quick View">
                                    <span class="flaticon-search"></span>
                                </a>
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Compare">
                                    <span class="flaticon-visibility"></span>
                                </a>
                            </div>
                        </div>
                        <div class="text p-4 order-md-first">
                            <p class="mb-2"><span class="price">$9.00</span></p>
                            <h2><a href="#">All The Letters I Should Have Sent</a></h2>
                            <span class="position">By John Nathan Muller</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="book-wrap d-lg-flex">
                        <div class="img d-flex justify-content-end" style="background-image: url(front/images/book-7.jpg);">
                            <div class="in-text">
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                    <span class="flaticon-shopping-cart"></span>
                                </a>
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Quick View">
                                    <span class="flaticon-search"></span>
                                </a>
                                <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Compare">
                                    <span class="flaticon-visibility"></span>
                                </a>
                            </div>
                        </div>
                        <div class="text p-4">
                            <p class="mb-2"><span class="price">$9.00</span></p>
                            <h2><a href="#">Take The Risk</a></h2>
                            <span class="position">By John Nathan Muller</span>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Connect</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Extra Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Affiliate Program</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Business Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Education Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Gift Cards</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Legal</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Join us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0" style="color: rgba(255,255,255,.5);">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="front/js/jquery.min.js"></script>
    <script src="front/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="front/js/popper.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery.easing.1.3.js"></script>
    <script src="front/js/jquery.waypoints.min.js"></script>
    <script src="front/js/jquery.stellar.min.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/jquery.magnific-popup.min.js"></script>
    <script src="front/js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="front/js/google-map.js"></script>
    <script src="front/js/main.js"></script>

</body>

</html>

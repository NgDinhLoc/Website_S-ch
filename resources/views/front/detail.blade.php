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
                        <a class="navbar-brand" href="/">Thế Giới <span>Sách</span> <small>The World Book</small></a>
                    </div>
                    <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                        <form action="#" class="searchform order-lg-last">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control pl-3" placeholder="Tìm kiếm">
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
                    <li class="nav-item active"><a href="/" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item"><a href="about" class="nav-link">Về chúng tôi</a></li>
                    <li class="nav-item"><a href="book" class="nav-link">Sách</a></li>
                    <li class="nav-item"><a href="author" class="nav-link">Tác giả</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- Chi tiết -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach($products->productImages as $productImage)
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(front/images/{{$productImage->path}});">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                    <div class="heading-section">
                        <h2 class="mb-4">{{$products->name}}</h2>
                        <span class="subheading">{{$products->Author->Name}}</span>
                        <p>{{$products->description}}</p>
                    </div>
                    <div class="pd-rating">
                        @for($i = 1; $i<=5;$i++) @if($i<=$avgRating) <i class="fa fa-star"></i>
                            @else
                            <i class="fa fa-star-o"></i>
                            @endif
                            @endfor
                            <span>({{count($products->productComments)}})</span>
                    </div>
                    <div class="product-view-quantity-box">
                        <label for="quantity">Số Lượng: </label>
                        <input id="quantity" class="qty" max="100" min="0" name="" type="number" value="1">
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
                @endforeach
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
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


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
    <script src="front/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="front/js/google-map.js"></script>
    <script src="front/js/main.js"></script>

</body>

</html>

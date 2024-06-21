<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/web/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/web/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/web/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/web/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/web/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/web/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/web/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/web/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/web/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/web/css/icons.css') }}" rel="stylesheet">
	<title>eTrans - eCommerce HTML Template</title>
</head>

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		@include('web.parts._home_alert')
		<!--start top header wrapper-->
		<div class="header-wrapper bg-dark-1">
            @include('web.parts._top_menu')
            @include('web.parts._header')
            @include('web.parts._menu')
		</div>
		<!--end top header wrapper-->
		<!--start slider section-->
		@include('web.parts._carousel')
		<!--end slider section-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @yield('content')
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
        @include('web.parts._footer')
		<!--end footer section-->
		<!--start quick view product-->
		<!-- Modal -->
		<div class="modal fade" id="QuickViewProduct">
			<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
				<div class="modal-content bg-dark-4 rounded-0 border-0">
					<div class="modal-body">
						<button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
						<div class="row g-0">
							<div class="col-12 col-lg-6">
								<div class="image-zoom-section">
									<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
										<div class="item">
											<img src="{{ asset('assets/web/images/product-gallery/01.png') }}" class="img-fluid" alt="">
										</div>
										<div class="item">
											<img src="{{ asset('assets/web/images/product-gallery/02.png') }}" class="img-fluid" alt="">
										</div>
										<div class="item">
											<img src="{{ asset('assets/web/images/product-gallery/03.png') }}" class="img-fluid" alt="">
										</div>
										<div class="item">
											<img src="{{ asset('assets/web/images/product-gallery/04.png') }}" class="img-fluid" alt="">
										</div>
									</div>
									<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
										<button class="owl-thumb-item">
											<img src="{{ asset('assets/web/images/product-gallery/01.png') }}" class="" alt="">
										</button>
										<button class="owl-thumb-item">
											<img src="{{ asset('assets/web/images/product-gallery/02.png') }}" class="" alt="">
										</button>
										<button class="owl-thumb-item">
											<img src="{{ asset('assets/web/images/product-gallery/03.png') }}" class="" alt="">
										</button>
										<button class="owl-thumb-item">
											<img src="{{ asset('assets/web/images/product-gallery/04.png') }}" class="" alt="">
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="product-info-section p-3">
									<h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
									<div class="product-rating d-flex align-items-center mt-2">
										<div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-light-4"></i>
										</div>
										<div class="ms-1">
											<p class="mb-0">(24 Ratings)</p>
										</div>
									</div>
									<div class="d-flex align-items-center mt-3 gap-2">
										<h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
										<h4 class="mb-0">$49.00</h4>
									</div>
									<div class="mt-3">
										<h6>Discription :</h6>
										<p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
									</div>
									<dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
										<dd class="col-sm-9">#BHU5879</dd>	<dt class="col-sm-3">Delivery</dt>
										<dd class="col-sm-9">Russia, USA, and Europe</dd>
									</dl>
									<div class="row row-cols-auto align-items-center mt-3">
										<div class="col">
											<label class="form-label">Quantity</label>
											<select class="form-select form-select-sm">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<div class="col">
											<label class="form-label">Size</label>
											<select class="form-select form-select-sm">
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XS</option>
												<option>XL</option>
											</select>
										</div>
										<div class="col">
											<label class="form-label">Colors</label>
											<div class="color-indigators d-flex align-items-center gap-2">
												<div class="color-indigator-item bg-primary"></div>
												<div class="color-indigator-item bg-danger"></div>
												<div class="color-indigator-item bg-success"></div>
												<div class="color-indigator-item bg-warning"></div>
											</div>
										</div>
									</div>
									<!--end row-->
									<div class="d-flex gap-2 mt-3">
										<a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
		<!--end quick view product-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/web/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/web/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/web/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/web/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
	<script src="{{ asset('assets/web/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/web/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/web/js/app.js') }}"></script>
	<script src="{{ asset('assets/web/js/index.js') }}"></script>
</body>

</html>

@extends('frontend.layout.app')

@section('content')
   <!--about-us start -->

   
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>

	</ol>
  
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
	  <div class="item active">
		<img src="{{ asset('images/logo/bannersmarttrip.png') }}" width="3000" alt="">
		<h2><span></span></h2>
	  </div>
  
	  <div class="item">
		<img src="{{ asset('images/logo/bannerrevisi.png') }}" width="3000" alt="">
	  </div>
  
	  <div class="item">
		<img src="{{ asset('images/logo/bannersmarttrip.png') }}" width="3000" alt="">
	  </div>

	  <div class="item">
		<img src="{{ asset('images/logo/bannerrevisi.png') }}" width="3000" alt="">
	  </div>
	</div>
  
	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
<!--about-us end -->

<!--travel-box start-->
<section id="featured-services" class="featured-services">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<div class="text-center">
				<h3 style="color: #474D66; font-size: 32px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600; line-height: 40px; word-wrap: break-word">Sumedang Smart Trip</h3>
				<p style="color: #0F5156; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Selamat datang di pengalaman wisata yang tak tertandingi di Sumedang dengan Smart Trip. Dengan
					bimbingan kami, Anda akan menjelajahi keindahan tersembunyi, merencanakan perjalanan yang
					cerdas, dan menciptakan kenangan tak terlupakan di kota ini. Jangan lewatkan kesempatan ini
					untuk menjelajahi keajaiban alam dan budaya Sumedang, menjadikan setiap momen sebagai pengalaman
					berharga.</p>
			</div>
		</div>
	</div>
</section>

<section id="" class="">
	<div class="row">
		<div class="text-center">
			<div class="col-lg-12">
				<div id="desc-tabs" class="desc-tabs">

					<ul class="nav nav-tabs" role="tablist">

						<li role="presentation">
							<a href="#silver" aria-controls="silver" role="tab" data-toggle="tab">
								Silver
							</a>
						</li>


						<li role="presentation">
							<a href="#gold" aria-controls="gold" role="tab" data-toggle="tab">
								Gold
							</a>
						</li>

						<li role="presentation">
							<a href="#platinum" aria-controls="platinum" role="tab"
								data-toggle="tab">
								Platinum
							</a>
						</li>
					</ul>
				</div>
</section>

<!--TAB PANES-->

<div class="tab-content">

	<div role="tabpanel" class="tab-pane active fade in" id="silver">
		<div class="tab-para">

			<div class="row">
				<div class="col-lg-12">
					<style>
						.card {
							border: 1px;
							padding: 10px 50px;
							border-radius: 16px;
							width: 100%;
							height: 100%;
						}

						.card::after {
							position: absolute;
							z-index: -1;
							opacity: 0;
							-webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
							transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						}

						.card:hover {


							transform: scale(1.02, 1.02);
							-webkit-transform: scale(1.02, 1.02);
							backface-visibility: hidden;
							will-change: transform;
							box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
						}

						.card:hover::after {
							opacity: 1;
						}

						.card:hover .btn-outline-primary {
							color: white;
							background: #007bff;
						}
					</style>

					</head>

					<body>


						
						<div class="container p-5">
							<div class="row">
								<div class="col-lg-4 col-md-12 mb-4">
									<div class="card h-100 shadow-lg">
										<div class="card-body">
											<div class="text-center p-3">
												<span class="h3">Rp 6,750,000</span>
												<br><br>
												<h5 class="card-title">SILVER A</h5>
												
												<br><br>
											</div>
										</div>
										<div class="text-center">
										<ul class="list-group list-group-flush">
											<li>HANDAYANI HOTEL</li>
											<li>Sederhana Resto</li>
											<li>Kuota 15 orang</li>
											<li>2 Hari  1 Malam</li>
										</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 mb-4">
									<div class="card h-100 shadow-lg">
										<div class="card-body">
											<div class="text-center p-3">
												<span class="h3">Rp 8,000,000</span>
												<br><br>
												<h5 class="card-title">SILVER B</h5>
												<br><br>
											</div>
										</div>
										<div class="text-center">
										<ul class="list-group list-group-flush">
											<li>HOTEL ASRI</li>
											<li>Resto Bambu Hijau</li>
											<li>Kuota 5 orang</li>
											<li>2 Hari  1 Malam</li>
											
										</ul>
										</div>
										
									</div>
								</div>
								<div class="col-lg-4 col-md-12 mb-4">
									<div class="card h-100 shadow-lg">
										<div class="card-body">
											<div class="text-center p-3">
												<span class="h3">Rp 10,750,000</span>
												<br><br>
												<h5 class="card-title">SILVER C</h5>
												<br><br>
											</div>
										</div>
										<div class="text-center">
										<ul class="list-group list-group-flush">
											<li>SAHID SKYLAND CITY</li>
											<li>Resto Lautan Rasa</li>
											<li>Kuota 10 orang</li>
											<li>3 Hari 2 Malam</li>
										</ul>
										</div>
										
									</div>
								</div>
							</div>
						</div>

				</div>
			</div>
		</div>
	</div>
	<div role="tabpanel" class="tab-pane active fade in" id="gold">
		<div class="tab-para">

			<div class="row">
				<div class="col-lg-12">
					<style>
						.card {
							background: white;
							border: none;
							padding: 10px 50px;
						}
						.card h5 {
							width: 100%; 
							text-align: center; 
							color: #696F8C; 
							font-size: 14px; 
							font-weight: 500; 
							line-height: 24px; 
							word-wrap: break-word;
						}

						.card::after {
							position: absolute;
							z-index: -1;
							opacity: 0;
							-webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
							transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						}

						.card:hover {


							transform: scale(1.02, 1.02);
							-webkit-transform: scale(1.02, 1.02);
							backface-visibility: hidden;
							will-change: transform;
							box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
						}

						.card:hover::after {
							opacity: 1;
						}

						.card:hover .btn-outline-primary {
							color: white;
							background: #007bff;
						}
					</style>

					</head>

					<body>



						<div class="container p-5">
							<div class="row">
								<div class="col-lg-4 col-md-12 mb-4">
									<div class="card h-100 shadow-lg">
										<div class="card-body">
											<div class="text-center p-3">
												<span class="h3">Rp 16,750,000</span>
												<br><br>
												<h5 class="card-title">GOLD A </h5>
												<br><br>
											</div>
										</div>
										<div class="text-center">
										<ul class="list-group list-group-flush">
											<li>HANDAYANI HOTEL</li>
											<li>Sederhana Resto</li>
											<li>Kuota 25 orang</li>
											<li>2 Hari  1 Malam</li>
										</ul>
										</div>
										
									</div>
								</div>
								<div class="col-lg-4 col-md-12 mb-4">
									<div class="card h-100 shadow-lg">
										<div class="card-body">
											<div class="text-center p-3">
												<span class="h3">Rp 18,000,000</span>
												<br><br>
												<h5 class="card-title">GOLD B</h5>
												<br><br>
											</div>
										</div>
										<div class="text-center">
										<ul class="list-group list-group-flush">
											<li>HOTEL ASRI</li>
											<li>Resto Bambu Hijau</li>
											<li>Kuota 25 orang</li>
											<li>2 Hari  1 Malam</li>
										</ul>
										</div>
										
									</div>
								</div>
								<div class="col-lg-4 col-md-12 mb-4">
									<div class="card h-100 shadow-lg">
										<div class="card-body">
											<div class="text-center p-3">
												<span class="h3">Rp 20,500,000</span>
												<br><br>
												<h5 class="card-title">GOLD C</h5>
												<br><br>
											</div>
										</div>
										<div class="text-center">
										<ul class="list-group list-group-flush">
											<li>SAHID SKYLAND CITY</li>
											<li>Resto Lautan Rasa</li>
											<li>Kuota 30 orang</li>
											<li>3 Hari 2 Malam</li>
										</ul>
										</div>
										
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div role="tabpanel" class="tab-pane active fade in" id="platinum">
		<div class="tab-para">

			<div class="row">
				<div class="row">
					<div class="col-lg-12">
						<style>
							.card {
								border: none;
								padding: 10px 50px;
							}

							.card::after {
								position: absolute;
								z-index: -1;
								opacity: 0;
								-webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
								transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
							}

							.card:hover {


								transform: scale(1.02, 1.02);
								-webkit-transform: scale(1.02, 1.02);
								backface-visibility: hidden;
								will-change: transform;
								box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
							}

							.card:hover::after {
								opacity: 1;
							}

							.card:hover .btn-outline-primary {
								color: white;
								background: #007bff;
							}
						</style>

						</head>

						<body>



							<div class="container p-5">
								<div class="row">
									<div class="col-lg-4 col-md-12 mb-4">
										<div class="card h-100 shadow-lg">
											<div class="card-body">
												<div class="text-center p-3">
													<span class="h3">Rp 26,750,000</span>
													<br><br>
													<h5 class="card-title">PLATINUM A</h5>
													<br><br>
												</div>
											</div>
											<div class="text-center">
											<ul class="list-group list-group-flush">
												<li>HANDAYANI HOTEL</li>
												<li>Sederhana Resto</li>
												<li>Kuota 35 orang</li>
												<li>2 Hari  1 Malam</li>
											</ul>
											</div>
											
										</div>
									</div>
									<div class="col-lg-4 col-md-12 mb-4">
										<div class="card h-100 shadow-lg">
											<div class="card-body">
												<div class="text-center p-3">
													<span class="h3">Rp 28.000,000</span>
													<br><br>
													<h5 class="card-title">PLATINUM B</h5>
													<br><br>
												</div>
											</div>
											<div class="text-center">
											<ul class="list-group list-group-flush">
												<li>HOTEL ASRI</li>
												<li>Resto Bambu Hijau</li>
												<li>Kuota 35 orang</li>
												<li>2 Hari  1 Malam</li>
											</ul>
											</div>
											
										</div>
									</div>
									<div class="col-lg-4 col-md-12 mb-4">
										<div class="card h-100 shadow-lg">
											<div class="card-body">
												<div class="text-center p-3">
													<span class="h3">Rp 30,500,000</span>
													<br><br>
													<h5 class="card-title">PLATINUM C</h5>
													<br><br>
												</div>
											</div>
											<div class="text-center">
											<ul class="list-group list-group-flush">
												<li>SAHID SKYLAND CITY</li>
												<li>Resto Lautan Rasa</li>
												<li>Kuota 40 orang</li>
												<li>3 Hari 2 Malam</li>
											</ul>
											</div>
											
										</div>
									</div>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>

</div>

</div>
</section><!--/.travel-box-->
<!--travel-box end-->




<!-- testemonial Start -->
<section id="mycarousel">
	<div class="container"> 

		<div class="owl-carousel owl-theme" id="testemonial-carousel">
			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-txt">
						</span>
						<h3>
							<a href="#">
								
							</a>
						</h3>
						<p>
							
						</p>
						<p>
							Lapangan Jatinangor
						</p>

						<h3>
							<a href="#">
								
							</a>
						</h3>
					</div><!--/.home1-testm-txt-->
				</div><!--/.home1-testm-single-->

			</div><!--/.item-->



		</div><!--/.testemonial-carousel-->
	</div><!--/.container-->

</section><!--/.testimonial-->
<!-- testemonial End -->

@endsection
<?php
include_once "includes/database_connect.php";



?>

<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/flight_search_form.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/flaticon/font/flaticon.css">



	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/aos.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<link href='css/select2.min.css' rel='stylesheet' type='text/css'>
	<script src='js/select2.min.js'></script>
	<title>Flight Finder - Web Development Project</title>
	<style>
		.navbar-color-light {
			color: #c1c1c1 !important;
		}

		.navbar-color-dark {
			color: #393939 !important;
		}

		.bg-navbar {
			background-color: #111111;
		}

		.footer-color {
			background-color: #222831
		}

		.footer-color p {
			color: rgba(255, 255, 255, 0.7)
		}

		.footer-color a {
			color: rgba(255, 255, 255, 0.7)
		}

		.footer-color h5 {
			color: white;
		}

		.transparent-navbar {
			background-color: transparent;
		}

		#flight-finder-left {
			background-image: url("img/bg_2.jpg");
			height: 400px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;

		}

		#team-member {
			background-color: #1e90ff;
			padding-bottom: 100px;
		}

		#subscribe {
			background-color: #1e90ff;
			padding-top: 5rem;
			padding-bottom: 5rem;
		}

		#subscribe * {
			color: #f1f2f6;
			text-align: center;
		}

		#team-member * {
			color: #f1f2f6;
		}

		#email {
			background-color: #1e90ff;
			border: 1px solid rgba(255, 255, 255, 0.7);
			border-radius: 0px;
			width: 300px;
			text-align: left;
			color: rgba(255, 255, 255, 0.7) !important
		}

		#email::placeholder {
			color: rgba(255, 255, 255, 0.7)
		}

		.team-member-carousel {

			padding: 1.5rem;
			background-color: #70a1ff;
			text-align: center;
		}

		.image-carousel-size {
			border-radius: 100%;
			width: 100px !important;
			height: 100px;
			background-size: cover;
			background-position: center center;
			margin-top: -60px;
			border: 6px solid #1e90ff;
			margin-bottom: 100px;
		}

		.owl-stage-outer {
			padding-top: 3rem;
		}

		#four-features {
			padding-top: 75px;
			padding-bottom: 75px;
		}

		#submitBtn {
			background-color: #1e90ff;
			border-right: 1px solid rgba(255, 255, 255, 0.7);
			border-top: 1px solid rgba(255, 255, 255, 0.7);
			border-bottom: 1px solid rgba(255, 255, 255, 0.7);
			border-radius: 0px;
		}

		.icon {
			font-size: 4rem;
		}

		.main-agileinfo h1 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #FFC107;
			margin-bottom: 7px;
		}

		.main-agileinfo h2 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #FFC107;
			margin-bottom: 7px;
		}

		.main-agileinfo h3 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #FFC107;
			margin-bottom: 7px;
		}

		.main-agileinfo h4 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #FFC107;
			margin-bottom: 7px;
		}

		.main-agileinfo h5 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #FFC107;
			margin-bottom: 7px;
		}

		.main-agileinfo h6 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #FFC107;
			margin-bottom: 7px;
		}


		@media only screen and (min-width: 1200px) {
			h1 {
				font-size: 6em;
			}

			h3 {
				font-size: 2.5em;
			}

			.team-member-carousel {
				height: 400px;
			}
		}
	</style>
	<script>
		window.onload = function () {

			$(".owl-carousel").owlCarousel({
				margin: 10,
				loop: true
			});
			AOS.init({
				duration: 800
			})
		}
		window.onscroll = function (e) {
			if (window.scrollY > 220) {
				//$('#navbarId a').removeClass("navbar-color-dark")
				//$('#navbarId a').addClass("navbar-color-light");
				$('#navbarId').removeClass("animated fadeInUp")
				$('#navbarId').addClass("fixed-top animated fadeInDown");
				$('#navbarId').removeClass("transparent-navbar")
			}
			if (window.scrollY < 220) {
				//$('#navbarId a').removeClass("navbar-color-light")
				//$('#navbarId a').addClass("navbar-color-dark");
				$('#navbarId').removeClass("fixed-top animated fadeInDown")
				$('#navbarId').addClass("transparent-navbar")
				$("#navbarId").addClass("animated fadeInUp")
			}
		}

	</script>

</head>


<body>

	<script type="text/javascript">

		function myAjax() {
			$.ajax({
				type: "POST",
				url: 'flight_search_form.php',
				data: { action: 'searchsql()' },
				success: function (html) {
					alert(html);
				}
			});
		}

	</script>

	<script>
		$(document).ready(function () {

			$("#selUser").select2({
				ajax: {
					url: "getplaces.php",
					type: "post",
					dataType: 'json',
					delay: 250,
					data: function (params) {
						return {
							searchTerm: params.term // search term
						};
					},
					processResults: function (response) {
						return {
							results: response
						};
					},
					cache: true
				}
			});
			$("#selUser3").select2({
				ajax: {
					url: "getplaces.php",
					type: "post",
					dataType: 'json',
					delay: 250,
					data: function (params) {
						return {
							searchTerm: params.term // search term
						};
					},
					processResults: function (response) {
						return {
							results: response
						};
					},
					cache: true
				}
			});
			$("#selUser4").select2({
				ajax: {
					url: "getplaces.php",
					type: "post",
					dataType: 'json',
					delay: 250,
					data: function (params) {
						return {
							searchTerm: params.term // search term
						};
					},
					processResults: function (response) {
						return {
							results: response
						};
					},
					cache: true
				}
			});
			$("#selUser2").select2({
				ajax: {
					url: "getplaces.php",
					type: "post",
					dataType: 'json',
					delay: 250,
					data: function (params) {
						return {
							searchTerm: params.term // search term
						};
					},
					processResults: function (response) {
						return {
							results: response
						};
					},
					cache: true
				}
			});

		});

	</script>
	<div class="container-fluid" id="jumbo">
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-navbar transparent-navbar" id="navbarId">
			<div class="container">
				<a class="navbar-brand" href="#">Flight Finder</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="places.html">Places</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="flight_search_form.php">Flight Booking</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--Body-->
	</div>
	<div class="main-agileinfo">
		<div class="sap_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>
					<li class="resp-tab-item"><span>One way</span></li>
				</ul>
				<div class="clearfix"> </div>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="Flight_Page_buy.php" method="post">
							<div class="from">
								<h3>From</h3>

								<select class="form-control" name="from" id='selUser' style='width: 200px;'>
									<option value='0'>- Search City -</option>

								</select>
							</div>
							<div class="to">
								<h3>To</h3>
								<select class="form-control" id='selUser2' name="where" style='width: 200px;'>
									<option value='0'>- Search City -</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input id="" name="ddate" type="date" style="height:45px;" value="mm/dd/yyyy"
										onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

								</div>
								<div class="return">
									<h3>Return</h3>
									<input id="datepicker1" name="adate" type="date" style="height:45px;"
										value="mm/dd/yyyy" onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" name="flight_type"
									class="frm-field required">
									<option value="null">Economy</option>
									<option value="null">Premium Economy</option>
									<option value="null">Business</option>
									<option value="null">First class</option>
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="hidden" name="flight_type" value="round">

							<input type="submit" name="submit" value="Search Flights">
						</form>
					</div>
					<div class="tab-1 resp-tab-content oneway">
						<form action="Flight_Page_buy.php" method="post">
							<div class="from">
								<h3>From</h3>
								<select class="form-control" id='selUser3' name="from" style='width: 200px;'>
									<option value='0'>- Search City -</option>
								</select>
							</div>
							<div class="to">
								<h3>To</h3>
								<select class="form-control" id='selUser4' name="where" style='width: 200px;'>
									<option value='0'>- Search City -</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input class="date" id="datepicker2" name="ddate" type="date" style="height:45px"
										value="mm/dd/yyyy" onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									<span class="checkbox1">


								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" name="flight_type"
									class="frm-field required">
									<option value="null">Economy</option>
									<option value="null">Premium Economy</option>
									<option value="null">Business</option>
									<option value="null">First class</option>
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="hidden" name="flight_type" value="one">
							<input type="submit" name="submit" value="Search Flights">
						</form>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!--script for portfolio-->
	<script src="js/easytab.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!--//script for portfolio-->
	<!-- Calendar -->
	<link rel="stylesheet" href="js/bootstrap-datepicker.js" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--//quantity-->
	<!--load more-->
	<script>
		$(document).ready(function () {
			x = 1;
			$('#myList li:lt(' + x + ')').show();
			$('#loadMore').click(function () {
				x = (x + 1 <= size_li) ? x + 1 : size_li;
				$('#myList li:lt(' + x + ')').show();
			});
			$('#showLess').click(function () {
				x = (x - 1 < 0) ? 1 : x - 1;
				$('#myList li').not(':lt(' + x + ')').hide();
			});
		});
	</script>
	<!-- //load-more -->

	<div class="container-fluid footer-color" style="padding-top: 100px; padding-bottom: 100px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-3 col-lg-3 col-md-3">
					<h5>Adventure</h5>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts.</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3">
					<h5>Information</h5>
					<p><a href="about.html">About Us</a></p>
					<p><a href="contact.html">Online Enquiry</a></p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3">
					<h5>Experience</h5>
					<p><a href="places.html">Places</a></p>
					<p><a href="flight_page.php">Flight</a></p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3">
					<h5>Have a Questions?</h5>
					<p>School of Computer Science, Wuhan University, Wuhan, Hubei, PRC</p>
					<p>+86 131 6417 4567</p>
					<p>boom@boomapps.com</p>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
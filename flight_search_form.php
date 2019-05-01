<?php
include_once "includes/database_connect.php";



?>

<!doctype html>
<html>
<head>
	<title>web development </title>
	<meta charset="utf-8">

</head>

<link rel="stylesheet" href="css/flight_search_form.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>


<body>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js'></script>

<script type="text/javascript">

function myAjax() {
      $.ajax({
           type: "POST",
           url: 'flight_search_form.php',
           data:{action:'searchsql()'},
           success:function(html) {
             alert(html);
           }
      });
 }

</script>

	<script>
	$(document).ready(function(){

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

	<h1>Flight Ticket Booking</h1>
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
									<input  id="" name="ddate" type="date" style="height:35px;" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

								</div>
								<div class="return">
									<h3>Return</h3>
									<input  id="datepicker1" name="adate" type="date" style="height:35px;" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" name="flight_type" class="frm-field required">
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
									<input class="date" id="datepicker2" name="ddate" type="date" style="height:35px" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									<span class="checkbox1">


								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" name="flight_type" class="frm-field required">
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
				<link rel="stylesheet" href="bootstrap/bootstrap-datepicker.js" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--//quantity-->
						<!--load more-->
								<script>
	$(document).ready(function () {
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>
<!-- //load-more -->



</body>
</html>

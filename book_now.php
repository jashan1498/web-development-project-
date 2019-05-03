
<?php

if (isset($_POST["submit"])) {


	$ddate =  $_POST["ddate"];

	$adate =  $_POST["adate"];
	$price = $_POST["price"];
	$from = $_POST['from'];
	$where = $_POST['where'];
	inflate($from,$where,$adate,$ddate,$price);
}
?>
<!DOCTYPE html>
<?php function inflate($from,$where,$adate,$ddate,$price){ ?>
	<html>
	<head>
		<title>web development </title>

		<link rel="stylesheet" href="css/book_now.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/easytab.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default',
				width: 'auto',
				fit: true
			});
		});
		</script>

	</head>
	<body>

		<div class="main">

			<div class="content">




				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<div class="pay-tabs">
							<h2>Select Payment Method</h2>
							<ul class="resp-tabs-list">
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
								<div class="clear"></div>
							</ul>
							<div class="billing info" style="margin-top: 40px;margin-left:20px;">

								<table style="width:100%">
									<tr>
										<td style="width:50%"><p style="float:left;">From : </p></td>

										<td><h2 style="text-align:left"><?php echo $from; ?></h2></td>
									</tr>
									<tr>
										<td><p style="float:left;">To :	</p></td>
										<td><h2 style="text-align:left"><?php echo $where; ?></h2></td>
									</tr>
									<tr>
										<td><p style="float:left;">Departure Date :	</p></td>
										<td><h2 style="text-align:left"><?php echo $ddate; ?></h2></td>
									</tr>
									<?php if (strlen($adate) > 3) { ?>

									<tr>
										<td><p style="float:left;">Arrival Date :	</p></td>
										<td><h2 style="text-align:left"><?php echo $adate; ?></h2></td>
									</tr>
									<?php	} ?>
									<tr>
										<td><p style="float:left;">Total Amount Due :	</p></td>
										<td><h2 style="text-align:left"><?php echo $price; ?></h2></td>
									</tr>
								</table>


							</div>
						</div>
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="payment-info">
									<h3>Personal Information</h3>
									<form>
										<div class="tab-for">
											<h5>EMAIL ADDRESS</h5>
											<input type="text" value="">
											<h5>FIRST NAME</h5>
											<input type="text" value="">
										</div>
									</form>
									<h3 class="pay-title">Credit Card Info</h3>
									<form>
										<div class="tab-for">
											<h5>NAME ON CARD</h5>
											<input type="text" value="">
											<h5>CARD NUMBER</h5>
											<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
										</div>
										<div class="transaction">
											<div class="tab-form-left user-form">
												<h5>EXPIRATION</h5>
												<ul>
													<li>
														<input type="number" class="text_box" type="text" value="6" min="1" />
													</li>
													<li>
														<input type="number" class="text_box" type="text" value="1988" min="1" />
													</li>

												</ul>
											</div>
											<div class="tab-form-right user-form-rt">
												<h5>CVV NUMBER</h5>
												<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
											</div>
											<div class="clear"></div>
										</div>
										<input type="submit" value="SUBMIT">
									</form>
									<div class="single-bottom">
										<ul>
											<li>
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="payment-info">
									<h3>Net Banking</h3>
									<div class="radio-btns">
										<div class="swit">
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Allahabad Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IDBI Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Icici Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Punjab National Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>South Indian Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div></div>
										</div>
										<div class="swit">
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HDFC Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IndusInd Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Syndicate Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Corporation Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>UCO Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Federal Bank</label> </div></div>
											<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>ING Vysya Bank</label> </div></div>
										</div>
										<div class="clear"></div>
									</div>
									<a href="#">Continue</a>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="payment-info">
									<h3>PayPal</h3>
									<h4>Already Have A PayPal Account?</h4>
									<div class="login-tab">
										<div class="user-login">
											<h2>Login</h2>

											<form>
												<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
												<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
												<div class="user-grids">
													<div class="user-left">
														<div class="single-bottom">
															<ul>
																<li>
																	<input type="checkbox"  id="brand1" value="">
																	<label for="brand1"><span></span>Remember me?</label>
																</li>
															</ul>
														</div>
													</div>
													<div class="user-right">
														<input type="submit" value="LOGIN">
													</div>
													<div class="clear"></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<div class="payment-info">

									<h3 class="pay-title">Dedit Card Info</h3>
									<form>
										<div class="tab-for">
											<h5>NAME ON CARD</h5>
											<input type="text" value="">
											<h5>CARD NUMBER</h5>
											<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
										</div>
										<div class="transaction">
											<div class="tab-form-left user-form">
												<h5>EXPIRATION</h5>
												<ul>
													<li>
														<input type="number" class="text_box" type="text" value="6" min="1" />
													</li>
													<li>
														<input type="number" class="text_box" type="text" value="1988" min="1" />
													</li>

												</ul>
											</div>
											<div class="tab-form-right user-form-rt">
												<h5>CVV NUMBER</h5>
												<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
											</div>
											<div class="clear"></div>
										</div>
										<input type="submit" value="SUBMIT">
									</form>
									<div class="single-bottom">
										<ul>
											<li>
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</body>
	</html>
<?php } ?>

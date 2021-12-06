<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">
      <form action="./index.php?content=activate_script" method="post">
        <input type="time" min="17:00" max="22:00" step="900">
      </form>
    </div>
    <div class="col-12 col-sm-6">
      <img src="./img/perzik.jpg" alt="perzik" class="w-75 mx-auto d-block">
    </div>
  </div>
</div>-->
<!-- 
<link rel="stylesheet" href="./css/style.css">

<div id="containerreserver" class="center">
  <div id="res1" class="center">
    <div class="form-outline datepicker">
      <label for="exampleDatepicker1" class="form-label"><h3>Selecteer uw gewenste datum.</h3></label>
      <input type="date" class="form-control" id="exampleDatepicker1">
    </div>
    <br>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selecteer uw gewenste tijd</option>
      <option value="16:00">16:00</option>
      <option value="16:30">16:30</option>
      <option value="17:00">17:00</option>
      <option value="16:00">17:30</option>
      <option value="16:30">18:00</option>
      <option value="17:00">18:30</option>
      <option value="16:00">19:00</option>
      <option value="16:30">19:30</option>
      <option value="17:00">20:00</option>
      <option value="16:00">20:30</option>
      <option value="16:30">21:00</option>
      <option value="17:00">21:30</option>
      <option value="16:30">22:00</option>
    </select>
    <br>
    <br>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selecteer uw gewenste tafel</option>
      <option value="16:00">1</option>
      <option value="16:30">2</option>
      <option value="17:00">3</option>
      <option value="16:00">4</option>
      <option value="16:30">5</option>
      <option value="17:00">6</option>
      <option value="16:00">7</option>
      <option value="16:30">8</option>
      <option value="17:00">9</option>
      <option value="16:00">10</option>
      <option value="16:30">11</option>
      <option value="17:00">12</option>
      <option value="16:30">13</option>
      <option value="16:30">14</option>
    </select>
    <br>
    <br>
    <input type="checkbox" name="agree1" id="" required><p3>  Ik accepteer de privacy overeenkomst</p3></input> <br>
    <input type="checkbox" name="agree2" id="" required><p3>  Ik accepteer de algemene voorwaarden</p3></input><br>
    <input type="checkbox" name="agree3" id=""><p3>  Ik wil de nieuwsbrief ontvangen</p3></input>
    <br>
    <br>
    <button type="button" class="btn btn-dark"><h4>Reserveer!</h4></button>
  </div>
  <div id="res2">
    <br>
    <br>
    <img src="./img/reslayout.png" width="500px">
  </div>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form>
							<div class="form-header">
								<h2>Make your reservation</h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Time</span>
										<input class="form-control" type="time" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">People</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Table</span>
										<select class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" placeholder="Enter your phone number">
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
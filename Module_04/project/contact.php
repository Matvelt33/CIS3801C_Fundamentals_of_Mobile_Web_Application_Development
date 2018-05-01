<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>
		<!-- Custom font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<!-- Latest compiled and minified CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<!-- Custom CSS would go here-->
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<!-- Font Awesome CDN -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
	</head>
	<body>
        
		<div class="bg">
            <div class="container logo d-none d-lg-block">
                <img src="images/logo.png" class="logo-image">
                <h1>TC's Midtown Bar and Grill</h1>
                <img src="images/logo.png" class="logo-image">
            </div> <!-- /logo -->
            
            <div class="container nav-container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand d-lg-none d-none d-sm-block" href="index.html"><img src="images/logo.png" class="d-none d-sm-inline">TC's Midtown Bar and Grill</a>
                    <a class="navbar-brand d-block d-sm-none" href="index.html"><img src="images/logo.png">TC's Midtown</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="mainNav">
						<ul class="navbar-nav nav-justified w-100">
							<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="employees.php">Employees</a></li>
							<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="livemusic.php">Live Music</a></li>
							<li class="nav-item active"><a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a></li>
						</ul>
					</div> <!-- /collapse -->
                </nav> <!-- /navbar -->
            </div> <!-- /container -->
			
			<div class="container main-content">
				<div class="row">
                    <div class="col-lg-8 col-md-7">
                        <h3>Contact</h3>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber" class="col-sm-2 control-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox col-sm-5 col-sm-offset-2">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="approve" name="approve" value="">
                                        <strong>Would you like us to contact you?</strong>
                                    </label>
                                </div>
                                <div class="col-sm-3 col-sm-offset-1">
                                    <select class="form-control">
                                        <option>Phone</option>
                                        <option>Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="feedback" class="col-sm-2 control-label">Your Feedback</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="submit-btn" class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </form>      
                    </div>
                        
                        
			</div> <!-- /container -->
            
            <footer class="container">
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                        <ul class="list-unstyled footer-nav">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="employees.php">Employees</a></li>
                            <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="livemusic.php">Live Music</a></li>
                            <li class="nav-item active"><a class="nav-link" href="contact.php">Contact <span class="sr-only">(contact)</span></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-5">
                        <p>Copyright &copy; 2018 Matthew Velte. All rights reserved.</p>
                        <p>1611 EAST OAK ST. <br/>
                        Conway, AR 72032</p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <p>Follow us on social media</p>
                        <nav class="navbar">
                            <div class="social-media">
                                <a class="btn btn-social-icon btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-youtube" href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </nav>
                    </div>
                </div> <!-- /row -->
            </footer>
		</div> <!-- /bg -->
		
		
		<!-- Javascript Links -->
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>
	</body>
</html>
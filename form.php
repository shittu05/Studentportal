<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Student Portal web Application</title>
	
</head>

<body>
	<div id="container">
		<header>
			<nav>
				<div class="siteTitle">
					<h1 class="siteName">Ustacky</h1>
					<a href="#">Portal</a>
					<a href="dashboard.php">Dashboard</a>
				</div>
				<div class="getStarted">Get Started</div>
				
			</nav>
		</header>
	</div>
	<h1>Student Portal Form</h1>
	<h3 class="head_title">Personal Information</h3>
	<form action="dashboard.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		    <label for="exampleFormControlFile1">Upload image</label>
		    <input type="file" class="form-control-file"  name="image">
	    </div>
	  	<div class="form-row">
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="firstName">First Name</label>
     				<input type="text" class="form-control" placeholder="First name" name="firstname">
     			</div>
    		</div>

    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="middleName">Middle Name</label>
     				<input type="text" class="form-control" placeholder="Middle name" name="middlename">
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="lastName">Last Name</label>
     				<input type="text" class="form-control" placeholder="Last name" name="lastname">
    			</div> 
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="email">Email</label>
     				<input type="email" class="form-control" placeholder="Email" name="email">
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="date">Date</label>
     				<input type="date" class="form-control" placeholder="Date" name="date">
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="phoneNumber">Phone Number</label>
     				<input type="number" class="form-control" placeholder="phone Number" name="phone">
     			</div>
    		</div>

    		<div class="col">
    			<div class="form-group col-md-6">
    				<div class="form-check form-check-inline">

    					<label class="form-check-label" for="gender">Gender</label><br>
						<input class="form-check-input" type="radio" name="gender" id="male" value="male"> Male
						<input class="form-check-input" type="radio" name="gender" id="female" value="female"> Female

					</div>
    			</div>	
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="phoneNumber">Address</label>
     				<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="address"></textarea>
     			</div>
    		</div>
    		<h3 class="title">Academic related Activities</h3>
			<div class="col">
    			<div class="form-group col-md-6">
      				<label for="kin">Next of kin</label>
     				<input type="text" class="form-control" placeholder="Next of Kin" name="kin">
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="score">Jamb Score</label>
     				<input type="text" class="form-control" placeholder="Jamb Score" name="score">
     			</div>
    		</div>
  		</div>
  		<div class="submitButton">
			<button class="btn">Submit</button>
		</div>
  		
	</form>
	

	<div class="footer">
		<footer>
			<p class="footer-text">All right reserved @ Ustacky 2021</p>
		</footer>
	</div>
	




	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
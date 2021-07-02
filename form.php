<?php 


$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

$firstnameErr = $lastnameErr = $middlenameErr = $emailErr = $genderErr = $addressErr = $scoreErr = $dateErr = $phoneErr = $kinErr = $imageErr = $mssg = "";

if (isset($_POST['register'])) {

	
	$firstname = $lastname = $middlename = $email = $gender = $address = $score = $date = $phone = $kin = $image = "";

	if(empty($_FILES['image']['name'])) {
        $imageErr = "Upload file";  
    } else {
    	$image = $_FILES['image']['name'];
    }

	if (empty($_POST["firstname"])) {
    	$firstnameErr = "First Name is required";
	 	} else {
	  	$firstname = $_POST['firstname'];
 	}
 	if (empty($_POST["lastname"])) {
    	$lastnameErr = "Last Name is required";
	 	} else {
	  	$lastname = $_POST['lastname'];
 	}
 	if (empty($_POST["middlename"])) {
    	$middlenameErr = "Middle Name is required";
	 	} else {
	  	$middlename = $_POST['middlename'];
 	}
 	if (empty($_POST["email"])) {
    	$emailErr = "Email is required";
	 	} else {
	  	$email = $_POST['email'];
 	}
 	if (empty($_POST["date"])) {
    	$dateErr = "Date is required";
	 	} else {
	  	$date = $_POST['date'];
 	}
 	if (empty($_POST["phone"])) {
    	$phoneErr = "Phone is required";
	 	} else {
	  	$phone = $_POST['phone'];
 	}
 	if (empty($_POST["address"])) {
    	$addressErr = "Address is required";
	 	} else {
	  	$address = $_POST['address'];
 	}
	
	if(!empty($_POST['gender'])) {
        $gender = $_POST['gender'];  
    }
    if (empty($_POST["score"])) {
    	$scoreErr = "Score is required";
	 	} else {
	  	$score = $_POST['score'];
 	}
 	if (empty($_POST['kin'])) {
        $kinErr = "Kin is required";  
    } else {
    	$kin = $_POST['kin'];
    }

	$target = "images/". $image; 

    if (empty($firstname || $lastname || $middlename || $email || $gender || $score)) {
        header("Location: form.php");

    }  else {

        $sql = mysqli_query($conn, "insert into users
        (users_id, userprofile_image, user_first, user_middle, user_last, user_email, user_date, user_phone, user_address, user_kin, user_score, user_gender, user_status)
        values ('', '$target', '$firstname', '$middlename', '$lastname', '$email', '$date', '$phone', '$address', '$kin', '$score', '$gender', 'Undecided')"
        );

     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "uploaded succesfully";
        } else {
            $msg = "Problem uploading image";
        }

        $mssg =  "<h4 class='btn btn-success'>Form details Submitted</h4>";

    }



}



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Student Portal web Application</title>
	<style type="text/css">
		.error {
			color: red;
		}
        @media only screen and (max-width: 650px) {
            .getStarted {
                display: none;
            }
        }
	</style>
	
</head>

<body>
	<div id="container">
		<header>
			<nav>
				<div class="siteTitle">
					<h1 class="siteName">Ustacky</h1>
                    <a href="index.html">Home</a>
					<a href="#">Portal</a>
					<a href="dashboard.php">Dashboard</a>
				</div>
				<div class="getStarted">Get Started</div>
				
			</nav>
		</header>
	</div>
	<h1>Student Portal Form</h1>

	<h3 class="head_title">Personal Information</h3>
    <?php echo $mssg; ?>
    
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		    <label for="exampleFormControlFile1">Upload image</label>
		    <input type="file" class="form-control-file"  name="image">
	    </div>
	  	<div class="form-row">
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="firstName">First Name</label>
     				<input type="text" class="form-control" placeholder="First name" name="firstname">
     				<span class="error">* <?php echo $firstnameErr;?></span>
     			</div>
    		</div>

    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="middleName">Middle Name</label>
     				<input type="text" class="form-control" placeholder="Middle name" name="middlename">
                    <span class="error">* <?php echo $middlenameErr;?></span>
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="lastName">Last Name</label>
     				<input type="text" class="form-control" placeholder="Last name" name="lastname">
                    <span class="error">* <?php echo $lastnameErr;?></span>
    			</div> 
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="email">Email</label>
     				<input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="error">* <?php echo $emailErr;?></span>
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="date">Date</label>
     				<input type="date" class="form-control" placeholder="Date" name="date">
                    <span class="error">* <?php echo $dateErr;?></span>
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="phoneNumber">Phone Number</label>
     				<input type="number" class="form-control" placeholder="phone Number" name="phone">
                    <span class="error">* <?php echo $phoneErr;?></span>
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
                    <span class="error">* <?php echo $addressErr;?></span>
     			</div>
    		</div>
    		<h3 class="title">Academic related Activities</h3>
			<div class="col">
    			<div class="form-group col-md-6">
      				<label for="kin">Next of kin</label>
     				<input type="text" class="form-control" placeholder="Next of Kin" name="kin">
                    <span class="error">* <?php echo $kinErr;?></span>
     			</div>
    		</div>
    		<div class="col">
    			<div class="form-group col-md-6">
      				<label for="score">Jamb Score</label>
     				<input type="text" class="form-control" placeholder="Jamb Score" name="score">
                    <span class="error">* <?php echo $scoreErr;?></span>
     			</div>
    		</div>
  		</div>
  		<div class="submitButton">
			<button class="btn" name="register">Submit</button>
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
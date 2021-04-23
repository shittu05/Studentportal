<?php 

	$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Student Portal web Application</title>
</head>
<body>
	<div id="container">
		<header>
			<nav>
				<div class="siteTitle">
					<h1 class="siteName">Ustacky</h1>
					<a href="form.php">Portal</a>
					<a href="dashboard.php">Dashboard</a>
					<a href="profile.php">Student Information</a>
				</div>
				<div class="getStarted">Get Started</div>
				
			</nav>
		</header>
	</div>


	<?php 

		$data = "SELECT * FROM users WHERE users_id = {$_GET['users_id']};";

		$result = mysqli_query($conn, $data);

		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0 ) {

			while ($row = mysqli_fetch_assoc($result)) {
				?>

			<div class="profilePage">
				 <div class="section">
				 	<div class="sectionOne"> 
				 		
				 		<img src="images/<?=$row['userprofile_image']?>">
				 		<p>Name: <?= $row['user_first']; ?> <?= $row['user_last']; ?> </p>
				 	</div>
				 	<div class="sectionTwo">
				 		<h3 class="title">Personal Information</h3>

				 		<p> Email : <?= $row['user_email']; ?> </p>
				 		<p> Gender : <?= $row['user_gender']; ?> </p>
				 		<p> Phone Number : <?= $row['user_phone']; ?> </p>
				 		<p> Date of birth : <?= $row['user_date']; ?> </p>
				 		<p> Address : <?= $row['user_address']; ?> </p>

				 	</div>

			
				</div>
				<div>
					<h3 class="title">Academic related information</h3>
					<p>Next of kin: <?= $row['user_kin']; ?></p>
					<p>Jamb Score: <?= $row['user_score']; ?></p>
					<input type="checkbox" name="user_status" value="Admitted" <?php if( isset( $_GET['user_status'] ) ){ ?> checked="checked" <?php } ?> />Admitted
				</div>
			</div>


			<?php } ?>

		<?php } ?>

		
	


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


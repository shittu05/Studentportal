<?php 



$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

$image = $_FILES['image']['name'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$email = $_POST['email'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$kin = $_POST['kin'];
$score = $_POST['score'];

$target = "images/". $image;





$sql = mysqli_query($conn, "insert into users
	(users_id, userprofile_image, user_first, user_middle, user_last, user_email, user_date, user_phone, user_address, user_kin, user_score, user_gender, user_status)
	values ('', '$target', '$firstname', '$middlename', '$lastname', '$email', '$date', '$phone', '$address', '$kin', '$score', '$gender', 'admitted')"
	);

 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
 	$msg = "uploaded succesfully";
	} else {
		$msg = "Problem uploading image";
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
</head>
<body>
	<div id="container">
		<header>
			<nav>
				<div class="siteTitle">
					<h1 class="siteName">Ustacky</h1>
					<a href="form.php">Portal</a>
					<a href="dashboard.php">Dashboard</a>
				</div>
				<div class="getStarted">Get Started</div>
				
			</nav>
		</header>
	</div>
	<table class="table table-dark">
		<thead>
		    <tr> 

			    <th scope="col">S/N</th>
			    <th scope="col">Name</th>
			    <th scope="col">Gender</th>
			    <th scope="col">Jamb Score</th>
			    <th scope="col">Admission Status</th>
			    <th scope="col">Action</th>
		    </tr>
		</thead>
		<tbody>
			<a href="">	<i></i></a>

		<?php

			$data = "SELECT * FROM users;";
			$result = mysqli_query($conn, $data);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {

				while ($row = mysqli_fetch_assoc($result)) {

					?>
					<tr>
						<td><?= $row['users_id']; ?></td>
						<td><?= $row['user_first']; ?> <?= $row['user_last']; ?></td>
						<td><?= $row['user_gender']; ?></td>
						<td><?= $row['user_score']; ?></td>
						<td><?= $row['user_status']; ?></td>

						<td><a href="profile.php?users_id=<?=$row['users_id']; ?>"><button class="btn btn">Profile</button></a></td>
					</tr>

				<?php } ?>

			<?php } ?>

		
		</tbody>
	</table>
	

	
	
		

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


<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

$updatedStatus = $_GET['statusChange'];
$id = $_SESSION['ss_id'];

$sql = "UPDATE users SET user_status='".$updatedStatus."' WHERE users_id = '".$id."'";
mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Student Portal web Application</title>
</head>
<body>
	


	<?php 
		$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

		$data = "SELECT * FROM users WHERE users_id = $id;";

		$result = mysqli_query($conn, $data);

		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0 ) {

			while ($row = mysqli_fetch_assoc($result)) {
				?>

			<div class="profilePage" id="newStatus">
				 <div class="section">
				 	<div class="sectionOne"> 
				 		
				 		<img src="<?=$row['userprofile_image']?>">

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
					<div class="form-check">
						
						<?php echo $updatedStatus; ?>
						
					</div>
					
				</div>
			</div>


			<?php } ?>

		<?php } ?>


	
</body>


	
</script>

</html>


<?php 


$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Student Portal web Application</title>
	<style type="text/css">
		form {
			padding: 15px 70px;
			justify-content: center;
		}
		@media only screen and (max-width: 650px) {
            .getStarted {
                display: none;
            }
            .profile-btn {
            	text-align: center;
            }
            .search-field {
            	display: block;
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
					<a href="form.php">Portal</a>
					<a href="#">Dashboard</a>
				</div>
				<div class="getStarted">Get Started</div>
				
			</nav>
		</header>
	</div>
	<form class="row g-3">
		<div class="form-row search-field">
			<div class="col">
				<div class="form-group col-sm-12">
					<input type="text" class="form-control" placeholder="Search By Name" name="search" id="searchName" >
				</div>
			</div> 
			<div class="col">
				<div class="form-group col-md-12">
					<select class="form-select form-control" aria-label="Default select example" id="admission">
						<option selected>Search By Admission</option>
						<option value="admitted">Admitted</option>
						<option value="Undecided">Undecided</option>
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group col-md-12">
					<select class="form-select form-control" aria-label="Default select example" id="gender">
						<option selected>Search By Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
			</div>
	    </div>
	</form>
	<table class="table table-hover table-stripped table-light" id="tableData">
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

							<td><a href="profile.php?users_id=<?=$row['users_id']; ?>"><button class="btn"><i class="fa fa-folder"></i></button></a></td>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$("#searchName").keyup(function(){
				var search = $(this).val();
				$.ajax({
					url: 'action.php',
					method: 'post',
					data: {query:search},
					success: function (response) {
						$("#tableData").html(response);
					}
				});
			});
			$("#admission").change(function(){
				var search = $(this).val();
				$.ajax({
					url: 'admissionsearch.php',
					method: 'post',
					data: 'request='+search,
					success: function (data) {
						$("#tableData").html(data);
					}
				});
			});
			$("#gender").change(function(){
				var search = $(this).val();
				$.ajax({
					url: 'gendersearch.php',
					method: 'post',
					data: 'request='+search,
					success: function (data) {
						$("#tableData").html(data);
					}
				});
			});

		});
	</script>
	
</body>

</html>


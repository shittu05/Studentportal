<?php

	if ($_POST['request']) {

		$request = $_POST['request'];

		$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

		$query = "SELECT * FROM users WHERE user_gender = '$request' ";

		$result = mysqli_query($conn, $query);

		if ($result ->num_rows > 0) {
		echo "<thead>";
				echo "<tr>" ;
		
					echo "<th >S/N</th>";
					echo "<th >Name</th>";
					echo "<th >Gender</th>";
					echo "<th >Jamb Score</th>";
					echo "<th >Admission Status</th>";
					echo "<th >Action</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = $result -> fetch_assoc()) { 
				
					echo "<tr>";
					echo	"<td>".$row['users_id']." </td>";
					echo 	"<td>".$row['user_first']." " .$row['user_last']." </td>";
					echo	"<td>".$row['user_gender']." </td>";
					echo	"<td>".$row['user_score']." </td>";
					echo	"<td>".$row['user_status']." </td>";  
							 
					echo "</tr>";
				} 
					echo "</tbody>";
					
		} else {

		echo "<h3>No record found</h3>";

		}
	}

	



?>
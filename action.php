<?php

	$conn = mysqli_connect('localhost', 'root', '' , 'schoolportal');

	if(isset($_POST['query'])) {
		$search = $_POST['query'];
		$stmt = $conn -> prepare("SELECT * FROM users WHERE user_first LIKE CONCAT('%',?, '%') OR user_last LIKE CONCAT('%',?, '%')");
		$stmt -> bind_param("ss", $search, $search);

	} else {
		$stmt = $conn -> prepare("SELECT * FROM users");
	}

	$stmt -> execute();
	$result = $stmt->get_result();

	if ($result ->num_rows > 0) {
		$output = "<thead>
						<tr> 
		
							<th >S/N</th>
							<th >Name</th>
							<th >Gender</th>
							<th >Jamb Score</th>
							<th >Admission Status</th>
							<th >Action</th>
						</tr>
					</thead>
					<tbody>";
					while ($row = $result -> fetch_assoc()) { 
						$output .= "
							<tr> 
							<td>".$row['users_id']." </td>
							<td>".$row['user_first']." " .$row['user_last']." </td>
							<td>".$row['user_gender']." </td>
							<td>".$row['user_score']." </td>
							<td>".$row['user_status']." </td>  
							</tr>";
					} 
					$output .= "</tbody>";
					echo $output;
	} else {
		echo "<h3>No record found</h3>";
	}


?>
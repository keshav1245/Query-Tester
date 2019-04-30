<?php

$db = 'finalWebAssignment_';
$admin = mysqli_connect('localhost','root','',$db.'admin');
session_start();
if (isset($_POST['database'])) {
	$conn = mysqli_connect('localhost','root','',$db.$_POST["database"]);
	if(!$conn){
		echo "Connection with database failed ! ".mysqli_connect_errno();
	}else{

		$username = mysqli_real_escape_string($conn,$_POST['user']);
		$password = mysqli_real_escape_string($conn,$_POST['pass']);
		$query = mysqli_real_escape_string($conn,$_POST['query']);

		if(empty($username)){
			echo "Username must be filled !";
		}else if(empty($password)){
			echo "Password not to be empty !";
		}elseif (empty($query)) {
			echo "query Box empty !";
		}else{
			$_SESSION['database'] = $_POST['database'];
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $password;
			$_SESSION['query'] = $query;


			$query1 = "SELECT `username`, `password` FROM `admin` WHERE username = '$username' and password = '$password' ";
			$result1 = mysqli_query($admin,$query1);

			if(mysqli_num_rows($result1)>0){
				$result2 = mysqli_query($conn,$query);

				if($result2){
					$all_property = array();
					echo "<table border = '1' >";
					echo "<tr>";
					while($property = mysqli_fetch_field($result2)){
						echo "<th>".$property->name.'</th>';
						array_push($all_property, $property->name);
					}
					echo "</tr>";
					while($row = mysqli_fetch_array($result2)){
						echo '<tr>';
						foreach ($all_property as $items) {
							echo "<td>".$row[$items].'</td>';
						}
						echo "</tr>";
					}
					echo "</table>";

				}else{
					echo mysqli_error($conn);
				}

			}else{
				echo "User Does not Exist !";
			}

		}


	}




}else{
	
}




?>
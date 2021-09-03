<?php


include '../admin/DbConnection.php';
$sql="SELECT * FROM `posts`";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
					echo "not connecting";
				}
				else{
				
					mysqli_stmt_execute($stmt);	
				$posts=mysqli_stmt_get_result($stmt);
				}


?>
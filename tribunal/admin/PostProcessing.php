<?php

include 'DbConnection.php';
echo 'connected';
if(isset($_POST['submitbtn'])){
	$post_file=$_FILES['file']['name'];
$post_file_temp=$_FILES['file']['tmp_name'];

$karichu=mysqli_real_escape_string($conn,$_POST['category']);
$sql="INSERT INTO `posts`(`file_path`, `category`) VALUES (?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo 'error connecting';
}
else{
    $post_location='post_folder/'.$post_file;
    move_uploaded_file($post_file_temp,$post_location);
	mysqli_stmt_bind_param($stmt, "ss" ,$post_file,$karichu);
	mysqli_stmt_execute($stmt);
	
}
}
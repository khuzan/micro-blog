<?php 
session_start();
include '../../connection/connection.php';
include '../class/class_users.php';




if (isset($_POST['submit'])) {
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$post = $_POST['mypost'];
	$date = date('M.d.Y');
	$query = "INSERT INTO contents (post,dates,images) VALUES ('{$post}','{$date}','{$image}')";
	$db->exec($query);
	move_uploaded_file($_FILES['image']['tmp_name'], $target); 

	echo "<script type='text/javascript'>
			      alert('Post Successfully!');
				  window.location = '../../pages/admin.php';
				  </script>";


}
else{
	echo "fail";
}

 ?>
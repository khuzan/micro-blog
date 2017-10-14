<?php 
session_start();
include '../../connection/connection.php';
include '../class/class_users.php';
global $db;



	if (isset($_POST['update'])) {
		move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
		$target = "images/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];
		echo $image;
		$post = $_POST['post'];
		$postid = $_POST['id'];
		$query = $db->prepare('UPDATE contents SET 
							post = :post
							WHERE id = :postid');
		$query->bindValue('postid',$postid);
		$query->bindValue('post',$post);
		if ($query->execute()) {
			echo "<script type='text/javascript'>
			      alert('Update Successfully!');
				  window.location = '../../pages/admin.php';
				  </script>";
			echo "success!";
		}
	

		

		
		
		
	}
	
	
 ?>
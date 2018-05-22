<?php 
	session_start();
	include '../../method/class/class_users.php';
	include '../../connection/connection.php';
	global $db;

	$userObj = new Contents;
	$getimg = $userObj->getimage();
	$img = $getimg['images'];

	if (isset($_GET['action']) && $_GET['action'] == 'delete'){
	$query = $db->prepare("DELETE FROM contents WHERE id = :postid");
	$query->bindValue('postid',$_GET['postid']);
		
	$query->execute();
	if (empty($img)) {
			unlink("images/".$_GET['picture']);
		}
	echo "<script>
			alert('Delete Successfully!');
			window.location='../../pages/admin.php'
		  </script>";


	}


 ?>
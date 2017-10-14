<?php
	session_start();
	include '../../connection/connection.php';
	include '../class/class_users.php';

	$userObj = new Users;

		// $password = md5($user_password);

		
	
		if(isset($_POST['btn_login'])) {

			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			// LOGIN ADMIN
			if ($userObj->finduser($email,$password)) {

				if ($email == 'admin@mail.com') {
					$stmt = $db->prepare("SELECT * FROM administrator WHERE email=:email");
					$stmt->execute(array(":email"=>$email));
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					$count = $stmt->rowCount();
					if($row['password']==$password){

						$_SESSION['user_session'] = $row['id'];
						$_SESSION['admin_name'] = $row['username'];

						echo "admin"; // log in to admin
						
					}
				}
			else{
				// LOGIN USERS
				$stmt = $db->prepare("SELECT * FROM users WHERE email=:email");
				$stmt->execute(array(":email"=>$email));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$count = $stmt->rowCount();
					if($row['password']==$password){
						$_SESSION['user_session'] = $row['id'];
						$_SESSION['user_uname'] = $row['username'];
						
						echo "home"; // log in to home
						
					}
				}
			}else{
				echo "fail";// wrong details 
			}
		}

			
		

		
		
?>
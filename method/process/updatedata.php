<?php 
session_start();
include '../../connection/connection.php';
include '../class/class_users.php';
if (isset($_POST['update'])) {
	$userObj = new Contents;
	$result = $userObj->postDatabyid($_POST['update']);

	$mypost = "<table class='table table-bordered table-content'>
		    	<tr>
		    	<input type='hidden' name='id' value='".$result->id."'>
					 <td width='450'>
					    <i class='fa fa-calendar'>
					    ".$result->dates."
					  </td>
				</tr>
				<tr>
					  <td colspan='3'>
					    <div class='form-group'>
					      <textarea class='form-control' rows='5' name='post'>".$result->post."</textarea>
					    </div>
					    	<img class='img-responsive' name='oldimg'  src='../method/process/images/".$result->images."'>
					    	<label for='uploadBtn' class='uploadBtnLabel'>
							<i class='fa fa-picture-o'></i> Upload image</label>
							<input type='file' name='image' id='uploadBtn'>
					  </td>
				</tr>
			</table>";
			echo $mypost;

}
 ?>
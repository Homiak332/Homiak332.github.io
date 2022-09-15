<?php session_start(); 
require_once("connect.php"); ?>	 
<?php
	$UserAdmin=$_POST['UserAdmin'];
	$UserLogin=$_POST['UserLogin'];
	$UserPassword=md5($_POST['UserPassword']);
	if (isset($_POST['log_in'])) {
		if (!empty($_POST['UserLogin']) && !empty($_POST['UserPassword'])) {
			$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `UserLogin` = '$UserLogin' AND `UserPassword` = '$UserPassword'");
		if (mysqli_num_rows($check_user) > 0){
			$user = mysqli_fetch_assoc($check_user);
			$_SESSION['user'] = [
				"UserID" => $user['UserID'],
				"UserName" => $user['UserName'],
				"UserSurname" => $user['UserSurname'],
				"UserMiddleName" => $user['UserMiddleName'],
				"UserLogin" => $user['UserLogin'],
				"UserEmail" => $user['UserEmail'],
				"UserAdmin" => $user['UserAdmin'],
			];
			header('Location: ../views/Auth.php');
		} else{
			$_SESSION['message'] = 'Неверный логин или пароль';
			header('Location: ../views/log.php');
		}
	} else{
		$_SESSION['message'] = 'Имеются пустые поля';
		header('Location: ../views/log.php');
	}
}
	if (isset($_GET['uid'])) {
					$UserID = $_GET['uid'];
					$UserName = $_GET['first_name'];
					$UserSurname= $_GET['last_name'];
			$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `UserID` = '$UserID' ");
			if (mysqli_num_rows($check_user) < 1){
				$sql = mysqli_query($connect, "INSERT INTO `users`(`UserID`, `UserName`, `UserSurname`, `UserMiddleName`, `UserLogin`, `UserPassword`, `UserPassword_Confirm`, `UserEmail` , `UserAdmin`) VALUES ('$UserID', '$UserName','$UserSurname', 'null' , 'null', 'null', 'null', 'null','0')"); 
				$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `UserID` = '$UserID' ");
			} 
			$user = mysqli_fetch_assoc($check_user);
			$_SESSION['user'] = [
				"UserID" => $user['UserID'],
				"UserName" => $user['UserName'],
				"UserSurname" => $user['UserSurname'],
				"UserMiddleName" => $user['UserMiddleName'],
				"UserLogin" => $user['UserLogin'],
				"UserEmail" => $user['UserEmail'],
				"UserAdmin" => $user['UserAdmin'],
			];
			header('Location: ../views/Auth.php');	
	}
?>
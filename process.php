<?php
	require './database/cartDb.php';
	session_start();

	if(isset($_POST['login-submit'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];

		// if(in_array($account,))

		if($user == 'admin' && $pass == 'admin') {
			$_SESSION['user_session'] = 'admin';
			header('location: admin_page.php');
		}
		else {
			$_SESSION['user_session'] = $user;
			header('location:index.php');
		}
	}
	else {
		/* -- Khi truy cập vào các file khác thì sẽ bị điều hướng đến trang index -- */
		// header('location: index.php');
		// exit();
	}

	echo "<pre>";
	print_r($account);
	echo "</pre>";

?>
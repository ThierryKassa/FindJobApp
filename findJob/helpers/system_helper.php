<?php
function redirect( $page = FALSE, $message= NULL, $messageType = NULL){
	if (is_string($page)) {
		$location = $page;
	} else{
		$location = $_SERVER['SRCIPT_NAME'];
	}

	if ($message!= NULL) {
		$_SESSION['message'] = $message;
	} 
	if ($messageType!= NULL) {
		$_SESSION['messageType'] = $messageType;
	}

	header('Location:'.$location);
	exit;
	
}

function displayMessage(){
	if (!empty($_SESSION['message'])) {

		$message = $_SESSION['message'];
		if (!empty($_SESSION['messageType'])) {
			$messageType = $_SESSION['messageType'];

			if ($messageType == 'error') {
				echo '<div class="alert alert-dismissible alert-danger">
						<strong>'.$message.'</strong>
						</div>';
			} else{
				echo '<div class="alert alert-dismissible alert-success">
						<strong>'.$message.'</strong>
						</div>';
			}
		}

		unset($_SESSION['message']);
		unset($_SESSION['messageType']);
	} 
}
?>
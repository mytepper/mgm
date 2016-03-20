<?php
if($message){
	if(is_object($message)) {
		$alert = Session::get('message');
		$message = (array) $alert;
		echo '<div class="alert alert-danger">';
		echo '<ul>';
			foreach ($message as $key => $error ){
				echo '<li>';
					print_r($key);
					print_r($error);
				echo '</li>';
			}
		echo '</ul>';
		echo '</div>';
	} else {
		echo '<div class="alert alert-success">';
		echo '<h4>' . $message . '</h4>';
		echo '</div>';
	}
}
?>

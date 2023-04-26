<?php
	$hash = password_hash('Parola', PASSWORD_DEFAULT);
	if (password_verify('Parola', $hash)) {
		echo 'Password is valid!';
	} else {
		echo 'Invalid password.';
	}
?>
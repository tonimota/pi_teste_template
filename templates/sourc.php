<?php
$logins = array('Toni' => '1234',
				'Julia'=> '546',
				'Marcelo' => '987');

if (isset($_POST['btn_send'])) {
	if (isset($logins[$_POST['name']])) {
		if ($logins[$_POST['name']] == $_POST['password']) {
			include('bienvienido.php');			
		} else {
			$msg = 'Usúario ou senha inválido';
			include('index.php');
		}
	} else {
		$msg = 'Usúario ou senha inválido';
		include('index.php');
	}
}
else {
	include('index.php');
}

?>
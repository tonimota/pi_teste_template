<?php
	$logins = array('Toni' => '1234',
					'Julia'=> '546',
					'Marcelo' => '987');

	if (isset($_POST['btn_send'])) {
		if (isset($logins[$_POST['name']])) {
			if ($logins[$_POST['name']] == $_POST['password']) {
				include('templates/bienvienido.html');			
				}
		}		
	}
	else {
		
		$msg = 'Usúario ou senha inválido';
		include('templates/index.html');
	}
?>
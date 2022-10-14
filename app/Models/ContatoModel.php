<?php
	namespace Models;

	class ContatoModel
	{
		public static function enviarFormulario(){
			$mail = new \Email('vps.outlook.com','testes@outlook.com','senha','NomeDoUsuario');
			$mail->addAdress('testesEnvio@outlook.com','NomeDoUsuario');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}

	}

?>
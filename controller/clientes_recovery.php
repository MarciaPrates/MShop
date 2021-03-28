<?php 

$smarty = new Template();


$cliente = new Clientes();

if(isset($_POST['cli_email'])){
	$cliente->setCli_email($_POST['cli_email']);

	if($cliente->GetClienteEmail($cliente->getCli_email()) > 0){
		$novasenha = Sistema::GerarSenha();
		$cliente->SenhaUpdate($novasenha, $cliente->getCli_email());

		//enviar o email para o cliente
		$email = new EnviarEmail();
     	$assunto = 'Nova Senha: ' . Config::SITE_NOME;
     	$msg = "<h3>Olá caro cliente!</h3> <br><br>
     		<h4>Uma nova senha foi solicitada por você, acesse o site " . Config::SITE_NOME ." e faça login.</h4>";
     	$msg .= "<br>Sua nova senha é: " . "<b>" . $novasenha ."</b>";
	 	$destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
     	$email->Enviar($assunto, $msg, $destinatarios);

     	echo "<script>alert('Foi enviada uma nova senha de acesso em seu email de cadastro!'); window.location = 'login';</script>";


	}else{
		echo "<script>alert('Este email não está cadastrado na loja!'); window.location = 'clientes_recovery';</script>";
	}

}else{
	$smarty->display('clientes_recovery.tpl');
}




 ?>
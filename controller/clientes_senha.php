<?php 

$smarty = new Template();

Login::MenuCliente();


if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){
	$senha_atual = md5($_POST['cli_senha_atual']);
	$senha_nova = $_POST['cli_senha'];
	$email = $_SESSION['CLI']['cli_email'];

	if($senha_atual != $_SESSION['CLI']['cli_pass']){
		echo "<script>alert('A senha atual está incorreta!');</script>";
		Rotas::Redirecionar(1, Rotas::pag_CLienteSenha());
		exit();
	}


	//NÃO ESTÁ MOSTRANDO O ALERTA DA SENHA ALTERADA.
	$clientes = new Clientes();
	$clientes->SenhaUpdate($senha_nova, $email);
	//Rotas::Redirecionar(0, Rotas::pag_MinhaConta());

	echo "<script>alert('A senha foi alterada com sucesso!');</script>";

	$login = new Login();
    $login->GetLogin($email, $senha_nova);
    Rotas::Redirecionar(1, Rotas::MinhaConta());

}else{
	$smarty->display('cliente_senha.tpl');
}




 ?>
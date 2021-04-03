<?php

if (!Login::Logado()) {
	Login::AcessoNegado();
	//Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
	header("Location: " .Rotas::pag_ClienteLogin());
					die();
}else{

	if(isset($_SESSION['PRO'])) {

	if(!isset($_SESSION['PED']['frete'])){

		echo "<script>alert('Selecione o frete desejado para prosseguir!');</script>";
		Rotas::Redirecionar(1, Rotas::pag_Carrinho().'#dadosfrete');
		

	}
		

	$smarty = new Template();

	$carrinho = new Carrinho();

		$ref_cod_pedido = date("ymdHms") . $_SESSION['CLI']['cli_id'];

		if (!isset($_SESSION['PED']['pedido'])) {
			$_SESSION['PED']['pedido'] = $ref_cod_pedido;
	
		}

		if (!isset($_SESSION['PED']['ref'])) {
			$_SESSION['PED']['ref'] = $ref_cod_pedido;
			
		}


	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
	$smarty->assign('SITE_NOME', Config::SITE_NOME);
	$smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
	$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_CLientePedidos());
	//$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());

	$smarty->assign('TEMA', Rotas::get_SiteTEMA());

	$smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
	$smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
	
	$pedido = new Pedidos();
	$cliente = $_SESSION['CLI']['cli_id'];
	$cod = $_SESSION['PED']['pedido'];
	$ref = $_SESSION['PED']['ref'];
	$frete = $_SESSION['PED']['frete'];




	$email = new EnviarEmail();

	$destinatarios = array(Config::SITE_EMAIL_ADM, $_SESSION['CLI']['cli_email']);
	$assunto = 'Pedido M-Shop - ' . Sistema::DataAtualBR();
	$msg = $smarty->fetch('email_compra.tpl');

	$email->Enviar($assunto, $msg, $destinatarios);

	if($pedido->PedidoGravar($cliente, $cod, $ref, $frete)) {
		$pedido->LimparSessoes();
	}


	$smarty->display('pedido_finalizar.tpl');

}else{
	echo '<h4 class="alert alert-danger text-center mt-5 mb-5"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}
}




/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>
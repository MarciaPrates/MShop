<?php

if (!Login::Logado()) {
	Login::AcessoNegado();
	Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
}else{

	if(isset($_SESSION['PRO'])) {


		

	$smarty = new Template();

	$carrinho = new Carrinho();

		$ref_cod_pedido = date("Y-m-d H:i:s") . $_SESSION['CLI']['cli_id'];

		if (!isset($_SESSION['PED']['pedido'])) {
			$_SESSION['PED']['pedido'] = $ref_cod_pedido;
	
		}

		if (!isset($_SESSION['PED']['ref'])) {
			$_SESSION['PED']['ref'] = $ref_cod_pedido;
			
		}


	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	//$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());
	
	$pedido = new Pedidos();
	$cliente = 1;
	$cod = $_SESSION['PED']['pedido'];
	$ref = $_SESSION['PED']['ref'];



	if($pedido->PedidoGravar($cliente, $cod, $ref)) {
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
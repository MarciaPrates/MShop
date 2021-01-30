<?php

class Carrinho {
	private $total_valor, $total_peso, $itens = array();

	function GetCarrinho($sessao = NULL) {

		$i = 1;
		$sub = 1.00;
		$peso = 0;

		
		foreach ($_SESSION['PRO'] as $lista) {
			$sub = ($lista['VALOR_US'] * $lista['QTD']);
			$this->total_valor += $sub;

			$this->itens[$i] = array(

				'pro_id' => $lista['ID'],
				'pro_nome' => $lista['NOME'],
				'pro_valor' => $lista['VALOR'], // 1.000,99
				'pro_valor_us' => $lista['VALOR_US'], //1000.99
				'pro_peso' => $lista['PESO'],
				'pro_qtd' => $lista['QTD'],
				'pro_img' => $lista['IMG'],
				'pro_link' => $lista['LINK'],
				'pro_subTotal' => Sistema::MoedaBR($sub),
				'pro_subTotal_us' => $sub

			);
			$i++;

		}

		/*Verificando quantidade de itens no carrinho
		*/
		if (count($this->itens) > 0) {
			return $this->itens;
		} else {
			echo '<h4 class="alert alert-danger text-center"> Não há produtos no carrinho </h4>';

		}

	}

	function GetTotal() {
		return $this->total_valor;
	}

	function GetPeso() {
		return $this->total_peso;
	}

	function CarrinhoADD($id) {
		$produtos = new Produtos();
		$produtos->GetProdutosID($id);
		foreach ($produtos->GetItens() as $pro) {
			$ID = $pro['pro_id'];
			$NOME = $pro['pro_nome'];
			$VALOR_US = $pro['pro_valor_us'];
			$VALOR = $pro['pro_valor'];
			$PESO = $pro['pro_peso'];
			$QTD = 1;
			$IMG = $pro['pro_img_p'];

			/*$LINK serve para chamar a pagina de produtos_info,passando a ID e o Slug
			*/
			$LINK = Rotas::pag_ProdutosInfo() . '/' . $ID . '/' . $pro['pro_slug'];

			/*Cuida da ação do botão de ADD produto no carrinho, via POST (Via GET seria através da URL)
			*/
			$ACAO = $_POST['acao'];
		}

}

?>
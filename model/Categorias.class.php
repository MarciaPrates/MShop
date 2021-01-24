<?php

Class Categorias extends Conexao{

	private $cate_id, $cate_nome, $cat_slug;

	function __construct(){
        parent::__construct();
    }

    function GetCategorias(){
    //query para burcar categorias
    $query = "SELECT * FROM {$this->prefix}categorias";

    $this->ExecuteSQL($query);

    $this->GetLista();
    }


    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'cate_id' => $lista['cate_id'],
			'cate_nome'  => $lista['cate_nome'], 
         	'cat_slug' => $lista['cat_slug'],
         	'cate_link' => Rotas::pag_Produtos(). '/' . $lista['cate_id'] . '/' . $lista['cat_slug'],
        );

        $i++;
        endwhile;
    }


}

?>
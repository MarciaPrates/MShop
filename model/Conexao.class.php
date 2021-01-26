<?php 

Class Conexao extends Config{
	private $host, $user, $senha, $banco;

	protected $obj, $itens=array(), $prefix;


	public $paginacao_links, $totalpags, $limite, $inicio;

	function __construct(){
		$this->host = self::BD_HOST;
		$this->user = self::BD_USER;
		$this->senha = self::BD_SENHA;
		$this->banco = self::BD_BANCO;
		$this->prefix = self::BD_PREFIX;

		try {
			if($this->Conectar() == null){
				$this->Conectar();
			}
			

		} catch (Exception $e) {
			exit($e->getMessage().'<h2> Erro ao conectar com o banco de dados! </h2>');
		}

	}

	private function Conectar(){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			);
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , 
			$this->user, $this->senha, $options);
		return $link;
	}


	function ExecuteSQL($query, array $params = NULL){
		$this->obj = $this->Conectar()->prepare($query);

		if(is_array($params) > 0){
			foreach ($params as $key =>$value) {
				$this->obj->bindvalue($key, $value);
			}
		}

		return $this->obj->execute();
	}

	function ListarDados(){
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}

	function TotalDados(){
		return $this->obj->rowCount();
	}

	function GetItens(){
		return $this->itens;
	}

	function PaginacaoLinks($campo, $tabela) {

		$pag = new Paginacao();
		$pag->GetPaginacao($campo, $tabela);

		$this->paginacao_links = $pag->link;

		$this->totalpags = $pag->totalpags;

		$this->limite = $pag->limite;
		$this->inicio = $pag->inicio;

		$inicio = $pag->inicio;
		$limite = $pag->limite;

		if ($this->totalpags > 0) {
			return " limit {$inicio}, {$limite}";
		} else {
			return " ";
		}

	}

	protected function Paginacao($paginas = array()) {
		$pag = '<ul class="pagination list-unstyled">';
		$pag .= '<li><a href="?p=1"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>     </a></li>';

		foreach ($paginas as $p):
			$pag .= ' <li class="active"><a href="?p='.$p.'">' .  $p . '</a></li>';
		endforeach;

		$pag .= '<li><a href="?p=' . $this->totalpags . '">' . ' <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                      </svg></a></li>';

		$pag .= '</ul>';

		if ($this->totalpags > 1) {
			return $pag;
		}
	}

	function ShowPaginacao() {
		return $this->Paginacao($this->paginacao_links);
	}




}

 ?>
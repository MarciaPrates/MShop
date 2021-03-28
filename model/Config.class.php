<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "MShop";
	const SITE_NOME = "M-Shop | Loja Virtual";
	const SITE_EMAIL_ADM = "janynascimento1988@gmail.com";
	const BD_LIMIT_POR_PAG = 15;
	const SITE_CEP = '72220064';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "MShop",
		  BD_PREFIX = "mp_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "janynascimento1988@gmail.com";
	const EMAIL_NOME = "Contato M-Shop | Loja Virtual";
	const EMAIL_SENHA = "jany2020";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "janynascimento1988@gmail.com";



}
?>


<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "Loja Virtual - PHP 7 e Mysqli";
	const SITE_EMAIL_ADM = "gleysonalves718@gmail.com";
	const BD_LIMITE_POR_PAG = 12;
	const SITE_CEP = '31535522';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojavirtual",
		  BD_PREFIX = "st_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "gleysonalves718@gmail.com";
	const EMAIL_NOME = "Contato Loja Virtual";
	const EMAIL_SENHA = "%@13102510%@";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "gleysonalves718@gmail.com";
}
 ?>


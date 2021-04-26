<?php

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
    session_start();
}
/*
if(!isset($_SESSION['PED']['pedido'])){
    $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}

if(!isset($_SESSION['PED']['ref'])){
    $_SESSION['ref'] = date('ymdHms');
}
*/
require '../lib/autoload.php';

if(!Login::LogadoADM()){
	Rotas::Redirecionar(1, 'login.php');
	exit('<h2>Erro! Acesso negado </h2>');
}

$smarty = new Template();
$categoria = new Categoria();
$categoria->GetCategoria();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
$smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClienteADM());
$smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidoADM());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriaADM());
$smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutoADM());
$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() . '/adm_senha');
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('CATEGORIA', $categoria->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::LogadoADM());

if(Login::LogadoADM()){
	$smarty->assign('USER', $_SESSION['ADM']['user_nome']);
	$smarty->assign('DATA', $_SESSION['ADM']['user_data']);
	$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
}

$smarty->display('adm_index.tpl');
?>
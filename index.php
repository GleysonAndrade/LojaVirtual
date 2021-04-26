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
require './lib/autoload.php';

$smarty = new Template();
$categoria = new Categoria();
$categoria->GetCategoria();

$smarty->assign('NOME', 'Gleyson Alves Andrade');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTO', Rotas::pag_Produto());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('CATEGORIA', $categoria->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado()){
    $smarty->assign('USER', $_SESSION['cli']['cli_nome']);
}

$smarty->display('index.tpl');
?>
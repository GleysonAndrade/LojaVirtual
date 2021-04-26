<?php

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
    session_start();
}

require '../lib/autoload.php';

$smarty = new Template();

if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])){
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login = new Login();
    if($login->GetLoginADM($user, $senha)){
        echo '<div class"alert alert-success">Login efetuado com sucesso!</div>';
        Rotas::Redirecionar(1, 'adm_categoria.php');
    }
}

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->display('adm_login.tpl');

?>
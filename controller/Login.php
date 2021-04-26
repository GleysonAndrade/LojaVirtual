<?php
$smart = new Template();
$login = new Login();
if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login->GetLogin($user, $senha);
}
$smart->assign('USER', '');
if(Login::Logado()){
    $smart->assign('USER', $_SESSION['cli']['cli_nome']);
    $smart->assign('PAG_LOGOFF', Rotas::pag_Logoff());
    Login::MenuCliente();
}
$smart->assign('LOGADO', Login::Logado());
$smart->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smart->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());

$smart->display('login.tpl');
?>

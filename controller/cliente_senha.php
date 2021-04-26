<?php
$smart = new Template();
Login::MenuCliente();
if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){
    $senha_atual = md5($_POST['cli_senha_atual']);
    $senha_nova = $_POST['cli_senha'];
    $email = $_SESSION['cli']['cli_email'];

    if($senha_atual != $_SESSION['cli']['cli_pass']){
        echo'<div class="alert alert-danger">Senhas não conferem!!</div>';
        Rotas::Redirecionar(3, Rotas::pag_ClienteSenha());
        exit();
    }
    $cliente = new Cliente();
    $cliente->SenhaUpdate($senha_nova, $email);
    echo'<div class="alert alert-success">Senhas alterada com sucesso!! Faça login com sua nova senha!</div>';
    Rotas::Redirecionar(1, Rotas::pag_Logoff());
}else{
    $smart->display('cliente_senha.tpl');
}
?>
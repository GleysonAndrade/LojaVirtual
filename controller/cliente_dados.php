<?php
$smarty = new Template();

Login::MenuCliente();

$smarty->assign('cli_nome', $_SESSION['cli']['cli_nome']);
$smarty->assign('cli_sobrenome', $_SESSION['cli']['cli_sobrenome']);
$smarty->assign('cli_data_nasc', $_SESSION['cli']['cli_data_nasc']);
$smarty->assign('cli_endereco', $_SESSION['cli']['cli_endereco']);
$smarty->assign('cli_numero', $_SESSION['cli']['cli_numero']);
$smarty->assign('cli_bairro', $_SESSION['cli']['cli_bairro']);
$smarty->assign('cli_cidade', $_SESSION['cli']['cli_cidade']);
$smarty->assign('cli_uf', $_SESSION['cli']['cli_uf']);
$smarty->assign('cli_cep', $_SESSION['cli']['cli_cep']);
$smarty->assign('cli_cpf', $_SESSION['cli']['cli_cpf']);
$smarty->assign('cli_rg', $_SESSION['cli']['cli_rg']);
$smarty->assign('cli_rg', $_SESSION['cli']['cli_rg']);
$smarty->assign('cli_ddd', $_SESSION['cli']['cli_ddd']);
$smarty->assign('cli_fone', $_SESSION['cli']['cli_fone']);
$smarty->assign('cli_celular', $_SESSION['cli']['cli_celular']);
$smarty->assign('cli_email', $_SESSION['cli']['cli_email']);

if(isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_cpf'])){
    //Variaveis
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro= $_POST['cli_bairro'];
    $cli_cidadae = $_POST['cli_cidade'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_cep = $_POST['cli_cep'];
    $cli_cpf = $_POST['cli_cpf'];
    $cli_rg = $_POST['cli_rg'];
    $cli_ddd = $_POST['cli_ddd'];
    $cli_fone = $_POST['cli_fone'];
    $cli_celular = $_POST['cli_celular'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = $_POST['cli_senha'];
    $cli_data_cad = $_SESSION['cli']['cli_data_cad'];
    $cli_hora_cad = $_SESSION['cli']['cli_hora_cad'];

    if($_SESSION['cli']['cli_pass'] != md5($cli_senha)){
        echo'<div class="alert alert-danger"><p>Alteração Negada!! Senha incorreta...</p></div>';
        Rotas::Redirecionar(1, Rotas::pag_ClienteDados());
    }else{
        echo 'senha correta!';
        Rotas::Redirecionar(1, Rotas::pag_MinhaConta());
    }

    $cliente = new Cliente();

    $cliente->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, 
    $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, 
    $cli_data_cad, $cli_hora_cad, $cli_senha);

    if(!$cliente->Editar($_SESSION['cli']['cli_id'])){
        echo '<div class="alert alert-danger">Erro ao Editar dados!!</div>';
        exit();
    }else{
        echo '<script> alert("Dados alterados com sucesso!!:)"
        Atualizando os dados do Login...);</script>';
        echo '<div class="alert alert-success">Dados alterados com sucesso!! Atualizando dados do Login...'; echo'</div>';

        $login = new Login();
        $login->GetLogin($cli_email, $cli_senha);
    }

}else{
    $smarty->display('cliente_dados.tpl');
}
?>
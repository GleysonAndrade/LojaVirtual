<?php
$smart = new Template();


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
    $cli_fone = $_POST['cli_cidade'];
    $cli_celular = $_POST['cli_celular'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = Sistema::GerarSenha();
    $cli_data_cad = Sistema::DataAtualUS();
    $cli_hora_cad = Sistema::HoraAtual();

    $cliente = new Cliente();

    $cliente->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, 
    $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, 
    $cli_data_cad, $cli_hora_cad, $cli_senha);

    $cliente->Inserir();

    //Assings para o Template de Email Cliente
    $smart->assign('NOME', $cli_nome);
    $smart->assign('SITE', Config::SITE_NOME);
    $smart->assign('EMAIL', $cli_email);
    $smart->assign('SENHA', $cli_senha);
    $smart->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
    $smart->assign('SITE_HOME', Rotas::get_SiteHOME());

    $email = new EnviarEmail();
    $assunto = 'Cadastro Efetuado' . Config::SITE_NOME;
    $msg = $smart->fetch('email_cliente_cadastro.tpl');
    $destinatarios = array($cli_email, Config::SITE_EMAIL_ADM);
    $email->Enviar($assunto, $msg, $destinatarios);

    echo'<div class="alert alert-success"> Cadastro Efetuado com Sucesso...<br> Senha envida para Email. <br>' . ' Acesse seu email e confira!> </div>';
    Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());

}else{
    $smart->display('cadastro.tpl');
}
?>
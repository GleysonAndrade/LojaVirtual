<h3 class="text text-primary text-center">Confirmar Pedido</h3>
<?php
if(isset($_SESSION['pro'])){
    if(!isset($_POST['frete_radio'])){
        Rotas::Redirecionar(0, Rotas::pag_Carrinho().'#dadosfrete');
        exit ('<h4 class="alert alert_danger">Digite seu frete!!</h4>');
    }
$smart = new Template();
$carrinho = new Carrinho();

$smart->assign('pro', $carrinho->GetCarrinho());
$_SESSION['PED']['frete'] = $_POST['frete_radio'];
$_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal());

$smart->assign('pro', $carrinho->GetCarrinho());
$smart->assign('total', Sistema::MoedaBR($carrinho->GetTotal()));
$smart->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
$smart->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
$smart->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
$smart->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smart->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
$smart->display('pedido_confirmar.tpl');
}else{
    echo '<h4 class="alert alert_danger">Carrinho vazio!!</h4>';

    Rotas::Redirecionar(3, Rotas::pag_Produto());
}
?>
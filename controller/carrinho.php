<?php

if(isset($_SESSION['pro'])){
$smart = new Template();
$carrinho = new Carrinho();
$smart->assign('pro', $carrinho->GetCarrinho());
$smart->assign('total', Sistema::MoedaBR($carrinho->GetTotal()));
$smart->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
$smart->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
$smart->assign('PAG_PRODUTO', Rotas::pag_Produto());
$smart->assign('PESO', number_format($carrinho->GetPeso(),3,'.',''));
$smart->display('carrinho.tpl');
}else{
    echo '<h4 class="alert alert_danger">Carrinho vazio!!</h4>';

    Rotas::Redirecionar(3, Rotas::pag_Produto());
}
?>
<?php
$smart = new Template();

$produto = new Produto();
$produto->GetProdutoId(Rotas::$pag[1]);

$image = new ProdutoImage();
$image->GetImagesPro(Rotas::$pag[1]);

$smart->assign('PRO', $produto->GetItens());
$smart->assign('TEMA', Rotas::get_SiteTEMA());
$smart->assign('IMAGENS', $image->GetItens());
$smart->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());

$smart->display('produto_info.tpl');

?>

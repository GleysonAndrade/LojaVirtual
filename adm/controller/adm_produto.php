<?php
$smarty = new Template();
$produto = new Produto();

if(isset(Rotas::$pag[1])){
   $produto->GetProdutoCatId(Rotas::$pag[1]);
}else{
    $produto->GetProduto();
}

$smarty->assign('PRO', $produto->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutoInfo());
$smarty->assign('PRO_TOTAL', $produto->TotalDados());
$smarty->assign('PAGINA', $produto->ShowPaginacao());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_ProdutoNovoADM());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_ProdutoEditarADM());
$smarty->assign('PAG_PRODUTO_IMG', Rotas::pag_ProdutoImgADM());

$smarty->display('adm_produto.tpl');
?>
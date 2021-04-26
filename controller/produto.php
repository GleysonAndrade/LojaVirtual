<?php
$smart = new Template();

$produto = new Produto();

if(isset(Rotas::$pag[1])){
   $produto->GetProdutoCatId(Rotas::$pag[1]);
}else{
    $produto->GetProduto();
}


$smart->assign('PRO', $produto->GetItens());
$smart->assign('PRO_INFO', Rotas::pag_ProdutoInfo());
$smart->assign('PRO_TOTAL', $produto->TotalDados());
$smart->assign('PAGINA', $produto->ShowPaginacao());

$smart->display('produto.tpl');
?>

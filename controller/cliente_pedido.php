<?php

$smarty = new Template();
Login::MenuCliente();
$pedido= new Pedido();
$pedido->GetPedidosCliente($_SESSION['cli']['cli_id']);
$smarty->assign('PEDIDO', $pedido->GetItens());
$smarty->assign('PEDIDO_QTD', $pedido->TotalDados());
$smarty->assign('PAG_ITENS', Rotas::pag_ClienteItens());
$smarty->assign('PAGINA', $pedido->ShowPaginacao());
$smarty->display('cliente_pedido.tpl');

?>
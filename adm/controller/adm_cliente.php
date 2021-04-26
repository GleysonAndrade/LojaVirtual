<?php 

$smarty = new Template();


$cliente = new Cliente();
$cliente->GetClientes();

$smarty->assign('CLIENTES', $cliente->GetItens());
$smarty->assign('PAG_EDITAR', Rotas::pag_ClienteEditarADM());
$smarty->assign('PAG_PEDIDO', Rotas::pag_PedidoADM());

$smarty->display('adm_cliente.tpl');

?>
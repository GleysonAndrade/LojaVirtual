<?php

$smarty = new Template();

$pedidos = new Pedido();

if(isset($_POST['ped_apagar'])){
    $ped_cod = $_POST['cod_pedido'];
    if($pedidos->Apagar($ped_cod)){
        echo '<div class="alert alert-success"> Pedido excluido com sucesso!.</div>';  
    }
}

if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];
    $pedidos->GetPedidosCliente($id);

    }elseif(isset($_POST['data_ini']) and isset($_POST['data_ini'])){
        $pedidos->GetPedidosData($_POST['data_ini'], $_POST['data_fim']);
    }elseif(isset($_POST['txt_ref'])){
        $ref  = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
        $pedidos->GetPedidosREF($ref);
    }
    else{
        $pedidos->GetPedidosCliente();
    }

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_ItensADM());
$smarty->assign('PAGINA', $pedidos->ShowPaginacao());

if($pedidos->TotalDados() > 0){
    $smarty->display('adm_pedido.tpl');
}else{
    echo '<div class="alert alert-danger"> Não há pedidos para esse cliente.</div>';
}

?>
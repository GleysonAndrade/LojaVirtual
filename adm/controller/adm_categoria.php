<?php
$smarty = new Template();
$categoria = new Categoria();
$categoria->GetCategoria();
if(isset($_POST['cat_nova'])){
    $cat_nome = $_POST['cat_nome'];
    if($categoria->Inserir($cat_nome)){
        echo '<div class="alert alert-seccess">Categoria inserida com sucesso!!</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriaADM());
    }
}

if(isset($_POST['cat_editar'])){
    $cat_id = $_POST['cat_id'];
    $cat_nome = $_POST['cat_nome'];
    if($categoria->Editar($cat_id, $cat_nome)){
        echo '<div class="alert alert-seccess">Categoria editada com sucesso!!</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriaADM());
    }
}

if(isset($_POST['cat_apagar'])){
    $cat_id = $_POST['cat_id'];
    if($categoria->Apagar($cat_id)){
        echo '<div class="alert alert-seccess">Categoria apagada com sucesso!!</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriaADM());
    }
}

$smarty->assign('CATEGORIA', $categoria->GetItens());
$smarty->display('adm_categoria.tpl');
?>
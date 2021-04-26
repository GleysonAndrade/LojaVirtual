<?php
$smarty = new Template();
$gravar = new Produto();

if(isset($_POST['pro_apagar']) && isset($_POST['pro_id_apagar']) && $_POST['pro_apagar'] == 'SIM'){
       if($gravar->Apagar($_POST['pro_id_apagar'])){
        echo '<div class="alert alert-success">Produto excluido com sucesso!!"</div>';
        @unlink($_POST['pro_img_arquivo']);
        Rotas::Redirecionar(2, Rotas::pag_ProdutoADM());
        exit();
       }else{
        echo '<div class="alert alert-danger">Produto não foi excluido!!"</div>';
        Rotas::Redirecionar(2, Rotas::pag_ProdutoADM());
       }
}

if(isset($_POST['pro_nome']) && isset($_POST['pro_valor'])){
    $pro_nome = $_POST['pro_nome'];
    $pro_categoria = $_POST['pro_categoria'];
    $pro_ativo = $_POST['pro_ativo'];
    $pro_modelo = $_POST['pro_modelo'];
    $pro_ref = $_POST['pro_ref'];
    $pro_valor = $_POST['pro_valor'];
    $pro_estoque = $_POST['pro_estoque'];
    $pro_peso = $_POST['pro_peso'];
    $pro_altura = $_POST['pro_altura'];
    $pro_largura = $_POST['pro_largura'];
    $pro_comprimento = $_POST['pro_comprimento'];
    $pro_img = $_FILES['pro_img']['name'];
    $pro_desc = $_POST['pro_desc'];
    $pro_slug = $_POST['pro_slug'];
    $pro_id = $_POST['pro_id'];
    $pro_img_arquivo = $_POST['pro_img_arquivo'];

    if(!empty($_FILES['pro_img']['name'])){
        $upload = new ImageUpload();
        if($upload->Upload(900, 'pro_img')){
            $pro_img = $upload->retorno;
            @unlink($pro_img_arquivo);
        }else{
            exit('Erro ao enviar imagem!!');
        }
        }else{
            $pro_img = $_POST['pro_img_atual'];
    }

    

    $gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref, 
    $pro_valor, $pro_estoque, $pro_peso, $pro_altura, $pro_largura, $pro_comprimento,
    $pro_img, $pro_desc, $pro_slug);

    if($gravar->Alterar($pro_id)){
        echo '<div class="alert alert-success">Produto editado com Sucesso!!"</div>';
        Rotas::Redirecionar(2, Rotas::pag_ProdutoADM());
    }else{
        echo '<div class="alert alert-danger">Produto não editado!!"</div>';
        Rotas::Redirecionar(12, Rotas::pag_ProdutoADM());
        exit();
    }
}
    $categoria = new Categoria();
    $categoria->GetCategoria();

    //CARREGAR PRODUTOS
    $produto = new Produto();
    $id = $_POST['pro_id'];
    $produto->GetProdutoId($id);

    $smarty->assign('CATEGORIA', $categoria->GetItens());
    $smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());
    $smarty->assign('PRO', $produto->GetItens());

    $smarty->display('adm_produto_editar.tpl');
?>
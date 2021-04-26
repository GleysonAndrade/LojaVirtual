<?php
$smarty = new Template();
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

    if(!empty($_FILES)){
        $upload = new ImageUpload();
        if($upload->Upload(900, 'pro_img')){
            $pro_img = $upload->retorno;
        }else{
            exit('Erro ao enviar imagem!!');
        }
    }

    $gravar = new Produto();

    $gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref, 
    $pro_valor, $pro_estoque, $pro_peso, $pro_altura, $pro_largura, $pro_comprimento,
    $pro_img, $pro_desc, $pro_slug);

    if($gravar->Inserir()){
        echo '<div class="alert alert-success">Produto cadastrado com Sucesso!!"</div>';
        Rotas::Redirecionar(2, Rotas::pag_ProdutoADM());
    }else{
        echo '<div class="alert alert-danger">Produto não cadastrado!!"';
        Sistema::VoltarPagina();
        echo '</div>';
        exit();
    }
}
    $categoria = new Categoria();
    $categoria->GetCategoria();

    $smarty->assign('CATEGORIA', $categoria->GetItens());
    $smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());

$smarty->display('adm_produto_novo.tpl');
?>
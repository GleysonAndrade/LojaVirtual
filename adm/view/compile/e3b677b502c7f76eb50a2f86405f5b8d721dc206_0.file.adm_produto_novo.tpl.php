<?php
/* Smarty version 3.1.38, created on 2021-01-17 10:35:12
  from 'C:\xampp\htdocs\loja\adm\view\adm_produto_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60042f005f2484_60163492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b677b502c7f76eb50a2f86405f5b8d721dc206' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produto_novo.tpl',
      1 => 1609684997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60042f005f2484_60163492 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<h2 class="text-center text-primary">Cadastrar Produto</h4>
<hr>
<form name="cadcliente" id="cadcliente" method="post" action="" enctype="multipart/form-data">
<section class="row" id="camposproduto">

<div class="form-row">
    <h4>
    <p class="text-center text-success">Dados Produtos</p>
    </h4>
    <br>
    <div class="form-group col-md-4">
        <label>Nome</label>
        <input type="text" name="pro_nome" id="pro_nome" class="form-control" minlength="3" placeholder="Digite o nome produto.." required>
        </div>
    <div class="form-group col-md-4">
        <label>Categoria</label>
        <select name="pro_categoria" id="pro_categoria" class="form-control" required>
            <option value="">Escolha</option>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIA']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>  
            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cat_nome'];?>
</option>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
        </select>
        </div>
    <div class="form-group col-md-4">
        <label>Ativo</label>
        <select name="pro_ativo" class="form-control" required>
            <option value="">Escolha</option> 
            <option value="NAO">Não</option>
            <option value="SIM">SIM</option> 
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Modelo</label>
        <input type="text" name="pro_modelo" id="pro_modelo" class="form-control" placeholder="Digite um modelo..." required>
        </div>
    <div class="form-group col-md-4">
        <label>Referencia</label>
        <input type="text" name="pro_ref" id="pro_ref" class="form-control" placeholder="Digite a referencia do produto..." required>
    </div>
     <div class="form-group col-md-4">
        <label>Valor</label>
        <input type="text" name="pro_valor" id="pro_valor" class="form-control" placeholder="Digite um valor para produto..." required>
        </div>
    <div class="form-group col-md-3">
        <label>Estoque</label>
        <input type="text" name="pro_estoque" id="pro_estoque" class="form-control" placeholder="Digite estoque do produto.." required>
        </div>
    <div class="form-group col-md-2">
        <label>Peso</label>
        <input type="text" name="pro_peso" id="pro_peso" class="form-control" placeholder="Digite um peso.." required>
    </div>
    <div class="form-group col-md-3">
        <label>Altura</label>
        <input type="text" name="pro_altura" id="pro_altura" class="form-control" placeholder="Digite uma altura..." required>
        </div>
    <div class="form-group col-md-2">
        <label>Largura</label>
        <input type="text" name="pro_largura" id="pro_largura" class="form-control" placeholder="Digite uma largura..." required>
    </div>  
    <div class="form-group col-md-2">
        <label>Comprimento</label>
        <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" placeholder="Digite um comprimento..." required>
    </div> 
    <div class="col-md-6">
      <label>Imagem Principal</label>
      <input type="file" name="pro_img" class="form-control " id="pro_img" required>
    </div>
    <div class="col-md-3">

    </div>

    <div class="col-md-12">
        <label>Descrição</label>
        <textarea name="pro_desc" id="pro_desc" rows="5" class="form-control" ></textarea>
        <?php echo '<script'; ?>
> 
          tinymce.init({ selector:'textarea'  });
        <?php echo '</script'; ?>
> 
    </div>

    <div class="col-md-12">
      <label>Slug</label>
      <input type="text" readonly name="pro_slug" id="pro_slug"   class="form-control" >  
    </div>

        <div class="form-group col-md-12">
            <label></label>
        </div>
    </div>
</section>
    <section class="row" id="btngravar">
        <div class="col-md-5">
        </div>
        <div class="col-md-4">
        <button type="submit" class="btn btn-success btn-block ><i class="glyphicon glyphicon-ok"></i>Salvar Cadastro</button>
        </div>
        <div class="col-md-4"><br>
        </div><br>
    </section>
    <hr>
</form>

<?php }
}

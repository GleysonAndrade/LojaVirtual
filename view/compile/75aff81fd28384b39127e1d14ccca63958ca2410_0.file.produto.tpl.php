<?php
/* Smarty version 3.1.38, created on 2021-01-16 22:00:37
  from 'C:\xampp\htdocs\loja\view\produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60037e257684c7_23522579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75aff81fd28384b39127e1d14ccca63958ca2410' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produto.tpl',
      1 => 1609338789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60037e257684c7_23522579 (Smarty_Internal_Template $_smarty_tpl) {
?><hr/>
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 class="alert alert-danger">Nenhum produto encontrado!!</h4>
<?php }?>
    <!--  começa lista de produtos  ---->   
  <section id="produto" class="row">  
 
		<ul style="list-style: none" >
		
		        <div class="row" id="pularliha">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?> 
		           
		        <li class="col-md-4">

		            <div class="thumbnail">

		                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['pro_slug'];?>
">


		                    <img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['pro_img'];?>
" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['p']->value['pro_nome'];?>
</h4> 

		                        <h3 class="text-center text-danger">R$<?php echo $_smarty_tpl->tpl_vars['p']->value['pro_valor'];?>
</h3>

		                    </div>

		                </a>

		            </div>


		        </li>

		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		        
		         </div>
		         
		    
		</ul>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINA']->value;?>

    </center>
    </section>

<?php }
}

<h4 class="text-center text-primary">Gerenciar Categorias</h4>
<hr>
<section class="row">
    <form name="categoriainserir" method="post" action="">
        <div class="col-md-4">
            <input type="text" name="cat_nome" class="form-control" required>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success" name="cat_nova" value="cat_nova">Inserir Nova</button>
        </div>
        <div class="col-md-4">
    </form>
</section>
<hr>
<!--Listar Categorias-->
<section class="row" id="listarcategoria">
 <center>
    <table class="table table-bordered" style="width: 90%">
        {foreach from=$CATEGORIA item=C}
            <form name="categoria_editar" method="post" action="">
                <tr>
                    <td style="width: 80%">
                        <input type="text" name="cat_nome" value="{$C.cat_nome}" class="form-control" required>
                        <input type="hidden" name="cat_id" value="{$C.cat_id}">
                    </td>
                    <td>
                        <button class="btn btn-primary" name="cat_editar" value="cat_editar">Editar</button>
                        <td>
                        <button class="btn btn-danger" name="cat_apagar " value="cat_editar">Apagar</button>
                        </td>
                    </td>
                </tr>
            </form>
        {/foreach}
    </table>
 </center>
</section>
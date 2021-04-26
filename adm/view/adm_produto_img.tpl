<h4 class="text-center text-primary">Imagens do Produto</h4>
<hr>
<!--Formulario de envio de foto-->
<section class="row" id="novaimg">
<form name="nova" method="post" action="" enctype="multipart/form-data">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <input type="hidden" name="pro_id" value="{$PRO}">
        <input type="file" name="pro_img" class="form-contrl" required>
        <br>
    </div>
    <div class="col-md-4">
        <button class="btn btn-success"> Enviar </button>
    </div>
</form>
</section>

<hr>

<!--Listando as imagens que existem no produto-->
<section class="row" id="listaimg">
<!--Formulario de apagar a foto ou varias-->
<form name="deletar" method="post" action="">
    <ul style="list-style: none">
                {foreach from=$IMAGES item=I}  
        <li class="col-md-3">
            <img src="{$I.img_nome}" alt="" class="thumbnail">
            <label>Apagar?</label>
            <input type="checkbox" class="input-lg" name="fotos_apagar[]" value="{$I.img_arquivo}">
        </li>
               {/foreach}     
        <input type="hidden" name="pro_id" value="{$I.img_pro_id}">
    </ul>
    <!--Botão para apagar fotos-->
    <br>
<section class="col-md-12 text-cente" id="apagar">
<hr>
    <button class="btn btn-danger">Apagar Marcas</button>
</section>
<br>    
<br>
<br>
</form>
</section>
<br>
<br>
<br>
</section>
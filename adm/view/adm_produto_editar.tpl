 <script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>
<h2 class="text-center text-primary">Editar Produto</h4>
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
        <input type="text" value="{$PRO.1.pro_nome}" name="pro_nome" id="pro_nome" class="form-control" minlength="3" placeholder="Digite o nome produto.." required >
        </div>
    <div class="form-group col-md-4">
        <label>Categoria</label>
        <select name="pro_categoria" id="pro_categoria" class="form-control" required>
            <option value="{$PRO.1.cat_id}>Escolha</option>
                 {foreach from=$CATEGORIA item=c}  
            <option value="{$c.cat_id}">{$c.cat_nome}</option>
                 {/foreach}   
        </select>
        </div>
    <div class="form-group col-md-4">
        <label>Ativo</label>
        <select name="pro_ativo" class="form-control" required>
            <option value="{$PRO.1.pro_ativo}></option>
            <option value="">Escolha</option> 
            <option value="NAO">Não</option>
            <option value="SIM">SIM</option> 
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Modelo</label>
        <input type="text" value="{$PRO.1.pro_modelo}" name="pro_modelo" id="pro_modelo" class="form-control" placeholder="Digite um modelo..." required >
        </div>
    <div class="form-group col-md-4">
        <label>Referencia</label>
        <input type="text" name="pro_ref" id="pro_ref" class="form-control" placeholder="Digite a referencia do produto..." required value="{$PRO.1.pro_ref}" >
    </div>
     <div class="form-group col-md-4">
        <label>Valor</label>
        <input type="text" name="pro_valor" id="pro_valor" class="form-control" placeholder="Digite um valor para produto..." required value="{$PRO.1.pro_valor}" >
        </div>
    <div class="form-group col-md-3">
        <label>Estoque</label>
        <input type="text" name="pro_estoque" id="pro_estoque" class="form-control" placeholder="Digite estoque do produto.." required value="{$PRO.1.pro_estoque}" >
        </div>
    <div class="form-group col-md-2">
        <label>Peso</label>
        <input type="text" name="pro_peso" id="pro_peso" class="form-control" placeholder="Digite um peso.." required value="{$PRO.1.pro_peso}" >
    </div>
    <div class="form-group col-md-3">
        <label>Altura</label>
        <input type="text" name="pro_altura" id="pro_altura" class="form-control" placeholder="Digite uma altura..." required value="{$PRO.1.pro_altura}" >
        </div>
    <div class="form-group col-md-2">
        <label>Largura</label>
        <input type="text" name="pro_largura" id="pro_largura" class="form-control" placeholder="Digite uma largura..." required value="{$PRO.1.pro_largura}" >
    </div>  
    <div class="form-group col-md-2">
        <label>Comprimento</label>
        <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" placeholder="Digite um comprimento..." required value="{$PRO.1.pro_comprimento}" >
    </div> 
   <div class="col-md-12">
            <div class="col-md-3"> 
            </div>
            <div class="col-md-6">
                <hr>
                <label>Imagem Principal</label>
                <input type="file" name="pro_img" class="form-control btn btn-success " id="pro_img">
                <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="{$PRO.1.pro_img_atual}">
                <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_atual}">
            </div>  
            
            <div class="col-md-3">
         </div>
    </div>

    <div class="col-md-12">
        <label>Descrição</label>
        <textarea name="pro_desc" id="pro_desc" rows="5" class="form-control" >{$PRO.1.pro_desc}</textarea>
        <script> 
          tinymce.init({ selector:'textarea'  });
        </script> 
    </div>

    <div class="col-md-12">
      <label>Slug</label>
      <input type="text" readonly name="pro_slug" id="pro_slug" class="form-control" value="{$PRO.1.pro_slug}" >  
    </div>
        <div class="form-group col-md-12">
            <label></label>
        </div>
    </div>

    <!-- Botão gravar -->

    <div class="col-md-4">
    
    </div>

    <div class="col-md-4">
        <br>
        <button class="btn btn-primary btn-block btn-lg" name="btn_gravar">Editar</button>
        <br>
    </div>
    <div class="col-md-4 text-right">

    </div>

    <input type="hidden" name="pro_id" value="{$PRO.1.pro_id}">

</form>
</section>

<!--Bloco Apagar Produto -->

<section class="row">
    <div class="col-md-4">

    </div>

    <div class="col-md-4">

    </div>

    <div class="col-md-4 text-right">
        <!-- Botão para abrir a opção apagar -->
        <br>
        <button class="btn btn-danger" name="btn_apagar" data-toggle="collapse" data-target="#btnapagar"><i class="glyphicon glyphicon-remover"></i>Apagar Produto</button>
    </div>

  <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
    <br>
    <form name="frm_apagar" method="post" action="">
        <label>Apagar esse produto?</label>
        <input type="radio" name="confirmar" value="SIM" required>
        <!-- Botão para apagar de vez -->
        <button class="btn btn-danger" name="btn_apagar"><i class="glyphicon glyphicon-remover"></i>OK</button>
        
        <input type="hidden" name="pro_id_apagar" value="{$PRO.1.pro_id}">
        <input type="hidden" name="pro_apagar" value="SIM">

        <!--Pegar caminho completo da imagem atual-->
        <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">
    </form>
  </div>
</section>
<br>
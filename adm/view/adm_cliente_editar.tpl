<h2 class="text-center text-primary">Alterar Cadastro</h4>
<hr>
<form name="cadcliente" id="cadcliente" method="post" action="">
<section class="row" id="cadastro"

<div class="form-row">
    <h4>
    <p class="text-center text-success">Dados Pessoais</p>
    </h4>
    <br>
    <div class="form-group col-md-4">
        <label>Nome</label>
        <input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" placeholder="Digite o primeiro nome..." required>
        </div>
    <div class="form-group col-md-4">
        <label>Sobrenome</label>
        <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class="form-control" minlength="3" placeholder="Digite o segundo nome..." required>
        </div>
    <div class="form-group col-md-4">
        <label>Data Nascimento</label>
        <input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label>CPF</label>
        <input type="text" value="{$CLI_CPF}" name="cli_cpf" class="form-control" minlength="11" placeholder="Digite o cpf sem traços e pontos..." required>
        </div>
    <div class="form-group col-md-6">
        <label>RG</label>
        <input type="text" value="{$CLI_RG}" name="cli_rg" class="form-control" minlength="8" placeholder="Digite o rg sem traços e pontos..." required>
    </div>
    <h4>
        <p class="text-center text-success">Endereço</p>
    </h4>
    <br>
     <div class="form-group col-md-2">
        <label>CEP</label>
        <input type="text" value="{$CLI_CEP}" name="cli_cep" class="form-control" minlength="8" placeholder="Digite seu cep..." required>
        </div>
    <div class="form-group col-md-4">
        <label>Rua</label>
        <input type="text" value="{$CLI_ENDERECO}" name="cli_endereco" class="form-control" minlength="3" placeholder="Digite o sua rua..." required>
        </div>
    <div class="form-group col-md-2">
        <label>Numero</label>
        <input type="number" value="{$CLI_NUMERO}" name="cli_numero" class="form-control" required>
    </div>
    <div class="form-group col-md-4">
        <label>Bairro</label>
        <input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" class="form-control" minlength="2" placeholder="Digite seu bairro..." required>
        </div>
    <div class="form-group col-md-10">
        <label>Cidade</label>
        <input type="text" value="{$CLI_CIDADE}" name="cli_cidade" class="form-control" minlength="8" placeholder="Digite sua cidade..." required>
    </div>  
    <div class="form-group col-md-2">
        <label>UF</label>
        <input type="text" value="{$CLI_UF}" name="cli_uf" class="form-control" placeholder="Digite seu UF..." required>
    </div> 
 
    <h4>
        <p class="text-center text-success">Contato</p>
    </h4>
    <br>
        <div class="form-group col-md-2">
            <label>DDD</label>
            <input type="text" value="{$CLI_DDD}" name="cli_ddd" class="form-control" minlength="2" placeholder="Digite seu DDD sem 0..." required>
        </div> 
        <div class="form-group col-md-3">
            <label>Tel.Residencial</label>
            <input type="text" value="{$CLI_FONE}" name="cli_fone" class="form-control" minlength="10" placeholder="Digite seu num de celular...">
        </div>  
        <div class="form-group col-md-3">
            <label>Celular</label>
            <input type="text" value="{$CLI_CELULAR}" name="cli_celular" class="form-control" minlength="10" placeholder="Digite seu num de celular...">
        </div>
        <div class="form-group col-md-4">
            <label>Email</label>
            <input type="text" value="{$CLI_EMAIL}" name="cli_email" class="form-control" minlength="10" placeholder="Digite seu email de contato..." required>
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
            <input type="hidden" name="cli_id" value="{$CLI_ID}" class="form-control" required>
            <hr>
            <button type="submit" class="btn btn-success btn-block ><i class="glyphicon glyphicon-ok"></i>Alterar Cadastro</button>
    </div>

    <div class="col-md-4"><br>
    
    </div><br>
</section>
  <hr>
</form>

 <hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-4">
       <a href="{$PAG_CARRINHO}" class="btn btn-info" title="">Voltar para Carrinho</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">

        <tr class="text-primary bg-primary">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
            <td></td> 
            
        </tr>

            {foreach from=$pro item=p}
                
        <tr>
            
            <td><img src="{$p.pro_img}" alt="{$p.pro_nome}"> </td>
            <td> {$p.pro_nome} </td>
            <td> {$p.pro_valor} </td>
            <td> {$p.pro_qtd}  </td>
            <td> {$p.pro_subTotal} </td>
            <td>
            </td>
        </tr>
        
       {/foreach}
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
        <center>
            <table class="table table-bordered" style="width: 95%">
                <thead>
                  <th scope="col" class="col-md-4 text-center">Valor Produto</th>
                  <th scope="col" class="col-md-4 text-center">Valor Frete</th>
                  <th scope="col" class="col-md-4 text-center">Valor Total Compra</th>
                </thead>
                <tbody>
                   <tr class="bg-success">
                   <td class="text-success text-center">R$ {$total}</td> 
                   <td class="text-success text-center">R$ {$FRETE}</td> 
                   <td class="text-success text-center">R$ {$TOTAL_FRETE}</td> 
                   </tr>
                </tbody>
            </table>
        </center>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

            </div>
        </section>
                    <br>
                    <hr>

           <!-- botão finalzar -->
           <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
           <button class="btn btn-success btn-block btn-lg" type="submit"><i class="glyphicon glyphicon-ok"></i> Finalzar Pedido </button>
           </form>
           <hr>
           
       </form>  
       
       </div>
               
  </section>
       <br>
       <br>
       <br>
       <br>
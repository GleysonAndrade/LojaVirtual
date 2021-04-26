 <br>
 <h3 class="text-center text-primary">Meus Pedidos</h3>
<hr>
<section class="row" id="pedidos">
    
    <center>
    {if $PEDIDO_QTD > 0}
    <table class="table table-bordered" style="width: 90%">
        
        <tr class="text-danger bg-danger">
            <td>Data</td>
            <td>Hora</td>
            <td>Ref</td>
           
            <td>Status</td>
            <td></td>
        </tr>
        
        {foreach from=$PEDIDO item=P}
        <tr>
            
            <td style="width: 10%">{$P.ped_data}</td>
            <td style="width: 10%">{$P.ped_hora}</td>
            <td style="width: 10%">{$P.ped_ref}</td>
          
            
            {if $P.ped_pag_status == 'NAO'} 
             <td style="width: 15%"><span class="label label-danger">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'Pago'}
              <td style="width: 15%"><span class="label label-success">{$P.ped_pag_status}</span></td>
            {else}
              <td style="width: 15%">{$P.ped_pag_status}</td>
            {/if}
             
        <form name="itens" method="post" action="{$PAG_ITENS}">
            
             <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
             <td style="width: 10%"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
       
        </form>    
            
        </tr>
        {/foreach}
    </table>
    {else}
        <h4 class="text-center text-primary">Não há peidos para este cliente!!</h4>
    {/if}
      </center>
</section>

<section id="pagincao" class="row">
        <center>
        {$PAGINA}
        </center>
        </section>
      
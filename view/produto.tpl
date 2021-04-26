<hr/>
{if $PRO_TOTAL <1}
<h4 class="alert alert-danger">Nenhum produto encontrado!!</h4>
{/if}
    <!--  começa lista de produtos  ---->   
  <section id="produto" class="row">  
 
		<ul style="list-style: none" >
		
		        <div class="row" id="pularliha">
		        {foreach from=$PRO item=p} 
		           
		        <li class="col-md-4">

		            <div class="thumbnail">

		                <a href="{$PRO_INFO}/{$p.pro_id}/{$p.pro_slug}">


		                    <img src="{$p.pro_img}" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h4 class="text-center"> {$p.pro_nome}</h4> 

		                        <h3 class="text-center text-danger">R${$p.pro_valor}</h3>

		                    </div>

		                </a>

		            </div>


		        </li>

		        {/foreach}
		        
		         </div>
		         
		    
		</ul>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    {$PAGINA}
    </center>
    </section>


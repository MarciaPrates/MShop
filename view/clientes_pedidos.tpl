<div class="page-heading bg-light" id="secao-cliente-pedidos">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Meus Pedidos</h1>        
      </div>
  </div>
</div>
</div>


<div class="untree_co-section">
    <div class="container">
      <div class="row mb-2">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-name">Data</th>
                  <th class="product-price">Hora</th>
                  <th class="product-quantity">Ref</th>
                  <th class="product-total">Status</th>
                  <th class="product-remove"></th>
              </tr>
          </thead>
          <tbody>
            {foreach from=$PEDIDOS item=P}
            <tr>
              <td>{$P.ped_data}</td>
              <td>{$P.ped_hora}</td>
              <td>{$P.ped_ref}</td>


              {if $P.ped_pag_status == 'NAO'}
              <td>
                <span class="label label-danger">{$P.ped_pag_status}</span>
            </td>
            {elseif $P.ped_pag_status == 'Pago'}
            <td>
                <span class="label label-success">{$P.ped_pag_status}</span>
                {else}
                <td>{$P.ped_pag_status}</td>
                {/if}
            </td>


            <form name="itens" method="post" action="{$PAG_ITENS}">

               <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
               <td style="width: 10%"><button class="btn btn-info"> Detalhes</button></td>

           </form>


       </tr>
       {/foreach}
   </tbody>
</table>
</div>
</form>
</div>

</div>
</div>      
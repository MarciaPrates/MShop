<div class="page-heading bg-light" id="senha-alterar">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Dados do pedido</h1>      
        </div>
      </div>
    </div>
  </div>

  

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-success">
                  <th class="product-thumbnail"><b>Data:</b> </th>
                  <th class="product-name"><b>Hora:</b> </th>
                  <th class="product-price"><b>Ref:</b> </th>
                  <th class="product-quantity"><b>Status:</b> </th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="product-thumbnail">{$ITENS.1.ped_data}</td>
                  <td class="product-name">{$ITENS.1.ped_hora}</td>
                  <td>{$ITENS.1.ped_ref}</td>
                  <td>
                      <span class="text-black">{$ITENS.1.ped_pag_status}</span>
                  </td>
                  
                </tr>

              </tbody>
            </table>
          </div>
      </div>


      <!-- listagem dos itens -->
      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-info">
                  <th class="product-thumbnail">Foto</th>
                  <th class="product-name">Item</th>
                  <th class="product-price">Valor</th>
                  <th class="product-quantity">X</th>
                  <th class="product-quantity">SubTotal</th>
                </tr>
              </thead>
              <tbody>
              	{foreach from=$ITENS item=P}
                <tr>
                  <td class="product-thumbnail">
                    <img src="{$P.item_img}" alt="">
                  </td>
                  <td class="product-name">
                    <h5 class="h5 text-black">{$P.item_nome}</h5>
                  </td>
                  <td>{$P.item_valor}</td>
                  <td>{$P.item_qtd}</td>
                  <td>{$P.item_sub}</td>
                  
                </tr>
                {/foreach}

              </tbody>
            </table>
          </div>
      </div>


      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-warning">
                  <th class="product-name"><b>Frete:</b></th>
                  <th class="product-name"><b>Total:</b></th>
                  <th class="product-price"><b>Final:</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <h5 class="h5 text-black">R$ {$ITENS.1.ped_frete_valor}</h5>
                  </td>
                  <td class="product-name">
                    <h5 class="h5 text-black">R$ {$TOTAL}</h5>
                  </td>
                  <td><h5 class="h5 text-black">R$ {$ITENS.1.ped_frete_valor+$TOTAL}</h5></td>
                  
                </tr>

              </tbody>
            </table>
          </div>
      </div>



      <!--METODO DE PAGAMENTO-->
      <div class="row mt-4">
        <div class="col-md-12 pl-5">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12 text-center border-bottom mb-3">
                  <h3 class="text-black h4 text-uppercase">Forma de Pagamento:</h3>
                </div>
              </div>
              {if $ITENS.1.ped_pag_status =='NAO'} 
              <div class="row mb-1">
                <div class="col-md-4 justify-content-end">
                	<button class="btn btn-success btn-lg btn-block" onclick="PagSeguroLightbox({
				    code: '{$PS_COD}'
				    }, {
				    success : function(transactionCode) {
				      alert('Transação efetuada - ' + transactionCode);
				        window.location ='{$PAG_RETORNO}/{$REF}';
				    },
				    abort : function() {
				       alert('Erro no processo de pagamento');
				         window.location ='{$PAG_ERRO}/{$REF}';
				    }
				});   

				"> Pague com o Pagseguro </button>
                	<a href="" class="gal-item" data-fancybox="gal"><img src="{$TEMA}/images/logo-pagseguro.png"  alt=""></a>
                	<script type="text/javascript" src="{$PS_SCRIPT}"></script>
                </div>
                <div class="col-md-4 justify-content-end">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="{$TEMA}/images/deposito.gif" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 justify-content-end">
                  <a href="" class="gal-item" data-fancybox="gal"><img src="{$TEMA}/images/pix.png" alt="Image" class="img-fluid"></a>
                </div>
              </div>
              {/if}
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
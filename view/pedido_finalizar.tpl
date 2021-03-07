  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Finalizar Compra</h1>     
        </div>
      </div>
    </div>
  </div>

  

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagem</th>
                  <th class="product-name">Produto</th>
                  <th class="product-price">Preço</th>
                  <th class="product-quantity">Quantidade</th>
                </tr>
              </thead>
              <tbody>

                {foreach from=$PRO item=P}

                <tr>
                  <td class="product-thumbnail">
                    <img src="{$P.pro_img}" alt="{$P.pro_nome}" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h5 class="h5 text-black">{$P.pro_nome}</h5>
                  </td>
                  <td>{$P.pro_valor}</td>
                  <td>
                    <!--<div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
                      </div>-->
                      <span class="text-black">{$P.pro_qtd}</span>
                      <!--<div class="input-group-append">
                        <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>-->

                  </td>
                  
                </tr>

                {/foreach}

              </tbody>
            </table>
          </div>
        </form>
      </div>


      <div class="row">
        <div class="col-md-6">
          
        </div>

        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-3">
                  <h3 class="text-black h4 text-uppercase">Total</h3>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">SubTotal</span>
                </div>
                <div class="col-md-6 text-right">
                  <span>R$ {$TOTAL}</span>
                </div>
                <div class="col-md-6">
                  <span class="text-black">Frete</span>
                </div>
                <div class="col-md-6 text-right">
                  <span>R$ {$FRETE}</span>
                </div>
                <div class="col-md-6">
                  <span class="text-black"><b>TOTAL</b></span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">R$ {$TOTAL_FRETE}</strong>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>



      <div class="row mt-4">
        <div class="col-md-12 pl-5">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12 text-center border-bottom mb-3">
                  <h3 class="text-black h4 text-uppercase">Forma de Pagamentos:</h3>
                </div>
              </div>
              <div class="row mb-1">
                <div class="col-md-6 justify-content-end">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="{$TEMA}/images/logo-pagseguro.png" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-6 justify-content-end">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="{$TEMA}/images/deposito.gif" alt="Image" class="img-fluid"></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Carrinho</h1>      
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
                  <th class="product-total">SubTotal</th>
                  <th class="product-remove">Remover</th>
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
                  <td>{$P.pro_subTotal}</td>
                  
                    <td>
                        <button class="btn btn-black btn-sm" type="hidden" name="pro_id" value="{$P.pro_id}">X</button>
                        <input type="hidden" name="acao" value="del">
                  
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
          <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
              <button class="btn btn-outline-black btn-sm btn-block"><a href="{$PAG_PRODUTOS}">Continue Comprando</a></button>
            </div>
            <div class="col-md-6">
              <!--<button class="btn btn-black btn-sm btn-block">Atualizar Carrinho</button>-->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="text-black h4">Frete</label>
              <p>Calcule o frete aqui.</p>
            </div>
            <div class="col-md-8 mb-3 mb-md-0" id="dadosfrete">
              <input type="hidden" name="peso_frete" id="peso_frete" value="2" class="form-control " readonly>

              <input type="text" name="cep_frete" value="" class="form-control py-3" id="cep_frete" placeholder="Digite o CEP">

              <input type="hidden" name="frete_valor" id="frete_valor" value="0">
            </div>

            <div class="col-md-4">
              <button class="btn btn-primary" id="buscar_frete">Calcular</button>
            </div>
            <span id="frete"></span>

          </div>

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
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">R$ {$TOTAL}</strong>
                </div>
              </div>

              <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" type="submit">Confirmar Pedido</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
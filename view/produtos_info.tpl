{foreach from=$PRO item=P}
<div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">{$P.pro_nome}</h2>
          <div class="p-3 p-lg-5 border">
            <div class="form-group">
              <span class=""><span class="icon-play"></span></span>
              <img src="{$P.pro_img_g}" alt="Image" class="img-fluid rounded">
            </a>
            </div>
            <hr class="linha" id="linha">
            <div class="form-group row mt-5">
              
              {foreach from=$IMAGES item=I}
              <div class="col-md-6">

                <img src="{$I.img_nome}" alt="Image" class="img-fluid rounded">
                
              </div>
              {/foreach}
            </div>
          </div>
        </div>


        <div class="col-md-7">

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Métodos de pagamento:</h2>
              <div class="p-3 p-lg-3 border d-flex justify-content-center">
                <div class="input-group w-75">
                	<img src="{$TEMA}/images/logo-pagseguro.png" alt="Image" class="img-fluid">
                </div>

              </div>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Informações</h2>
              <div class="p-3 p-lg-5 border">
                <table class="table site-block-order-table mb-5">
                  <thead>
                    <th>Nome</th>
                    <th>Valor</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{$P.pro_nome} <strong class="mx-2">x</strong> 1</td>
                      <td>R$ {$P.pro_valor}</td>
                    </tr>
                  </tbody>
                  <thead class="mt-5">
                    <th>Descrição</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{$P.pro_desc}</td>
                    </tr>
                  </tbody>
                </table>

                <div class="border p-3 mb-3">
                  	<form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                		<input type="hidden" name="pro_id" value="{$P.pro_id}">
                		<input type="hidden" name="acao" value="add">
            			<button class="btn btn-success btn-lg py-3 btn-block">Adicionar no Carrinho</button>
             		</form> 
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- </form> -->
    </div>
  </div>

   {/foreach}
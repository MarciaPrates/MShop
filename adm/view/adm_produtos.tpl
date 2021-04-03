  <div class="page-heading bg-light mb-5">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Gerenciar Produtos</h1>      
        </div>
      </div>
      <div class="row d-flex justify-content-end">
        <div class="col-md-3">
          <a href="{$PAG_PRODUTO_NOVO}"><button class="btn btn-success btn-lg py-3">+ Novo Produto</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--     exibe mensagem caso nao encontre produtos -->
  {if $PRO_TOTAL < 1}
  <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
  {/if}


  <!--  começa lista de produtos  ---->

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagem</th>
                  <th class="product-name">Produto</th>
                  <th class="product-price">Categoria</th>
                  <th class="product-quantity">Preço</th>
                  <th class="product-total">Editar</th>
                  <th class="product-remove">Imagem</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$PRO item=P}
                <tr>
                  <td class="product-thumbnail">
                    <img src="{$P.pro_img_p}" alt="" >
                  </td>
                  <td class="product-name">{$P.pro_nome}
                  </td>
                  <td>{$P.cate_nome}</td>
                  <td>R$ {$P.pro_valor}</td>
                  <td>
                    <form name="proeditar" method="post" action="">
                      <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                      <button class="btn btn-success btn-lg py-1 btn-block"><h4>&#9998;</h4></button>
                    </form>
                  </td>
                  <td>
                    <form name="proimg" method="post" action="">
                      <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                      <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
                      <button class="btn btn-info btn-lg py-1"><b>IMG</b></button>

                    </form> 
                  </td>
                </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </form>
      </div>

      <!--  paginação inferior   -->  
      <section id="paginacao" class="row">
        <center>
          {$PAGINAS}
        </center>
      </section>


    </div>
  </div>
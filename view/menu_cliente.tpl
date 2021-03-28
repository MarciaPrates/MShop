<div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end d-flex justify-content-center">
        <div class="col-lg-6">
          <h3>Olá <b>{$USER}</b>, seja bem vindo(a)! O que deseja fazer agora?</h3>
          <a href="./"><button class="btn btn-secondary btn-lg py-3 btn-block" type="submit">Ir para o site</button></a>        
        </div>
      </div>
    </div>
  </div>

  
  <div class="untree_co-section justify-content-center">
    <div class="container">
      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">

            <table class="table">
              <thead>
                <tr>
                  <th class="product-thumbnail">
                    <a href="{$PAG_CONTA}"><button class="btn btn-info btn-lg py-3 btn-block" type="submit">Minha Conta</button></a>
                  </th>
                  <th class="product-name">
                    <a href="{$PAG_CLIENTE_PEDIDOS}"><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Pedidos</button></a>
                  </th>
                  <th class="product-price">
                    <a href="{$PAG_CLIENTE_DADOS}"><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Meus Dados</button></a>
                  </th>
                  <th class="product-quantity">
                    <a href="{$PAG_CARRINHO}"><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Carrinho</button></a>
                  </th>
                  <th class="product-total">
                    <a href="{$PAG_CLIENTE_SENHA}"><button class="btn btn-warning btn-lg py-3 btn-block" type="submit">Alterar Senha</button></a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="5" class="table-active">
                    <a href="{$PAG_LOGOFF}"><button class="btn btn-danger btn-lg py-3 btn-block" type="submit">Sair</button></a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
      </div>

    </div>
  </div>
{if $LOGADO == true}


  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end d-flex justify-content-center">
        <div class="col-lg-6">
          <h3>Olá <b>{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h3>        
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
                    <a href=""><button class="btn btn-info btn-lg py-3 btn-block" type="submit">Minha Conta</button></a>
                  </th>
                  <th class="product-name">
                    <a href=""><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Pedidos</button></a>
                  </th>
                  <th class="product-price">
                    <a href=""><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Meus Dados</button></a>
                  </th>
                  <th class="product-quantity">
                    <a href=""><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Carrinho</button></a>
                  </th>
                  <th class="product-total">
                    <a href=""><button class="btn btn-warning btn-lg py-3 btn-block" type="submit">Alterar Senha</button></a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="5" class="table-active">
                    <a href=""><button class="btn btn-danger btn-lg py-3 btn-block" type="submit">Sair</button></a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
      </div>

    </div>
  </div>

{else}

  <div class="untree_co-section">
    <div class="container">
      
      <div class="row justify-content-center">
        <div class="col-md-6 mb-2 mb-md-0">
          <h2 class="h3 mb-3 text-black">Login</h2>
          <div class="p-3 p-lg-5 border">

          <form name="cliente_login" method="post" action="">
            <div class="form-group row">
              <div class="col-md-12">
                <label class="text-black">Email: </label>
                <input type="email" class="form-control" name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label class="text-black">Senha: <span class="text-danger">*</span></label>
                <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>
              </div>
            </div>

            <div class="form-group">
              <button class="btn btn-black btn-lg py-3 btn-block">Entrar</button>
            </div>

            <div class="form-group">
                <table class="table site-block-order-table mb-5 d-flex justify-content-center">
                  <thead>
                    <th><a href="{$PAG_CADASTRO}"><button class="btn btn-info btn-sm" type="button" id="button-addon2">Novo Cadastro</button></a></th>
                    <th><a href="{$PAG_RECOVERY}"><button class="btn btn-info btn-sm" type="button" id="button-addon2">Esqueci a Senha</button></a></th>
                  </thead>
                </table>
            </div>
          </form>

          </div>
        </div>

      </div>
      <!-- </form> -->
    </div>
  </div>

{/if}
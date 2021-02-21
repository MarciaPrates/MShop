<?php
/* Smarty version 3.1.39, created on 2021-02-21 20:43:03
  from 'C:\xampp\htdocs\MShop\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6032b7c73b04c1_68465748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b3019715c5c6d421d249a5465b31e55fdd257e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\login.tpl',
      1 => 1613433922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6032b7c73b04c1_68465748 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


  

<?php } else { ?>

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
                    <th><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
"><button class="btn btn-info btn-sm" type="button" id="button-addon2">Novo Cadastro</button></a></th>
                    <th><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
"><button class="btn btn-info btn-sm" type="button" id="button-addon2">Esqueci a Senha</button></a></th>
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

<?php }
}
}

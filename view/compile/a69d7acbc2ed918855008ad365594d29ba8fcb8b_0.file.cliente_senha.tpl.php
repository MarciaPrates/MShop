<?php
/* Smarty version 3.1.39, created on 2021-03-28 23:47:58
  from 'C:\xampp\htdocs\MShop\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060f98e7611a1_25769619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a69d7acbc2ed918855008ad365594d29ba8fcb8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\cliente_senha.tpl',
      1 => 1616968037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060f98e7611a1_25769619 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="untree_co-section" id="senha-alterar">
    <div class="container">
      
      <div class="row justify-content-center">
        <div class="col-md-6 mb-2 mb-md-0">
          <h2 class="h3 mb-3 text-black">Alterar senha</h2>
          <div class="p-3 p-lg-5 border">

          <form name="alterarsenha" method="post" action="">
            <div class="form-group row">
              <div class="col-md-12">
                <label class="text-black">Digite sua senha atual: </label>
                <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label class="text-black">Digite a nova senha: <span class="text-danger">*</span></label>
                <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <button class="btn btn-black btn-lg py-3 btn-block">Alterar</button>
            </div>

          </form>

          </div>
        </div>

      </div>
      <!-- </form> -->
    </div>
  </div><?php }
}

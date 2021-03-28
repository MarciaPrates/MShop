<?php
/* Smarty version 3.1.39, created on 2021-03-28 22:34:30
  from 'C:\xampp\htdocs\MShop\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060e856efec62_75007683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcb6cdcf4b9f12b78a34b910b3a2f53d062cf2c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\clientes_recovery.tpl',
      1 => 1616963668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060e856efec62_75007683 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="untree_co-section">
    <div class="container">
      
      <div class="row justify-content-center">
        <div class="col-md-6 mb-2 mb-md-0">
          <h2 class="h3 mb-3 text-black">Recuperação de senha</h2>
          <div class="p-3 p-lg-5 border">

          <form name="recuperarsenha" method="post" action="">
            <div class="form-group row">
              <div class="col-md-12">
                <label class="text-black">Email: </label>
                <input type="email" name="cli_email" id="cli_email" class="form-control" required placeholder="Digite seu email cadastrado">
              </div>
            </div>

            <div class="form-group">
              <button class="btn btn-black btn-lg py-3 btn-block">Recuperar Senha</button>
            </div>
          </form>

          </div>
        </div>

      </div>
      <!-- </form> -->
    </div>
  </div><?php }
}

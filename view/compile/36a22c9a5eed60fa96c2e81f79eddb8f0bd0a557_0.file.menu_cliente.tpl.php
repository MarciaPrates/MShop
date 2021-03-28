<?php
/* Smarty version 3.1.39, created on 2021-03-28 22:21:48
  from 'C:\xampp\htdocs\MShop\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060e55cbb5448_83640965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a22c9a5eed60fa96c2e81f79eddb8f0bd0a557' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\menu_cliente.tpl',
      1 => 1616962905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060e55cbb5448_83640965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end d-flex justify-content-center">
        <div class="col-lg-6">
          <h3>Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo(a)! O que deseja fazer agora?</h3>
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
"><button class="btn btn-info btn-lg py-3 btn-block" type="submit">Minha Conta</button></a>
                  </th>
                  <th class="product-name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
"><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Pedidos</button></a>
                  </th>
                  <th class="product-price">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
"><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Meus Dados</button></a>
                  </th>
                  <th class="product-quantity">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><button class="btn btn-success btn-lg py-3 btn-block" type="submit">Carrinho</button></a>
                  </th>
                  <th class="product-total">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
"><button class="btn btn-warning btn-lg py-3 btn-block" type="submit">Alterar Senha</button></a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="5" class="table-active">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
"><button class="btn btn-danger btn-lg py-3 btn-block" type="submit">Sair</button></a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
      </div>

    </div>
  </div><?php }
}

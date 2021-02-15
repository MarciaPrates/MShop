<?php
/* Smarty version 3.1.38, created on 2021-02-15 15:04:43
  from 'C:\xampp\htdocs\MShop\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602a7f7bce08a7_68663956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d4507be25a0cda25d5c6692ff4db353b0d82e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\pedido_confirmar.tpl',
      1 => 1612220152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a7f7bce08a7_68663956 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Finalizando Pedido</h1>        
        </div>
      </div>
    </div>
  </div>

  

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagem</th>
                  <th class="product-name">Produto</th>
                  <th class="product-price">Preço</th>
                  <th class="product-quantity">Quantidade</th>
                  <th class="product-total">SubTotal</th>
                </tr>
              </thead>
              <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                <tr>
                  <td class="product-thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h5 class="h5 text-black"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                  <td>
                    <!--<div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
                      </div>-->
                      <span class="text-black"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</span>
                      <!--<div class="input-group-append">
                        <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>-->

                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                  
                </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              </tbody>
            </table>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
              <button class="btn btn-outline-black btn-sm btn-block"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Voltar para o Carrinho</a></button>
            </div>
            <div class="col-md-6">
              <!--<button class="btn btn-black btn-sm btn-block">Atualizar Carrinho</button>-->
            </div>
          </div>
          <!--<div class="row">
            <div class="col-md-12">
              <label class="text-black h4" for="coupon">Cupom</label>
              <p>Coloque seu cupom aqui.</p>
            </div>
            <div class="col-md-8 mb-3 mb-md-0">
              <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
            </div>
            <div class="col-md-4">
              <button class="btn btn-black">Aplicar cupom</button>
            </div>
          </div>-->
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
                  <strong class="text-black">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</strong>
                </div>
              </div>

              <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" type="submit">Finalizar Compra</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php }
}

<?php
/* Smarty version 3.1.38, created on 2021-01-30 22:31:36
  from 'C:\xampp\htdocs\MShop\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6015d0385f7a87_30302471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6812e7d513faa389e0e9e1166cdedaa200c0afbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\carrinho.tpl',
      1 => 1612042292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015d0385f7a87_30302471 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Carrinho</h1>  
          <p class="mb-2"><a href="#">Início</a> / <strong>Carrinho</strong></p>        
        </div>
      </div>
    </div>
  </div>

  

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
                  <th class="product-price">Preço</th>
                  <th class="product-quantity">Quantidade</th>
                  <th class="product-total">SubTotal</th>
                  <th class="product-remove">Remover</th>
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
                    <div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                  
                    <td>
                      <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                        <button class="btn btn-black btn-sm" type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">X</button>
                      </form>
                  
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
              <button class="btn btn-black btn-sm btn-block">Atualizar Carrinho</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-outline-black btn-sm btn-block">Continue Comprando</button>
            </div>
          </div>
          <div class="row">
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
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
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

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Finalizar Compra</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php }
}

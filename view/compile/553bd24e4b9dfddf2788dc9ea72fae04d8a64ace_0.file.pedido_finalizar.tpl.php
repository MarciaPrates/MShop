<?php
/* Smarty version 3.1.39, created on 2021-02-21 21:46:26
  from 'C:\xampp\htdocs\MShop\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6032c6a23cd738_13987704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '553bd24e4b9dfddf2788dc9ea72fae04d8a64ace' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\pedido_finalizar.tpl',
      1 => 1613399314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6032c6a23cd738_13987704 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Finalizar Compra</h1>     
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

            </div>
          </div>
        </div>
      </div>



      <div class="row mt-4">
        <div class="col-md-12 pl-5">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12 text-center border-bottom mb-3">
                  <h3 class="text-black h4 text-uppercase">Forma de Pagamentos:</h3>
                </div>
              </div>
              <div class="row mb-1">
                <div class="col-md-6 justify-content-end">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-6 justify-content-end">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/deposito.gif" alt="Image" class="img-fluid"></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php }
}

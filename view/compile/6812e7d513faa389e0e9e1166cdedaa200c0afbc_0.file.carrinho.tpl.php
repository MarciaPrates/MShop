<?php
/* Smarty version 3.1.39, created on 2021-03-07 17:00:12
  from 'C:\xampp\htdocs\MShop\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6044f88ca5a828_02419143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6812e7d513faa389e0e9e1166cdedaa200c0afbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\carrinho.tpl',
      1 => 1615132805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044f88ca5a828_02419143 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Carrinho</h1>      
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
                  
                    <td>
                        <button class="btn btn-black btn-sm" type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">X</button>
                        <input type="hidden" name="acao" value="del">
                  
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
              <button class="btn btn-outline-black btn-sm btn-block"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Continue Comprando</a></button>
            </div>
            <div class="col-md-6">
              <!--<button class="btn btn-black btn-sm btn-block">Atualizar Carrinho</button>-->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="text-black h4">Frete</label>
              <p>Calcule o frete aqui.</p>
            </div>
            <div class="col-md-8 mb-3 mb-md-0" id="dadosfrete">
              <input type="hidden" name="peso_frete" id="peso_frete" value="2" class="form-control " readonly>

              <input type="text" name="cep_frete" value="" class="form-control py-3" id="cep_frete" placeholder="Digite o CEP">

              <input type="hidden" name="frete_valor" id="frete_valor" value="0">
            </div>

            <div class="col-md-4">
              <button class="btn btn-primary" id="buscar_frete">Calcular</button>
            </div>
            <div class="col-md-12">
                <span id="frete"></span>
            </div>

          </div>

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

              <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" type="submit">Confirmar Pedido</button>
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

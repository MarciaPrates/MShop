<?php
/* Smarty version 3.1.39, created on 2021-04-02 16:46:21
  from 'C:\xampp\htdocs\MShop\view\cliente_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6067748dc2af44_72145547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bbc4b3d0e5c098bddc111ca2e33ff82ba4ee0c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\cliente_itens.tpl',
      1 => 1617392722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6067748dc2af44_72145547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-heading bg-light" id="senha-alterar">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Dados do pedido</h1>      
        </div>
      </div>
    </div>
  </div>

  

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-success">
                  <th class="product-thumbnail"><b>Data:</b> </th>
                  <th class="product-name"><b>Hora:</b> </th>
                  <th class="product-price"><b>Ref:</b> </th>
                  <th class="product-quantity"><b>Status:</b> </th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="product-thumbnail"><?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
                  <td class="product-name"><?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
                  <td>
                      <span class="text-black"><?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</span>
                  </td>
                  
                </tr>

              </tbody>
            </table>
          </div>
      </div>


      <!-- listagem dos itens -->
      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-info">
                  <th class="product-thumbnail">Foto</th>
                  <th class="product-name">Item</th>
                  <th class="product-price">Valor</th>
                  <th class="product-quantity">X</th>
                  <th class="product-quantity">SubTotal</th>
                </tr>
              </thead>
              <tbody>
              	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <tr>
                  <td class="product-thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt="">
                  </td>
                  <td class="product-name">
                    <h5 class="h5 text-black"><?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</h5>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                  
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              </tbody>
            </table>
          </div>
      </div>


      <div class="row mb-5 justify-content-center">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-warning">
                  <th class="product-name"><b>Frete:</b></th>
                  <th class="product-name"><b>Total:</b></th>
                  <th class="product-price"><b>Final:</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <h5 class="h5 text-black">R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</h5>
                  </td>
                  <td class="product-name">
                    <h5 class="h5 text-black">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h5>
                  </td>
                  <td><h5 class="h5 text-black">R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h5></td>
                  
                </tr>

              </tbody>
            </table>
          </div>
      </div>



      <!--METODO DE PAGAMENTO-->
      <div class="row mt-4">
        <div class="col-md-12 pl-5">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12 text-center border-bottom mb-3">
                  <h3 class="text-black h4 text-uppercase">Forma de Pagamento:</h3>
                </div>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'NAO') {?> 
              <div class="row mb-1">
                <div class="col-md-4 justify-content-end">
                	<button class="btn btn-success btn-lg btn-block" onclick="PagSeguroLightbox({
				    code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
				    }, {
				    success : function(transactionCode) {
				      alert('Transação efetuada - ' + transactionCode);
				        window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
				    },
				    abort : function() {
				       alert('Erro no processo de pagamento');
				         window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
				    }
				});   

				"> Pague com o Pagseguro </button>
                	<a href="" class="gal-item" data-fancybox="gal"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""></a>
                	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                </div>
                <div class="col-md-4 justify-content-end">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/deposito.gif" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 justify-content-end">
                  <a href="" class="gal-item" data-fancybox="gal"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/pix.png" alt="Image" class="img-fluid"></a>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div><?php }
}

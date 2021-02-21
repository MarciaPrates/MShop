<?php
/* Smarty version 3.1.39, created on 2021-02-21 21:45:31
  from 'C:\xampp\htdocs\MShop\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6032c66b655852_56526746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e0e16c4c1f06f5dd2e4393231f9a2e1f9e0c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\produtos_info.tpl',
      1 => 1613401475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6032c66b655852_56526746 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
<div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2>
          <div class="p-3 p-lg-5 border">
            <div class="form-group">
              <span class=""><span class="icon-play"></span></span>
              <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="Image" class="img-fluid rounded">
            </a>
            </div>
            <hr class="linha" id="linha">
            <div class="form-group row mt-5">
              
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
              <div class="col-md-6">

                <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="Image" class="img-fluid rounded">
                
              </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        </div>


        <div class="col-md-7">

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Métodos de pagamento:</h2>
              <div class="p-3 p-lg-3 border d-flex justify-content-center">
                <div class="input-group w-75">
                	<a href="" class="gal-item" data-fancybox="gal"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="Image" class="img-fluid"></a>
                </div>

              </div>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Informações</h2>
              <div class="p-3 p-lg-5 border">
                <table class="table site-block-order-table mb-5">
                  <thead>
                    <th>Nome</th>
                    <th>Valor</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 <strong class="mx-2">x</strong> 1</td>
                      <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                    </tr>
                  </tbody>
                  <thead class="mt-5">
                    <th>Descrição</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</td>
                    </tr>
                  </tbody>
                </table>

                <div class="border p-3 mb-3">
                  	<form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                		<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                		<input type="hidden" name="acao" value="add">
            			<button class="btn btn-success btn-lg py-3 btn-block">Adicionar no Carrinho</button>
             		</form> 
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- </form> -->
    </div>
  </div>

   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

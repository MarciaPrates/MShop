<?php
/* Smarty version 3.1.39, created on 2021-04-02 13:21:52
  from 'C:\xampp\htdocs\MShop\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606744a011e3d0_10830101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb41688fc734c4138c75844ffa521de7c38adff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\clientes_pedidos.tpl',
      1 => 1617380509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606744a011e3d0_10830101 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-heading bg-light" id="secao-cliente-pedidos">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h1>Meus Pedidos</h1>        
      </div>
    </div>
  </div>
</div>


<div class="untree_co-section">
  <div class="container">
    <div class="row mb-2">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <?php if ($_smarty_tpl->tpl_vars['PEDIDOS_QUANTIDADE']->value > 0) {?>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="product-name">Data</th>
                <th class="product-price">Hora</th>
                <th class="product-quantity">Ref</th>
                <th class="product-total">Status</th>
                <th class="product-remove"></th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>


                <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?>
                <td>
                  <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span>
                </td>
                <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Pago') {?>
                <td>
                  <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span>
                  <?php } else { ?>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                  <?php }?>
                </td>


                <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">

                 <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                 <td style="width: 10%"><button class="btn btn-info"> Detalhes</button></td>

               </form>


             </tr>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           </tbody>
         </table>

         <?php } else { ?>
         <h4 class="alert alert-danger text-center mt-5 mb-5"> Você não tem nenhum pedido ainda! </h4>
         <?php }?>
       </div>
     </form>
   </div>

 </div>
</div>      <?php }
}

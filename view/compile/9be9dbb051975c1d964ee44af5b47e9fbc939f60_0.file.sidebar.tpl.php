<?php
/* Smarty version 3.1.39, created on 2021-03-13 21:04:44
  from 'C:\xampp\htdocs\MShop\view\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604d1adcb62da6_97895454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be9dbb051975c1d964ee44af5b47e9fbc939f60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\sidebar.tpl',
      1 => 1615665882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604d1adcb62da6_97895454 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-4">

          <div class="d-flex sort align-items-center justify-content-lg-end">
            <strong class="mr-3">Sort by:</strong>
            <form action="#">
              <select class="" required>
                <option value="">Newest Items</option>
                <option value="1">Best Selling</option>
                <option value="2">Price: Ascending</option>
                <option value="2">Price: Descending</option>
                <option value="3">Rating(High to Low)</option>
              </select>
            </form>
          </div>
        </div>

      <div class="row">

        <div class="col-md-3">
          <ul class="list-unstyled categories">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS2']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
 <span>2,919</span> </a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Todos <span>5,381</span></a></li>
          </ul>
        </div>

      </div><?php }
}

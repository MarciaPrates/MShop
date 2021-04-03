<?php
/* Smarty version 3.1.39, created on 2021-04-03 16:20:43
  from 'C:\xampp\htdocs\MShop\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068c00bdd3cc7_56865035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '435ebfa5e98d2d4c6289c06579751c4d17b02432' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\adm\\view\\adm_produtos.tpl',
      1 => 1617476846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068c00bdd3cc7_56865035 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light mb-5">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Gerenciar Produtos</h1>      
        </div>
      </div>
      <div class="row d-flex justify-content-end">
        <div class="col-md-3">
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
"><button class="btn btn-success btn-lg py-3">+ Novo Produto</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--     exibe mensagem caso nao encontre produtos -->
  <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
  <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
  <?php }?>


  <!--  começa lista de produtos  ---->

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
                  <th class="product-price">Categoria</th>
                  <th class="product-quantity">Preço</th>
                  <th class="product-total">Editar</th>
                  <th class="product-remove">Imagem</th>
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
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt="" >
                  </td>
                  <td class="product-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
                  <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                  <td>
                    <form name="proeditar" method="post" action="">
                      <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                      <button class="btn btn-success btn-lg py-1 btn-block"><h4>&#9998;</h4></button>
                    </form>
                  </td>
                  <td>
                    <form name="proimg" method="post" action="">
                      <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                      <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                      <button class="btn btn-info btn-lg py-1"><b>IMG</b></button>

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

      <!--  paginação inferior   -->  
      <section id="paginacao" class="row">
        <center>
          <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        </center>
      </section>


    </div>
  </div><?php }
}

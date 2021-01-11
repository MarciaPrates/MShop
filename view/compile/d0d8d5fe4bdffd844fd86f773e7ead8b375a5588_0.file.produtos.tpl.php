<?php
/* Smarty version 3.1.38, created on 2021-01-11 01:10:25
  from 'C:\xampp\htdocs\MShop\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_5ffb9771544102_16070133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0d8d5fe4bdffd844fd86f773e7ead8b375a5588' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\produtos.tpl',
      1 => 1610323801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffb9771544102_16070133 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="untree_co-section">
    <div class="container">

      <div class="row align-items-center mb-5">
        <div class="col-lg-8">
          <h2 class="mb-3 mb-lg-0">Produtos</h2>
        </div>
        <div class="col-lg-4">

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
      </div>

      <div class="row">

        <div class="col-md-3">
          <ul class="list-unstyled categories">
            <li><a href="#">New <span>2,919</span></a></li>
            <li><a href="#">Men <span>5,381</span></a></li>
            <li><a href="#">Women <span>7,119</span></a></li>
            <li><a href="#">Jewelries <span>1,012</span></a></li>
            <li><a href="#">Accessories <span>919</span></a></li>
            <li><a href="#">Shoes <span>4,344</span></a></li>
            <li><a href="#">Clothing <span>7,919</span></a></li>
          </ul>
        </div>
        <div class="col-md-9">

          <div class="row">
          	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
            	

              <div class="product-item">
                <a href="shop-single.html" class="product-img">
                  <span class="custom-badge new">New</span>
                  <img src="media/imagens/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="Image" class="img-fluid">
                </a>
                <h3 class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a></h3>
                <div class="price">
                  <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>
                </div>
              </div>

              

            </div>
            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>

          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="custom-pagination">
                <ul class="list-unstyled">
                  <li>
                    <a href="#">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>                      
                    </a>
                  </li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div> <!-- /.untree_co-section -->
      

      
    </body>


</html><?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-04-02 21:31:45
  from 'C:\xampp\htdocs\MShop\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6067b771b34d67_47042771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b0ee6d6aa609cd85dda23d2c8f7bf826392f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\adm\\view\\adm_index.tpl',
      1 => 1617409765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6067b771b34d67_47042771 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&amp;family=Muli:wght@400;700&amp;display=swap" rel="stylesheet">


  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/aos.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/style.css">

  <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  
  <nav class="site-nav mb-5">
    <div class="sticky-nav js-sticky-header">

      <div class="container position-relative">
        <div class="site-navigation text-center dark">
          <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
" class="logo menu-absolute m-0">M - SHOP<span class="text-primary">.</span></a>

          <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">Início</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
">Categorias</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
">Produtos</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
">Clientes</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
">Pedidos</a></li>
          </ul>
          

          

          <div class="menu-icons">

            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
" class="user-profile">
              <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?> <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <?php }?>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              </svg>
            </a>

            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="cart">
              <span class="item-in-cart">2</span>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>

          </div>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>
  
  
  <div class="owl-carousel owl-single home-slider" id="adm-image">
    <div class="item">
      <div class="untree_co-hero" id="adm-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/adm-banner.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center text-lg-center">

              <h1 class="mb-4 heading text-white">Painel
                <BR>
                <a class="text-info">Administrativo</a></h1>
                <div class="mb-5 text-white desc mx-auto">
                </div>

              <!--<p class="mb-0"><a href="#" class="btn btn-outline-black">Saiba Mais</a>
              </p>-->

            </div>
          </div>
        </div>
      </div> <!-- /.untree_co-hero -->
    </div>
  </div>

  <?php 


  Rotas::get_Pagina();


  ?>



  
  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="widget">
            <h2><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</h2> 
          </div>
        </div>
        <div class="col-lg-2">
          <div class="widget">
            <h3>Loja</h3>
            <ul class="list-unstyled">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Minha Conta</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">Sobre</a></li>
              <li><a href="#">FAQ</a></li>   
            </ul>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="widget">
            <h3>Categorias</h3>
            <ul class="list-unstyled">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>

              <li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></li>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="widget">
            <h3>Receba nosso conteúdo exclusivo</h3>
            <form action="#" class="subscribe">
              <div class="d-flex">
                <input type="email" class="form-control" placeholder="Seu Email">
                <input type="submit" class="btn btn-black" value="Assinar">
              </div>
            </form>
          </div>
        </div>
      </div>


      <div class="row mt-2">
        <div class="col-12 text-center copyright">
          <p>
            Feito por <a href="http://www.marciaprates.com" target="_blank" >Márcia Prates</a> - <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
.
          </p>

        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <a href="#content" class="back-to-top">Top</a>

  <?php echo '<script'; ?>
 src="https://unpkg.com/vue@2.2.4"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/vue-scrollto"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.sticky.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/aos.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/custom.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}

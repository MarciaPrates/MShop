<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&amp;family=Muli:wght@400;700&amp;display=swap" rel="stylesheet">


  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/bootstrap.min.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/animate.min.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/aos.css">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/css/style.css">

  <title>{$TITULO_SITE}</title>
</head>

<body>

  <div class="search-form" id="search-form">
    <form action="#">
      <input type="search" class="form-control" placeholder="Pesquise o produto">
      <button class="button">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
        </svg>
      </button>
      <button class="button">
        <div class="close-search">
          <span class="icofont-close js-close-search"></span>
        </div>
      </button>

    </form>
  </div>

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
          <a href="{$GET_SITE_HOME}" class="logo menu-absolute m-0">M - SHOP<span class="text-primary">.</span></a>

          <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
            <li class="active"><a href="{$GET_SITE_HOME}">Início</a></li>
            <li class="has-children">
              <a>Categorias</a>
              <ul class="dropdown">

                {foreach from=$CATEGORIAS item=C}

                <li><a href="{$C.cate_link}">{$C.cate_nome}</a></li>

                {/foreach}

                <li><a href="{$PAG_PRODUTOS}">Todos</a></li>

              </ul>
              
            </li>
            <li><a href="{$PAG_PRODUTOS}">Produtos</a></li>
            <li><a href="{$PAG_SOBRE}">Sobre</a></li>
            <li><a href="{$PAG_CONTATO}">Contato</a></li>
          </ul>
          

          

          <div class="menu-icons">

            <a href="#" class="btn-custom-search" id="btn-search">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
            </a>

            <a href="{$PAG_MINHACONTA}" class="user-profile">
              {if $LOGADO == true} {$USER} {/if}
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              </svg>
            </a>

            <a href="{$PAG_CARRINHO}" class="cart">
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
  
  
  <div class="owl-carousel owl-single home-slider">
    <div class="item">
      <div class="untree_co-hero" style="background-image: url('{$GET_TEMA}/images/hero_bg_8.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-right text-lg-right">

              <h1 class="mb-4 heading text-dark">Loja Virtual
                <BR>
                <a class="text-info">M-Shop</a></h1>
              <div class="mb-5 text-white desc mx-auto">
              </div>

              <p class="mb-0"><a href="#" class="btn btn-outline-black">Saiba Mais</a>
              </p>

            </div>
          </div>
        </div>
      </div> <!-- /.untree_co-hero -->
    </div>
  </div>
    
            {php}
            

              Rotas::get_Pagina();


            {/php}

            

  
  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="widget">
            <h2>{$TITULO_SITE}</h2> 
          </div>
        </div>
        <div class="col-lg-2">
          <div class="widget">
            <h3>Loja</h3>
            <ul class="list-unstyled">
              <li><a href="{$PAG_MINHACONTA}">Minha Conta</a></li>
              <li><a href="{$PAG_CARRINHO}">Carrinho</a></li>
              <li><a href="{$PAG_CONTATO}">Contato</a></li>
              <li><a href="{$PAG_SOBRE}">Sobre</a></li>
              <li><a href="#">FAQ</a></li>   
            </ul>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="widget">
            <h3>Categorias</h3>
            <ul class="list-unstyled">
              {foreach from=$CATEGORIAS item=C}

              <li><a href="{$C.cate_link}">{$C.cate_nome}</a></li>

              {/foreach}
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
            Feito por <a href="http://www.marciaprates.com" target="_blank" >Márcia Prates</a> - {$DATA}.
            </p>

          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <a href="#content" class="back-to-top">Top</a>

    <script src="https://unpkg.com/vue@2.2.4"></script>
<script src="https://unpkg.com/vue-scrollto"></script>
    <script src="{$GET_TEMA}/tema/js/jquery-3.4.1.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/popper.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/bootstrap.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/owl.carousel.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.animateNumber.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.waypoints.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.fancybox.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.sticky.js"></script>
    <script src="{$GET_TEMA}/tema/js/aos.js"></script>
    <script src="{$GET_TEMA}/tema/js/custom.js"></script>

    
  </body>

</html>
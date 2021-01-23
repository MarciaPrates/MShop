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
          <a href="index.html" class="logo menu-absolute m-0">M - SHOP<span class="text-primary">.</span></a>

          <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
            <li class="active"><a href="{$GET_HOME}">Início</a></li>
            <li class="has-children">
              <a href="#">Categorias</a>
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
      <div class="untree_co-hero" style="background-image: url('{$GET_TEMA}/images/hero_bg_5.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center text-lg-center">

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Loja Virtual <a href="https://colorlib/">M-Shop</a></h1>
              <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
              </div>

              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-outline-black">Explore now</a></p>

            </div>
          </div>
        </div>
      </div> <!-- /.untree_co-hero -->
    </div>
  </div>
  
  <div class="untree_co-section py-4 bg-light">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
          <div class="feature h-100">
            <div class="icon">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z"/>
                <path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
              </svg>
            </div>
            <h3>Entregas</h3>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
          <div class="feature h-100">
            <div class="icon">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                <path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z"/>
              </svg>
            </div>
            <h3>Segurança</h3>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
          <div class="feature h-100">
            <div class="icon">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z"/>
                <path fill-rule="evenodd" d="M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z"/>
              </svg>
            </div>
            <h3>Qualidade</h3>
            <p>Far far away, behind the word mountains, far from the countries.</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

            {php}

              Rotas::get_Pagina();

            {/php}

  <div class="untree_co-section">
    <div class="container">

      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
          <div class="product-item">
            
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge new">New</span>
              <img src="{$GET_TEMA}/images/cloth_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Kiko Linen Slip Dress, Brown</a></h3>
            <div class="price">
              <span>£69.00</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="{$GET_TEMA}/images/cloth_2.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Sleeve Dress, White</a></h3>
            <div class="price">
              <del>£99.00</del> &mdash; <span>£69.00</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="{$GET_TEMA}/images/watch_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Hodina Watch</a></h3>
            <div class="price">
              <span>£29.00</span>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="{$GET_TEMA}/images/shoe_2.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Triangle Low White-Black</a></h3>
            <div class="price">
              <span>£29.00</span>
            </div>
          </div>

        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="{$GET_TEMA}/images/cloth_3.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Kid Dress, White</a></h3>
            <div class="price">
              <del>£99.00</del> &mdash; <span>£69.00</span>
            </div>
          </div>


        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="{$GET_TEMA}/images/shoe_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Lady Shoes, Brown</a></h3>
            <div class="price">
              <del>£99.00</del> &mdash; <span>£69.00</span>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  
  <div class="container">


    <div class="deal-hero" style="background-image: url('{$GET_TEMA}/images/hero_bg_1.jpg')"> 
      <div class="deal-contents">
        <span class="subtitle">Limited Offers 20% OFF</span>
        <h2 class="title">Week Deal</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla earum.</p>
        <a href="#" class="btn btn-black">Shop Now</a>
      </div>
    </div> <!-- /.deal-hero -->

  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h2 class="h3">Popular Items</h2>        
        </div>
        <div class="col-sm-6 carousel-nav text-sm-right">
          <a href="#" class="prev js-custom-prev-v2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
              <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
            </svg>
          </a>
          <a href="#" class="next js-custom-next-v2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
              <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </a>
        </div>
      </div> <!-- /.heading -->
      <div class="owl-3-slider owl-carousel">
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge new">New</span>
              <img src="{$GET_TEMA}/images/cloth_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Kiko Linen Slip Dress, Brown</a></h3>
            <div class="price">
              <span>£69.00</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="{$GET_TEMA}/images/cloth_2.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Sleeve Dress, White</a></h3>
            <div class="price">
              <del>£99.00</del> &mdash; <span>£69.00</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="{$GET_TEMA}/images/watch_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Hodina Watch</a></h3>
            <div class="price">
              <span>£29.00</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="{$GET_TEMA}/images/shoe_2.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Triangle Low White-Black</a></h3>
            <div class="price">
              <span>£29.00</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="{$GET_TEMA}/images/cloth_3.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Kid Dress, White</a></h3>
            <div class="price">
              <del>£99.00</del> &mdash; <span>£69.00</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="{$GET_TEMA}/images/shoe_1.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Lady Shoes, Brown</a></h3>
            <div class="price">
              <del>£99.00</del> &mdash; <span>£69.00</span>
            </div>
          </div>
        </div> <!-- /.item -->
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->  



  
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
            Feito por <a href="http://www.marciaprates.com" target="_blank" >Márcia Prates</a>.
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
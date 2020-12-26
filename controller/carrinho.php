<!doctype html>
<html lang="pt-br">


<body>
  

  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Carrinho</h1>  
          <p class="mb-4"><a href="#">Início</a> / <strong>Carrinho</strong></p>        
        </div>
      </div>
    </div>
  </div>

  

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
                  <th class="product-price">Preço</th>
                  <th class="product-quantity">Quantidade</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remover</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">T-Shirt</h2>
                  </td>
                  <td>R$49.00</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td>$49.00</td>
                  <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                </tr>

                <tr>
                  <td class="product-thumbnail">
                    <img src="images/cloth_2.jpg" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">Polo Shirt</h2>
                  </td>
                  <td>R$49.00</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td>R$49.00</td>
                  <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
              <button class="btn btn-black btn-sm btn-block">Atualizar Carrinho</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-outline-black btn-sm btn-block">Continue Comprando</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="text-black h4" for="coupon">Cupom</label>
              <p>Coloque seu cupom aqui.</p>
            </div>
            <div class="col-md-8 mb-3 mb-md-0">
              <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
            </div>
            <div class="col-md-4">
              <button class="btn btn-black">Aplicar cupom</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="text-black">Subtotal</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">R$230.00</strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">R$230.00</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Finalizar Compra</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>

    
  </body>

</html>
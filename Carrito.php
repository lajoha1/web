<?php
	include_once("Header.php");
?>


<section class="hero">
				<section class="container">
					<section class="row justify-content-between">
						<section class="col-lg-5">
							<section class="intro-excerpt">
								<h1>Tu Carrito</h1>
							</section>
						</section>
						<section class="col-lg-7">
							
						</section>
					</section>
				</section>
			</section>
            
<!--Inicio del contenido-->

		

		<section class="untree_co-section before-footer-section">
            <section class="container">
              <section class="row mb-5">
                <form class="col-md-12" method="post">
                  <section class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Imagen</th>
                          <th class="product-name">Producto</th>
                          <th class="product-price">Precio</th>
                          <th class="product-quantity">Cantidad</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Quitar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="product-thumbnail">
                            <img src="images/product-1.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Básico</h2>
                          </td>
                          <td>$500.00</td>
                          <td>
                            <section class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <section class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </section>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <section class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </section>
                            </section>
        
                          </td>
                          <td>$500.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr>
        
                        <tr>
                          <td class="product-thumbnail">
                            <img src="images/product-2.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Cucha Bowl</h2>
                          </td>
                          <td>$1,000.00</td>
                          <td>
                            <section class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <section class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </section>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <section class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </section>
                            </section>
        
                          </td>
                          <td>$1,000.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </section>
                </form>
              </section>
        
              <section class="row">
                <section class="col-md-6">
                  <section class="row mb-5">
                    <section class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Actualización</button>
                    </section>
                    <section class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continuar Comprando</button>
                    </section>
                  </section>
                  <section class="row">
                    <section class="col-md-12">
                      <label class="text-black h4" for="coupon">Cupones</label>
                      <p>Ingrese su código de cupón.</p>
                    </section>
                    <section class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Copon Codigo">
                    </section>
                    <section class="col-md-4">
                      <button class="btn btn-black">Aplicar cupón</button>
                    </section>
                  </section>
                </section>
                <section class="col-md-6 pl-5">
                  <section class="row justify-content-end">
                    <section class="col-md-7">
                      <section class="row">
                        <section class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Total</h3>
                        </section>
                      </section>
                      <section class="row mb-3">
                        <section class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </section>
                        <section class="col-md-6 text-right">
                          <strong class="text-black">$1,500.00</strong>
                        </section>
                      </section>
                      <section class="row mb-5">
                        <section class="col-md-6">
                          <span class="text-black">Total</span>
                        </section>
                        <section class="col-md-6 text-right">
                          <strong class="text-black">$1,670.00</strong>
                        </section>
                      </section>
        
                      <section class="row">
                        <section class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='Facturacion.php'" target="_blank">Pagar</button>
                        </section>
                      </section>
                    </section>
                  </section>
                </section>
              </section>
            </section>
          </section>
		
<!-- Fin Contenido -->

  <?php
	include_once("Footer.php");
?>
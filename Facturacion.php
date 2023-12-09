<?php
	include_once("Header.php");
?>
<!--Inicio del contenido-->

<section class="hero">
				<section class="container">
					<section class="row justify-content-between">
						<section class="col-lg-5">
							<section class="intro-excerpt">
								<h1>Facturación</h1>
							</section>
						</section>
						<section class="col-lg-7">
							
						</section>
					</section>
				</section>
			</section>

		<section class="untree_co-section">
		    <section class="container">
		      <section class="row mb-5">
		        <section class="col-md-12">
		        </section>
		      </section>
		      <section class="row">
		        <section class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Detalles de Facturación</h2>


                    <form action="factura.php" method="post">
                    <section class="p-3 p-lg-5 border bg-white">
                <section class="row">
                  <section class="col-6">
                    <section class="form-group">
                      <label class="text-black" for="lname">Nombre</label>
                      <input type="text" class="form-control" id="name"  name="txtNombre">
                    </section>
                  </section>
                </section>
                <section class="form-group">
                  <label class="text-black" for="email">Apellido</label>
                  <input type="text" class="form-control" id="c_lname"  name="txtApellido">
                </section>

                <section class="form-group mb-5">
                  <label class="text-black" for="message">Dirección</label>
                  <input type="text" class="form-control" id="c_address" cols="30" rows="5" name="txtDireccion">
                  </section>

                <section class="form-group">
                  <label class="text-black" for="email">Ciudad</label>
                  <input type="text" class="form-control" id="c_state_country"  name="txtCiudad">
                </section>

                <section class="form-group mb-5">
                  <label class="text-black" for="message">Email</label>
                  <input type="email" class="form-control" id="email" cols="30" rows="5" name="txtEmail">
                  </section>
                
                  <section class="form-group mb-5">
                  <label class="text-black" for="message">Teléfono</label>
                  <input type="text" class="form-control" id="c_phone" cols="30" rows="5" name="txtTelefono">
                  </section>
                <button type="submit" class="btn btn-primary-hover-outline">Enviar</button>
              </form>

                    <br>
                    <br>
                    <br>

		            <section class="form-group">
		              <label for="c_create_account" class="text-black" data-bs-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account">Crea una cuenta</label>
		              <section class="collapse" id="create_an_account">
		                <section class="py-2 mb-4">
		                  <p class="mb-3">Cree una cuenta ingresando la información a continuación. Si es un cliente recurrente, inicie sesión en la parte superior de la página.</p>
		                  <section class="form-group">
		                    <label for="c_account_password" class="text-black">Contraseña de la cuenta</label>
		                    <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
		                  </section>
		                </section>
		              </section>
		            </section>


		            <section class="form-group">
		              <label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Enviar a una direccion diferente</label>
		              <section class="collapse" id="ship_different_address">
		                <section class="py-2">
		     

		                </section>

		              </section>
		            </section>

	

		          </section>
		        </section>
		        <section class="col-md-6">

		          <section class="row mb-5">
		            <section class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Código de Cupón</h2>
		              <section class="p-3 p-lg-5 border bg-white">

		                <label for="c_code" class="text-black mb-3">Ingrese su código de cupón si tiene uno</label>
		                <section class="input-group w-75 couponcode-wrap">
		                  <input type="text" class="form-control me-2" id="c_code" placeholder="Código de Cupón" aria-label="Coupon Code" aria-describedby="button-addon2">
		                  <section class="input-group-append">
		                    <button class="btn btn-black btn-sm" type="button" id="button-addon2">Aplicar</button>
		                  </section>
		                </section>

		              </section>
		            </section>
		          </section>

		          <section class="row mb-5">
		            <section class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Tu Order</h2>
		              <section class="p-3 p-lg-5 border bg-white">
		                <table class="table site-block-order-table mb-5">
		                  <thead>
		                    <th>Producto</th>
		                    <th>Total</th>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <td>Básico <strong class="mx-2">x</strong> 1</td>
		                      <td>$500.00</td>
		                    </tr>
		                    <tr>
		                      <td>Cucha Bowl <strong class="mx-2">x</strong>   1</td>
		                      <td>$1,000.00</td>
		                    </tr>
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
		                      <td class="text-black">$1,500.00</td>
		                    </tr>
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Total de la Orden</strong></td>
		                      <td class="text-black font-weight-bold"><strong>$1,670.00</strong></td>
		                    </tr>
		                  </tbody>
		                </table>

		                <section class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Transferencia</a></h3>

		                  <section class="collapse" id="collapsebank">
		                    <section class="py-2">
		                      <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p></section></p>
		                    </section>
		                  </section>

		                <section class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque</a></h3>

		                  <section class="collapse" id="collapsecheque">
		                    <section class="py-2">
		                      <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
		                    </section>
		                  </section>
		                </section>
		                <section class="border p-3 mb-5">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

		                  <section class="collapse" id="collapsepaypal">
		                    <section class="py-2">
		                      <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
		                    </section>
		                  </section>
		                </section>

		                <section class="form-group">
		                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='Gracias.php'">Realizar pedido</button>
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

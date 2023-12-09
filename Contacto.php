<?php
	include_once("Header.php");
?>
<!--Inicio del contenido-->

<section class="hero">
				<section class="container">
					<section class="row justify-content-between">
						<section class="col-lg-5">
							<section class="intro-excerpt">
								<h1>Contacto</h1>
								<p class="mb-4">Estamos aquí para responder a tus preguntas, recibir tus comentarios y compartir ideas sobre un estilo de vida más verde.</p>
							</section>
						</section>
						</section>
					</section>
				</section>
			</section>
		
<!--Inicio del contenido-->


		<section class="untree_co-section">
      <section class="container">

        <section class="block">
          <section class="row justify-content-center">


            <section class="col-md-8 col-lg-8 pb-4">


              <section class="row mb-5">
                <section class="col-lg-4">
                  <section  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <section class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    </section> 
                    <section class="service-contents">
                      <p>Trabajo, FX2M+6GF, C. Los Cristianos, La Romana 22000</p>
                    </section> 
                  </section> 
                </section>

                <section class="col-lg-4">
                  <section  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <section class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg>
                    </section> 
                    <section class="service-contents">
                      <p>Ecopal@Cocopaldomain.com</p>
                    </section> 
                  </section> 
                </section>

                <section class="col-lg-4">
                  <section  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <section class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    </section> 
                    <section class="service-contents">
                      <p>(809)-556-5098</p>
                    </section> 
                  </section> 
                </section>
              </section>

              <form action="DatosContacto.php" method="post">
                <section class="row">
                  <section class="col-6">
                    <section class="form-group">
                      <label class="text-black" for="fname">Nombre </label>
                      <input type="text" class="form-control" id="fname"  name="txtNombre">
                    </section>
                  </section>
                  <section class="col-6">
                    <section class="form-group">
                      <label class="text-black" for="lname">Apellido</label>
                      <input type="text" class="form-control" id="lname"  name="txtApellido">
                    </section>
                  </section>
                </section>
                <section class="form-group">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" class="form-control" id="email"  name="txtEmail">
                </section>

                <section class="form-group mb-5">
                  <label class="text-black" for="message">Mensaje</label>
                  <input type="" class="form-control" id="message" cols="30" rows="5" name="txtMensaje">
                  </section>

                <button type="submit" class="btn btn-primary-hover-outline">Enviar</button>
              </form>

            </section>
          </section>
        </section>
      </section>
    </section>
  </section>

  <!-- Fin -->

  <?php
	include_once("Footer.php");
?>
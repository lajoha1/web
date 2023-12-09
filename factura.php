<?php
	include_once("Header.php");
?>
<!--Inicio del contenido-->


                       <?php  
						if($_POST){
							/*1-Recibir los datos del Form*/
							$Nombre = $_POST['txtNombre'];
							$Apellido = $_POST['txtApellido'];
							$Dirección = $_POST['txtDireccion'];
                            $Ciudad = $_POST['txtCiudad'];
							$Email = $_POST['txtEmail'];
                            $Teléfono = $_POST['txtTelefono'];							
							
							/*2-Validar los datos*/
							if(empty  ($Nombre) ){ echo"<h3>Debe escribir el Nombre</h3>";}
							if(empty  ($Apellido) ){ echo"<h3>Debe escribir el Apellido</h3>";}
							if(empty  ($Dirección) ){ echo"<h3>Indique su Direccion</h3>";}
							if(empty  ($Ciudad) ){ echo"<h3>Escriba su Ciudad</h3>";}
                            if(empty  ($Email) ){ echo"<h3>Indique su Email</h3>";}
							if(empty  ($Teléfono) ){ echo"<h3>Escriba su Telefono</h3>";}
							
							if( !empty($Nombre) && !empty($Apellido) && !empty($Dirección) && !empty($Ciudad) && !empty($Email) && !empty($Teléfono)){ 

								/*3-Nos conectamos al Servidor MySQL y guardamos*/
								$Servidor="localhost";
								$User ="root";
								$Pass ="";
								$DB ="db_web_g4";
								$Con = mysqli_connect($Servidor, $User, $Pass, $DB) or die("Error con la Base de datos");
								
								/*Creamos la sentencia SQL para guardar*/
								$Guardar="
									INSERT INTO db_wp_20211793_web_g1_2 (nombre, apellido, direccion, ciudad, email, telefono)
									VALUES ('$Nombre', '$Apellido', '$Dirección', '$Ciudad', '$Email', '$Teléfono')
								";
								if(mysqli_query($Con, $Guardar)){
									echo"<h3>Registro completo.</h3>";
								}else
								{
									echo"<h3>Ha fallado el registro.</h3>";
								}	
							}
							
						}
					?>
                </section>
            </section>
        </section>
    </section>
<!--Fin del contenido-->
<?php
	include_once("Footer.php");
?>
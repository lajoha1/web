<?php
	include_once("Header.php");
?>
<!--Inicio del contenido-->


<?php 
						if($_POST){
							/*1-Recibir los datos del Form*/
							$Nombre = $_POST['txtNombre'];
							$Apellido = $_POST['txtApellido'];
							$Email = $_POST['txtEmail'];
							$Mensaje = $_POST['txtMensaje'];
							
							/*2-Validar los datos*/
							if(empty  ($Nombre) ){ echo"<h3>Debe escribir el Nombre</h3>";}
							if(empty  ($Apellido) ){ echo"<h3>Debe escribir el Apellido</h3>";}
							if(empty  ($Email) ){ echo"<h3>Indique su Email</h3>";}
							if(empty  ($Mensaje) ){ echo"<h3>Escriba su Mensaje</h3>";}
							
							if( !empty($Nombre) && !empty($Apellido) && !empty($Email) && !empty($Mensaje) ){ 
								/*3-Nos conectamos al Servidor MySQL y guardamos*/
								$Servidor="localhost";
								$User ="root";
								$Pass ="";
								$DB ="db_web_g4";
								$Con = mysqli_connect($Servidor, $User, $Pass, $DB) or die("Error con la Base de datos");
								
								/*Creamos la sentencia SQL para guardar*/
								$Guardar="
									INSERT INTO db_wp_20211793_web_g1_PF (nombre, apellido, email, mensaje)
									VALUES ('$Nombre', '$Apellido', '$Email', '$Mensaje')
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
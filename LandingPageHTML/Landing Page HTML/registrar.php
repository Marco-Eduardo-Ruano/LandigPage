<?php

include("con_db.php");

if(isset($_POST['Enviar'])){
if(strlen($_POST['nombre']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['comentarios']) >=1 ){
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $comentarios = trim($_POST['comentarios']);
            $consulta = "INSERT INTO datos(`nombre`, `email`, `comentarios`) VALUES ('$nombre','$email','$comentarios')";
            $resultado = mysqli_query($conex,$consulta);
                if($resultado){
                          ?>
                        <h4 class="ok">Informacion Enviada</h4>
                          <?php
                } else {
                             ?>
                        <h4 class="bad">Informacion NO Enviada</h4>
                           <?php
                }
            }     else{
                ?>
                <h4 class="bad">completa la Informacion</h4>
                  <?php
        }
}
?>
<?php

include ('conexion.php');

$usuario = $_POST['name'];
$apellido = $_POST['last_name'];
$empleado = $_POST['empleado'];
$contraseña = $_POST['password'];

    $sql = mysqli_query($conexion,"INSERT INTO users (ID, nombre, apellido, num_empleado, contraseña) VALUES (NULL, '$usuario', '$apellido', '$empleado', '$contraseña')");
    if($sql){
                    
        $alert='<script>function fntDelPersona(id){swal("Good job!", "You clicked the button!", "success");}</script>';
        header("Refresh: 10");
        ?>
        <?php
        header("Location:../pages/account.html");
        ?>
        <?php
     }else{
        $alert='<p class="msg_error">El resguardatario no se ha podido registrar.</p>';
    }


?>

?>
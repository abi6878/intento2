<?php
    include("php/conexion.php");

    if(isset($_POST['enviar'])){
        $usu = $_POST['usu'];
        $pass = $_POST['pass'];
        
        $veri = "SELECT * FROM `registros` WHERE `usuario`= '$usu' AND `password`= '$pass'";
        
        $resultado = $conex-> query($veri);
        
        if($resultado->num_rows == 1){
            $fila = $resultado->fetch_assoc();
            if($fila['admin'] == 1){
                echo '<script>
                    window.location = "mostrar.php";
                    </script>';
                exit();
            } else{
                echo '<script>
                    window.location = "TuPalco_usuario.html";
                    </script>';
                exit();
            }
        } else{
            echo '<script> alert("Usuario no encontrado");
            window.location = "TuPalco_Inicio.html";
            </script>';
        }
    }

$conex->close();
?>
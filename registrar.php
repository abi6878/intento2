<?php
    include("php/conexion.php");
        
        if(isset($_POST['enviar'])){
            
                $app = $_POST['app'];
                $apm = $_POST['apm'];
                $nombre =  $_POST['nombre'];
                $fecha =  $_POST['fechaN'];
                $genero = $_POST['genero'];
            
                $calle= $_POST['calle'];
                $numero= $_POST['num'];
                $colonia= $_POST['colonia'];
                $municipio =  $_POST['municipio'];
                $estado =  $_POST['estado'];
                $cPostal =  $_POST['postal'];
                $telefono =  $_POST['tel'];
            
                $correo =  $_POST['correo'];
                $usuario =  $_POST['usuario'];
                $password =  $_POST['pass'];
                
                
                 $veri_usuario = mysqli_query ($conex, "SELECT * FROM `registros` WHERE `usuario` = '$usuario'");
            
                if(mysqli_num_rows($veri_usuario)>0){
                    echo '<script>
                    alert("El usuario ya esta registrado");
                    window.location = "TuPalco_registro.html";
                    </script>';
                    exit;
                    }
            
                $veri_correo = mysqli_query($conex, "SELECT * FROM `registros` WHERE `correo`= '$correo'");
            
                if(mysqli_num_rows($veri_correo)>0){
                    echo '<script>
                    alert("El correo ya esta registrado");
                    window.location = "TuPalco_registro.html";
                    </script>';
                    exit;
                    }
            
                $consulta = "INSERT INTO `registros`(`app`, `apm`, `nombre`, `fecha_n`, `genero`, `calle`, `numero`, `colonia`, `municipio`, `estado`, `cp`, `telefono`, `correo`, `usuario`, `password`, `admin`) VALUES ('$app',
                '$apm',
                '$nombre',
                '$fecha',
                '$genero',
                '$calle',
                '$numero',
                '$colonia',
                '$municipio',
                '$estado',
                '$cPostal',
                '$telefono',
                '$correo',
                '$usuario',
                '$password',
                '0')";
            
                $resultado = mysqli_query($conex, $consulta);
                                    
            }

        header("Location: TuPalco_Inicio.html");
        $conex -> close();
                   
?>
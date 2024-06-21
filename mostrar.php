<?php
    include("php/conexion.php");
    $usuarios = "SELECT * FROM `registros`";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/estilo_admin.css">
</head>
<body>
  
       <table class="menu" rules="none">
           <tr>
              <td>&nbsp;&nbsp;<img class="logo" src="css/imagenes/Logo.png"></td>
               <td class="opcion"><p><a href="index.html">Cerrar Sesion</a></p></td>
           </tr>
       </table>
       
   <center>
    <table class="tabla">
        <tr>
            <td class="titulo">USUARIOS REGISTRADOS</td>
        </tr>
        
    </table> 
    
    <table rules="all" class="tabla_campo">   
        <tr>
            <td class="campo">Apellido Paterno</td>
            <td class="campo">Apellido Materno</td>
            <td class="campo">Nombre(s)</td>
            <td class="campo">Fecha de Nacimiento</td>
            <td class="campo">Genero</td>
            <td class="campo">Calle</td>
            <td class="campo">No.</td>
            <td class="campo">Colonia</td>
            <td class="campo">Municipio</td>
            <td class="campo">Estado</td>
            <td class="campo">Codigo Postal</td>
            <td class="campo">telefono</td>
            <td class="campo">Correo</td>
            <td class="campo">Usuario</td>
            <td class="campo">Contrasena</td>
        </tr>
        <?php $resultado = mysqli_query($conex, $usuarios);
               while($fila=mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td class="fila"><?php echo $fila["app"] ?></td>
            <td class="fila"><?php echo $fila["apm"] ?></td>
            <td class="fila"><?php echo $fila["nombre"] ?></td>
            <td class="fila"><?php echo $fila["fecha_n"] ?></td>
            <td class="fila"><?php echo $fila["genero"] ?></td>
            <td class="fila"><?php echo $fila["calle"] ?></td>
            <td class="fila"><?php echo $fila["numero"] ?></td>
            <td class="fila"><?php echo $fila["colonia"] ?></td>
            <td class="fila"><?php echo $fila["municipio"] ?></td>
            <td class="fila"><?php echo $fila["estado"] ?></td>
            <td class="fila"><?php echo $fila["cp"] ?></td>
            <td class="fila"><?php echo $fila["telefono"] ?></td>
            <td class="fila"><?php echo $fila["correo"] ?></td>
            <td class="fila"><?php echo $fila["usuario"] ?></td>
            <td class="fila"><?php echo $fila["password"] ?></td>
            <td> </td>
        </tr>
        
        <?php } mysqli_free_result($resultado); ?>
        
    </table>
    </center>
</body>
</html>
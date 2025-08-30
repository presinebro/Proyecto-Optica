<html>
<head>

</head>

    <br><center>
<br><h2>Reserva de hora</br></h2><br><br>
<form method="post">
    <body background="lentes.jpg" >
<table border="0">
    <tr>
       <td>Rut:</td>
       <td><input type="text" name="txtrut" value=""><br></td>
    </tr>
    <tr>
       <td>Nombres:</td>
       <td><input type="text" name="txtnom" value=""><br>
    </tr>
    <tr>
       <td>Apellidos:</td>
       <td><input type="text" name="txtape" value=""><br></td>
    </tr>
    <tr>
       <td>Dirección:</td>
       <td><input type="text" name="txtdir" value=""><br></td>
    </tr>
    <tr>
                <td>Seleccione la sucursal:</td>
                <td>
                    <select name="txtsuc" value="">
                    <option value="">-Seleccione-</option>
                     <option value="Calle Las Hijuelas, Población San Guillermo de Puente Alto">Calle Las Hijuelas, Población San Guillermo de Puente Alto</option>
                     <option value="2Calle Alto Los Leones, Plaza Viva de Puente Alto">Calle Alto Los Leones, Plaza Viva de Puente Alto</option>
                     <option value="Avenida Parque Central, Ciudad del Este de Puente Alto">Avenida Parque Central, Ciudad del Este de Puente Alto</option>
                     <option value="Calle Arauco, Villa O'Higgins de La Florida">Calle Arauco, Villa O'Higgins de La Florida</option>
                    </select> 
                <td>
            </tr>
    <tr>
       <td>Mail:</td>
       <td><input type="text" name="txtmai" value=""><br></td>
    </tr>
    <tr>
       <td>Fono:</td>
       <td><input type="text" name="txtfon" value=""><br></td>
    </tr>
    <tr>
       <td>Fecha:</td>
       <td><input type="date" name="txtfon" value=""><br></td>
    </tr>
  
</tr>

</center>

</table>
<td><input type="submit" name="btnagr" value="Agregar"><br></td>
</form>

<?php
error_reporting(0);
if ($_POST['btnagr'] == "Agregar"){
    
   include("funciones.php");
   $cnn = Conectar();
   $rut = $_POST['txtrut'];
   $nom = $_POST['txtnom'];
   $ape = $_POST['txtape'];
   $dir = $_POST['txtdir'];
   $suc = $_POST['txtsuc'];
   $mai = $_POST['txtmai'];
   $fon = $_POST['txtfon'];
   $fec = $_POST['txtfec'];
   $sql="insert into clientes values ('$rut','$nom','$ape','$dir','$suc','$mai','$fon','$fec')";
   mysqli_query($cnn, $sql);
   echo "<script>alert('Su hora ha sido agendada correctamente.')</script>";

}
?>

<br><br>
<a href="index.php"> Volver </a>

</body>


    </html>
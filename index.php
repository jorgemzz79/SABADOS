 <?php

include 'CONEXION/conexion.php';

$consultaSQL = "SELECT * FROM estados"; //sql consulta


//echo $consultaSQL;
$ConsultaEstadoNacimiento = mysqli_query($con, $consultaSQL);
            if(mysqli_num_rows($ConsultaEstadoNacimiento) == 0){
            }
            else{
                while($row = mysqli_fetch_assoc($ConsultaEstadoNacimiento)){
                    $estadoNacimientoModificado = $row['nombre'];
                    echo $estadoNacimientoModificado;echo "<br>";
            }
		  }
          echo "Esta es la respuesta desde la bd " .  $estadoNacimientoModificado;echo "<br>";


?>


 
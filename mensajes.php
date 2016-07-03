<?php

$emailsubject = $_POST['email-subject'];
$emailmessage = $_POST['email-message'];

$host_name = "db404613754.db.1and1.com";
$database = "db404613754";
$user_name = "dbo404613754";
$password = "cr3sp00";


$connect = mysqli_connect($host_name, $user_name, $password, $database);

$mensajes = [];
if ($resultado = mysqli_query($connect, "SELECT * FROM msgboda ORDER BY id DESC")) {
    /* obtener el array asociativo */
    while ($fila = mysqli_fetch_row($resultado)) {
        $mensajes[] = $fila;
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}


/* cerrar la conexión */
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Boda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Mensajes de confirmaci&oacute;n de asistencia</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>FECHA</th>
        <th>Asunto</th>
        <th>Mensaje</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($mensajes as $r){
            echo '<tr>';
            echo '<td>'.implode('</td><td>',$r).'</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
  </table>
</div>

</body>
</html>

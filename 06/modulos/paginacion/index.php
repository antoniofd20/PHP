<?php

  include_once('../../php/conexion.php');

  $pagina = isset($_GET['pag']) ? (int)$_GET['pag'] : 1;
  $personasPorPagina = 3;

  // OBTENER POSICION DONDE INICIA LA CONSULTA
  $inicio = ($pagina > 1) ? ($pagina * $personasPorPagina - $personasPorPagina) : 0;

  $query = $conexion->query(
    "SELECT SQL_CALC_FOUND_ROWS * FROM $db.personas
     LIMIT $inicio, $personasPorPagina"
  );

  if($query->num_rows == 0) {
    header("Location: index.php");
  }

  // OBTENER EL TOTAL DE PERSONAS
  $totalPersonas = $conexion->query(
      'SELECT FOUND_ROWS() as total'
  );
  $totalPersonas = $totalPersonas->fetch_assoc()['total'];

  // OBTENER EL NUMERO DE PAGINAS
  $numeroPaginas = ceil($totalPersonas / $personasPorPagina);

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/paginacion.css">
  <title>Paginacion</title>
</head>
<body>

  <header>
    <h1>Paginación</h1>
  </header>

  <main>
    <table class="tabla">
      <caption>Personas</caption>
      <colgroup>
        <col style="width: 200px">
        <col style="width: 150px">
        <col style="width: 150px">
        <col style="width: 300px">
      </colgroup>

      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Apodo</th>
          <th>Ocupacion</th>
        </tr>
      </thead>

      <tbody>
        <?php 
          while($q = $query->fetch_assoc()){
            $nombre = $q['nombre'];
            $apellido = $q['apellido'];
            $apodo = $q['apodo'];
            $ocupacion = $q['ocupacion'];
        ?>
        <tr>
          <td><?php echo $nombre; ?></td>
          <td><?php echo $apellido; ?></td>
          <td><?php echo $apodo; ?></td>
          <td><?php echo $ocupacion; ?></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  
    <section class="paginacion">
      <ul>
        <?php if($pagina == 1) : ?>
          <li class="disabled">&laquo;</li>
        <?php else : ?>
          <li><a href="index.php?pag=<?php echo $pagina - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php
          for ($i = 1; $i <= $numeroPaginas ; $i++) { 
            if($pagina == $i){
              echo "<li class='active'><a href='index.php?pag=$i'>$i</a></li>";
            } else {
              echo "<li><a href='index.php?pag=$i'>$i</a></li>";
            }
            
          }
        ?>

        <?php if($pagina == $numeroPaginas) : ?>
          <li class="disabled">&raquo;</li>
        <?php else : ?>
          <li><a href="index.php?pag=<?php echo $pagina + 1 ?>">&raquo;</a></li>
        <?php endif; ?>
      </ul>
    </section>
  </main>

  <footer>
    Fin de la pagina
  </footer>
  
</body>
</html>
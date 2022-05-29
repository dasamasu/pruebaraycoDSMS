<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    

  <div class="container">

    <h1>Prueba calculadora PHP</h1>

    <form id="formulario">
    <div class="form-control">
      
      <input type="number" class="form-control" id="firstNum" placeholder="Primer número">
    </div>
    <div class="form-control"> 
      <input type="text" class="form-control" id="secNum" placeholder="segundo número">
    </div>

    <div class="form-control"> 
      <select class="custom-select" id="option">
        
        <option selected> Operacion a realizar</option>
        <option value = "sumar">Suma</option>
        <option value = "restar">Resta</option>
        <option value = "multiplicar">Multiplicación</option>
        <option value = "dividir">División</option>

      </select>
    </div>

    <div class="form-control">
    <input type="text" class="form-control" id="resultado" placeholder="Resultado" readonly>
    </div>

    <button type="submit" class="btn btn-primary btn-block btn-lg" onclick="sending(event)" >Calcular</button>
    <button type="reset" class="btn btn-danger btn-block btn-lg">Limpiar</button>
    </form>
  </div>



<div class="container-sm position-absolute bottom-50 end-0 top-100 start-0" >
  <h2 style="text-align = center" >Actualice la pagina para ver el historial de operaciones en la tabla</h2>
<table class = "table table-striped table-dark table-bordered">
<tr>
    <td>Primer Número</td>
    <td>Operación</td>
    <td>Segundo Número</td>
    <td>Resultado</td>
    <td>Fecha</td>
    </tr>
  
  <?php

  $conection = pg_connect("host=ec2-44-196-174-238.compute-1.amazonaws.com  dbname = damm6ia26jqonh user=pfazglmvvtljxb password=46bb04a05c543b56f31c5cbb427c3ea078a8a38f9f49f891cc0108669b8df6f0");



  $queryShow = "SELECT * FROM pruebaheroku.numeros ORDER BY id DESC";
  $resultQuery = pg_query($conection, $queryShow);

  while ($show = pg_fetch_array($resultQuery)) {
    ?>

    <tr>
      <td><?php echo $show['numone'] ?></td>
      <td><?php echo $show['operation'] ?></td>
      <td><?php echo $show['numtwo'] ?></td>
      <td><?php echo $show['result'] ?></td>
      <td><?php echo $show['dates'] ?></td>
    </tr>

  <?php } ?>
  
</table>

</div>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
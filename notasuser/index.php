<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <link rel="stylesheet" href="./stylus/stylus.css">
    <h1>Escribe tus notas Favoritas</h1>

    <div class="container-fluid">
    <div class="container">
  <div class="row">
    <div class="col">
    <form action="./function/insert.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de nota</label>
    <input type="text" name="nom_not" class="form-control" id="exampleFormControlInput1" placeholder="Titulo de nota">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">TIPO DE NOTA</label>
    <select class="form-control" name="tipo" id="exampleFormControlSelect1">
      <option>IMPORTANTE</option>
      <option>URGENTE</option>
      <option>FAMILIAR</option>
      <option>PERSONAL</option>
      <option>Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">NOTA</label>
    <textarea name="nota" class="form-control" id="exampleFormControlTextarea1" rows=""></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
    <div class="col">
    <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de nota</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nota</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require("./connection/connecction.php");

                  $query = "SELECT * FROM notas_user";

                  $ejecutar = mysqli_query($connection, $query);

                  $contador = 1;

                  while($fila = mysqli_fetch_array($ejecutar)){

                  ?>
                  <tr>
                    <td><?php echo $contador;?></td>
                    <td><?php echo $fila['nom_not'];?></td>
                    <td><?php echo $fila['tipo'];?></td>
                    <td><?php echo $fila['nota'];?></td>
                    <td><a href="./function/update.php">editar</a></td>
                    <td><a href="./function/delete.php?id=<?php echo $fila['id_nota'];?>">eliminar</a></td>
                  </tr>
                  <?php $contador++;} ?>
                </tbody>
              </table>
    </div>
  </div>
</div>






























    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
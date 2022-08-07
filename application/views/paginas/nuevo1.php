<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>uso de index</title>
  </head>
  <body>
    <div class='conteiner'>
     <?php
    $materia=$_POST['materia'];
    $provincia=$_POST['provincia'];

    ?>
  <table class ='table table.dark'>
    <tbody>
      <tr>
        <td>Materia</td>
         <td>Provincia</td>
      </tr>

    </tbody>
     <tr>
      <td><?php echo $materia ?></td>
      <td><?php echo $provincia?></td>

     </tr>



  </table>


    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
  </body>
</html>
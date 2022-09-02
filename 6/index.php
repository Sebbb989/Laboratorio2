<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    <?php 
    
    $cal1 = $_GET["cal1"];
    $cal2 = $_GET["cal2"];
    $cal3 = $_GET["cal3"];

    $prom = ($cal1 + $cal2 + $cal3)/3;

    $p1 = ($prom * 55) / 100;

    $p2 = ($_GET["examen"] * 30) / 100;

    $p3 = ($_GET["tfinal"] * 15) / 100;
    
    $nf = $p1 + $p2 + $p3;

    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Parciales</th>
                <th>Examen</th>
                <th>Trabajo Final</th>
                <th>Nota Final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $p1 ?></td>
                <td><?php echo $p2 ?></td>
                <td><?php echo $p3 ?></td>
                <td><?php echo $nf ?></td>
            </tr>
        </tbody>
    </table>
    

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
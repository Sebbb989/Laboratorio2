<?php 

if(isset($_GET["ndp"])){
    $ndp = $_GET["ndp"];

    if($ndp <= 200){
        $ppp = 95.00;
        $costo = $ndp * $ppp;
    }else if($ndp > 200 && $ndp <= 300){
        $ppp = 85.00;
        $costo = $ndp * $ppp;
    }else{
        $ppp = 75.00;
        $costo = $ndp * $ppp;
    }    

}



?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <h1>La Langosta Ahumada</h1>

<?php if(isset($_GET["ndp"])){ ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Presupuesto</h4>
            <p class="card-text">Para <?php echo $ndp; ?> personas el presupuesto seria <?php echo $costo; ?></p>
        </div>
    </div>
<?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
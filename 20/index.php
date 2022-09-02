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
<div class="container">
        <div class="table-responsive">
            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Grafico Utilizando ProgressBar</th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                for($i=1;$i<=10;$i++){ ?>

                    <tr class="">
                            <td><?php echo $i; ?></td>
                            <td><?php $rand = rand(1, 100);  echo $rand;  ?></td>
                            <td><div class="progress"><div class="progress-bar" role="progressbar" style="width: <?php echo $rand ?>%;" aria-valuenow="<?php echo $rand; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $rand; ?>%</div></div></td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
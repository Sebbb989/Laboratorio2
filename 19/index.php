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
                        <th scope="col">Encriptado</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                for($i=1;$i<=100;$i++){ ?>

                    <tr class="">
                            <td><?php echo $i; ?></td>
                            <td><?php echo md5($i, $raw_output = false) ?></td>
                            <td><button type="button" class="btn btn-danger"><a href="./enc.php?n=<?php echo $i; ?>" style="color:white;text-decoration:none;">Ver</a></button></td>
                            <td><!-- Modal trigger button -->
                              <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId<?php echo $i ?>">
                                Launch
                              </button>
                              
                              <!-- Modal Body -->
                              <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                              <div class="modal fade" id="modalId<?php echo $i; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="modalTitleId">Encriptado</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p><?php echo "El numero ".$i." encriptado es ".md5($i, $raw_output=false); ?></p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              
                              <!-- Optional: Place to the bottom of scripts -->
                              <script>
                                const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                              
                              </script>
                            </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
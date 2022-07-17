<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">

    <title>Customer List</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- STYLE -->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">

  </head>
  <body>

    <div class="transaction-title">
      Transaction
    </div>

    <div class="container mt-2">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-hover table-dark table-curved">
              <thead>
                <tr>
                  <th scope="col">Sender</th>
                  <th scope="col">Reciever</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                <?php

                include 'dbcon.php';

                $query = "select * from transaction";

                $result = mysqli_query($dbcon,$query);

                 ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>

                    <td><?php echo $array[0];?></td>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>

                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>

  </body>
</html>

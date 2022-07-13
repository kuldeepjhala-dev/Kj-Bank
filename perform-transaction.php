<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Transfer Money</title>

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- STYLE -->
    <link rel="stylesheet" href="css\styles.css?v=<?php echo time(); ?>">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  </head>
  <body class="transaction-body">

    <div class="transaction-title">
      Transfer Money
    </div>

    <?php

      include 'dbcon.php';

      //IT CONTAINS THE ID FROM WHICH WE WANT TO TRANSFER THE MONEY
      $from = $_GET['id'];

      $sql = "SELECT * FROM customer where id=$from";
      $query = mysqli_query($dbcon, $sql);
      $sender = mysqli_fetch_array($query);

      //echo $sender[1];

    ?>

    <div class="sender-reciever-details">

        <div class="sender-title">
          sender details
        </div>

    </div>

  </body>
</html>

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

      $sqlSender = "SELECT * FROM customer where id=$from";
      $querySender = mysqli_query($dbcon, $sqlSender);
      $sender = mysqli_fetch_array($querySender);

    ?>

    <div class="sender-reciever-details">

        <div class="sender-title">
          Sender details
        </div>

        <table class="table table-dark table-curved table-sender">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Account No</th>
              <th scope="col">Current Balance</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><?php echo $sender[2];?></td>
                <td><?php echo $sender[3];?></td>
                <td><?php echo $sender[4];?></td>
            </tr>
          </tbody>
        </table>

        <div class="reciever-title">
          Reciever details
        </div>

        <table class="table table-dark table-curved table-sender">
          <thead>
            <tr>
              <th scope="col">Reciever AccountNo</th>
              <th scope="col">Amount To Send</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <form class="" action="" method="post">
                <td> <input type="number" name="R-AccountNo" value=""> </td>
                <td> <input type="number" name="R-Balance" value=""> </td>
                <td> <input type="submit" name="submit" value="submit"> </td>
              </form>
            </tr>
          </tbody>
        </table>

        <?php

          if (isset($_POST['submit'])) {

            $recieverAccountNO =  $_POST['R-AccountNo'];
            $amountToSend = $_POST['R-Balance'];

            $sqlReciever = "SELECT * from customer where accountno =$recieverAccountNO";
            $queryReciever = mysqli_query($dbcon,$sqlReciever);
            $reciever = mysqli_fetch_array($queryReciever);

            // //reciever's amount is updated
            // $reciever[4] = $reciever[4] + $amountToSend;
            //
            // //sender's Balance is updated
            // $sender[4] = $sender[4] - $amountToSend;

            // deducting amount from sender's account
            $newbalance = (int)$sender[4] - (int)$amountToSend;
            $sql = "UPDATE customer set currentbalance=$newbalance where id=$from";
            mysqli_query($dbcon,$sql);

            // adding amount to reciever's account
            $newbalance =  (int)$reciever[4] + (int)$amountToSend;
            $sql = "UPDATE customer set currentbalance=$newbalance where accountno=$recieverAccountNO";
            mysqli_query($dbcon,$sql);

            $senderName = $sender['name'];
            $receiverName = $reciever['name'];
            $sql = "INSERT INTO transaction(`sender`, `reciever`, `amount`) VALUES ('$senderName','$receiverName','$amountToSend')";
            $query=mysqli_query($dbcon,$sql);

            if($query){
                 echo "<script> alert('Transaction Successful');
                                 window.location='transaction.php';
                       </script>";

            }

            $newbalance= 0;
            $amount =0;

          }

         ?>



    </div>

  </body>
</html>

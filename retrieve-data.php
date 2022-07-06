<?php

include 'dbcon.php';

$query = "select * from customer";

$result = msqli_query($dbCon,$query);

 ?>

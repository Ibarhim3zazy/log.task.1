
<?php
  $con= new mysqli("localhost", "root", "", "phone_book");
  if ($con ->connect_errno) {
    die("connection error");
    // echo "connection error";
    // exit();
  };
 ?>

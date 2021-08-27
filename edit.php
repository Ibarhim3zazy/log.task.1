<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <?php require_once("connect.php");

      if (isset($_GET['name'])) {
        $i= $_GET['id'];
        $n= $_GET['name'];
        $p= $_GET['phone'];
        if (isset($n) == true && $n != ""){
          $result= $con->query("UPDATE data SET name='$n' WHERE id='$i'");
        }
        if (isset($p) == true && $p != ""){
          $result= $con->query("UPDATE data SET phone='$p' WHERE id='$i'");
        }
        if ($result==true)
          echo "saved";
        else
          echo "failed";
      }
     ?>
  </head>
  <body>

    <form class="signup_form" method="get">
      <h2>EDIT</h2>
      <input class="login_text" type="hidden" placeholder="ID" name="id" value="<?php echo $_GET['id']; ?>">
      <input class="login_text" type="text" placeholder="Name" name="name" value="">
      <input class="login_text" type="text" placeholder="Phone" name="phone" value="">
      <input class="sign_in" type="submit" name="" value="Edit">
    </form>
  </body>
</html>

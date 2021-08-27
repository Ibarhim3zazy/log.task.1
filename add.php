<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <?php require_once("connect.php");
      if (isset($_POST['name'])) {
        $n= $_POST['name'];
        $p= $_POST['phone'];

        $result= $con->query("INSERT INTO data VALUES(NULL, '$n', '$p');");
        if ($result==true){
          echo "saved";
          }
          else{
            echo "failed";
        }

      }
     ?>
  </head>
  <body>

    <form class="signup_form" action="add.php" method="post">
      <h2>ADD CONTACT</h2>
      <input class="login_text" type="text" placeholder="Name" name="name" value="">
      <input class="login_text" type="text" placeholder="Phone" name="phone" value="">
      <input class="sign_in" type="submit" name="" value="Save">
      <div class="signup">
        You can <a href="search.php">Search</a> here
      </div>
    </form>

  </body>
</html>

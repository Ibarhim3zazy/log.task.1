<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/viewall.CSS">
  </head>
  <body>
    <?php require_once("connect.php");
        $r= $con->query("SELECT * FROM data");-
        $x= $con-> affected_rows;
        echo $x ."<br><br>";
        $x2= $r-> fetch_assoc();
        echo $x2['name'];
     ?>
      <table>
       <tr>
         <th>ID</th>
         <th>name</th>
         <th>phone</th>
         <th>Edit</th>
         <th>Delete</th>
       </tr>
           <?php while ($y = $r-> fetch_assoc()) {
             echo "<tr><td>".$y['id']."</td><td>".$y['name']."</td><td>".$y['phone']."</td><td><a href='edit.php?id=".$y['id']."'>edit</a></td><td><a href='edit.php?id=".$y['id']."'>delete</a></td></tr>";
           }
           ?>
     </table>
  </body>
</html>

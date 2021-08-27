<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/viewall.CSS">
  </head>
  <body>
      <table>
       <tr>
         <th>name</th>
         <th>phone</th>
       </tr>
       <tr>
         <td><?php echo $_GET["name"]; ?></td>
         <td><?php echo $_GET["phone"]; ?></td>
       </tr>
     </table>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
 include "db.php";
 ?>
 <?php

 
if(isset($_GET['id'])){
  $id = $_GET['id'];

   $query = "SELECT * FROM ticket WHERE id ='$id'";
     $result = mysqli_query($conn, $query);

     if (!$result){
     die("query failed". mysqli_error());
     }
     else{
      $row = mysqli_fetch_assoc($result);
     }
    }
            ?>
       
 <table>
  <thead>
  <tbody>
    <tr>
<th>Ticket: </th>
<td>
<?php echo $row['issue']?>
  </td>
  </tr>
  <tr>
<th>Ticket ID:</th>
<td>
<?php echo $row['id']?>
  </td>
  </tr>
  <tr>
<th>Created On:</th>
<td>
  <?php echo $row['Created On']?>
  </td>
</tr>
<tr>
  <th>Status:</th>
  <td>
  <?php echo $row['Status']?>
   </td>
  </tr> 
<tr> 
  <td>
  <a href="home.php">Back to Home</a>
  </td>
  </tr>
  </tbody> 
</body>
</html>

        <style>
        body {
          padding:10px;
          margin-top:30px;
          margin-left:40%;
          font-family:sans-serif;
          font-size:20px;
          align:center;
        }
        tr tbody{
          padding:30px;
        }
        
       a{
        display:inline-block;
        margin-top: 50px;
        text-decoration:none;
        padding:9px;
        border-radius:20px;
        background:rgb(87, 100, 216);
        color:white;
      }
      th {
         text-align:left;
         padding:10px;
         color:rgb(87, 100, 216);
      }
      td{
        display:inline-block;
        padding:10px;
      }
      
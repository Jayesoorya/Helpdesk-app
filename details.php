<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="detail">

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
      <tbody >
          <tr>
             <th class="th">Ticket: </th>
                <td>
                   <?php echo $row['issue']?>
                </td>
          </tr>
          <tr>
            <th class="th">Description:</th>
              <td>
                <?php echo $row['Description']?>
              </td>
          </tr>
          <tr>
            <th class="th">Created On:</th>
              <td>
               <?php echo $row['Created On']?>
              </td>
          </tr>
          <tr>
            <th class="th">Ticket ID:</th>
               <td>
                  <?php echo $row['id']?>
               </td> 
          </tr> 
          <tr>
            <th class="th">Status:</th>
              <td>
                <?php echo $row['Status']?>
              </td>
          </tr>    
          <tr> 
            <td>
              <a class="back" href="home.php">Back to Home</a>
            </td>
        </tr>
  </tbody> 
</body>
</html>
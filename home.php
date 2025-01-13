<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
 <button><a href="create.php">Create Ticket +</a></button>
       <button class="logout"><a href="logout.php">Logout</a></button >
       <h1 class="h">Helpdesk</h1>    
</header>

<?php 
include "db.php";
session_start(); 

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) {

 ?>
 
 <div >
   <table class="table">
     <thead class="thead">
          <tr class="tr">
               <th>S.No</th>
               <th>Ticket</th>
               <th>Details</th>
               <th>Status</th>
               <th>Update</th>
               <th>Delete</th>
          </tr>

<tbody class="tbody">
          <?php
     $query = "SELECT * FROM ticket" ;
     $result = mysqli_query($conn, $query);
     $id = 1;

     if (!$result){
     die("query failed". mysqli_error());
     }
     else{
           while($row = mysqli_fetch_assoc($result)){
?>
 <tr class="tr">
               <td class="td"><?php echo $id++; ?></td>
               <td class="td"><?php echo $row['issue'];?></td>
               <td class="td">
                <a class="details" href="details.php?id=<?php echo $row['id'];?>">View Details</a>
               </td>
               <td class="td"><?php echo $row['Status'];?></td>
               <td class="td">
                <a class="update" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
               </td>
               <td class="td">
               <a class="delete" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
               </td>
        
</tr>

<?php

           }
     }

?>

    </tbody>
</table>
</body>
</html>
<?php
}
?>
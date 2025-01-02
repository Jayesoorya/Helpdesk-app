<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php 
include "db.php";
session_start(); 

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) {

 ?>
 
     <div >
   <table>
     <thead>
          <tr>
               <th>S.No</th>
               <th>Ticket</th>
               <th>Details</th>
               <th>Created On</th>
               <th>Update</th>
               <th>Delete</th>
</tr>

     <tbody>
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
 <tr>
               <td><?php echo $id++; ?></td>
               <td><?php echo $row['issue'];?></td>
               <td>
                <a class="details" href="details.php?id=<?php echo $row['id'];?>">View Details</a>
             </td>
               <td><?php echo $row['Created On'];?></td>
 <td>
                <a class="update" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
           </td>
           <td>
           <a class="delete" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
           </td>
        
</tr>

<?php

           }
     }

?>
<header>
 <button><a href="create.php">Create Ticket +</button>
       <button class="logout"><a href="logout.php">Logout</button >
       <h1>Helpdesk</h1>    
</header>

    </tbody>
</body>
</html>
<?php
}
?>

<style>
    h1{
    margin-top:-40px;
    margin-left:20px;
    font-family:sans-serif;
    color:white;
}

header{
    background:rgb(87, 175, 216);
    padding:10px;
    margin:0%;
    border-radius:10px;
}
td a{
    background:rgb(87, 100, 216);
    border-radius:20px;
    padding:7px;
    color:white;
    font-family:sans-serif;
}
button{
    margin-top:15px;
    margin-left:80%;
    padding:10px;
    font-size:20px;
    border-radius:30px;
    background:rgb(59, 73, 179);
    color:white;
    border-style:solid;
}
a{
    text-decoration:none;
    color:inherit;
}
.logout{
    margin-left:35px;
}
table {
    width: 100%;
    border-color:black;
    margin: 160px 0;
    border: 2px solid black;
    border-collapse: collapse;
    border:3px solid black;
    border-radius:5px;
}


thead {
    background-color: white;
    color:rgb(59, 73, 179);
}

thead th {
    text-align: left;
    padding: 12px;
    font-size: 20px;
    font-family:sans-serif;
}


tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #ffffff;
}

tbody td  {
    padding: 10px;
    font-size:20px;
    text-align: left;
    border:2px solid black;

}
tr th{
     border:2px solid black;
}
</style>
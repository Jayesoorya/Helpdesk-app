<?php 
include"db.php";
?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

  $query= "DELETE FROM  ticket WHERE id = '$id'";

  $result= mysqli_query($conn, $query);

  if(!$result){
    die("Query failed". mysqli_error());
  }
  else{
    header("Location: home.php");
  }

}
?>
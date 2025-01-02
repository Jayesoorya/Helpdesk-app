<?php
include "db.php";
?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "SELECT * FROM ticket WHERE id = '$id' " ;
     $result = mysqli_query($conn, $query);

     if (!$result){
     die("query failed". mysqli_error());
     }
     else{
           $row = mysqli_fetch_assoc($result);
     }        
}
?>
<?php

if(isset($_POST['update'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }
    $issue = $_POST['issue'];
    $Status = $_POST['Status'];

    $query= "UPDATE ticket SET issue='$issue', Status='$Status' WHERE id= '$idnew'";

    $result = mysqli_query($conn, $query);

    if (!$result){
    die("query failed". mysqli_error());
    }
    else{
        header("Location: home.php");}
}
?>
<div class="form">
<div class="card">

<form action= "update.php?id_new=<?php echo $id; ?>" method="POST">

<label> TICKET: </label>
 <input type="text" name="issue" class="form-control" value="<?php echo $row['issue']?>"> <br>

 <label> STATUS: </label>
 <input type="text" name="Status" class="form-control" value="<?php echo $row['Status']?>"> <br>
<input type="submit" class="add" name="update" value="UPDATE">

</form>
</div>
</div>
<style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
label{
    color:white;
    font-size:20px;
}

.form {
    background:rgb(87, 175, 216);
    width: 50%;
    margin: 50px auto;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
    border-radius: 8px;
    padding: 20px;
}


.card {
    border: 5px solidrgb(87, 175, 216); 
    border-radius: 8px;
    padding: 20px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 2px solid #ced4da;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #007bff; 
    outline: none;
}

.add {
    background-color:rgb(59, 73, 179);
    color: white;
    font-size:20px;
    padding:11px;
    border-radius:30px;
    border:1px solid ;
    display:block;
}

.add:hover {
   cursor: pointer;
}

</style>
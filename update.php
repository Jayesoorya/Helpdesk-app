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
    $Des = $_POST['des'];
    $Status = $_POST['status'];

    $query= "UPDATE ticket SET issue='$issue', Description='$Des', Status='$Status'  WHERE id= '$idnew'";

    $result = mysqli_query($conn, $query);

    if (!$result){
    die("query failed". mysqli_error());
    }
    else{
        header("Location: home.php");}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form">
<div class="card">

<form action= "update.php?id_new=<?php echo $id; ?>" method="POST">

<label> TICKET: </label>
 <input type="text" name="issue" class="form-control" value="<?php echo $row['issue']?>"> <br>

 <label> DESCRIPTION: </label>
 <input type="text" name="des" class="form-control" value="<?php echo $row['Description']?>"> <br>

 <label for="status">STATUS:</label><br>
 <select class="select" style=" width: 140px; height:40px; border-radius:10px; margin-bottom:30px;" name="status" >
 <option value="open" <?php if ($row['Status'] == 'open') echo 'selected'; ?>>Open</option>
 <option value="done" <?php if ($row['Status'] == 'done') echo 'selected'; ?>>Done</option>
</select>
<input type="submit" class="add" name="update" value="UPDATE">

</form>
</div>
</div>
</body>
</html>
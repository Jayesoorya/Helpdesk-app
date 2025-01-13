<?php
    include "db.php";
    if(isset($_POST['submit'])){
        $issue = $_POST['issue'];
        $des = $_POST['Description'];

        if($issue =="" || empty($issue)){
            header("Location:home.php");
        }
        else{
        $sql = " INSERT INTO ticket(issue, Description) VALUES ( '$issue', '$des' )";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Query failed". mysqli_error());
        }
        else{
            header("Location:home.php");
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
 <title>Create Ticket</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <div class="form">
 
 <form method="post">
 
 <br><div class="card">
 
 <div class="card-header">
 <h1>  Create New Ticket</h1>
 </div><br>
 <label> TICKET: </label>
 <input type="text" name="issue" class="form-control"> <br>

 <label> DESCRIPTION: </label>
 <input type="text" name="Description" class="form-control"> <br>

 <input type="submit" class="add"  name="submit"  value= "Submit"><br>
 <a class="btn" type="submit" name="cancel" href="home.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php
    include "db.php";
    if(isset($_POST['submit'])){
        $issue = $_POST['issue'];
        $status = $_POST['Status'];

        if($issue =="" || empty($issue)){
            header("Location:home.php");
        }
        else{
        $sql = " INSERT INTO ticket(issue, Status) VALUES ( '$issue', '$status' )";
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

 <label> STATUS: </label>
 <input type="text" name="Status" class="form-control"> <br>

 <input type="submit" class="add"  name="submit"  value= "Submit"><br>
 <a class="btn" type="submit" name="cancel" href="home.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa; 
}
label{
    color:white;
    font-size:20px;
}

.form {
    width: 50%;
    margin: 50px auto;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
    border-radius: 8px;
    padding: 20px;
    background: rgb(87, 175, 216);
}


.card {
    border: 5px solid rgb(59, 73, 179); 
    border-radius: 8px;
    padding: 20px;
}

.card-header {
    text-align: center;
    padding: 15px;
    border-radius: 8px 8px 0 0;
    color: white;
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

.btn{
    background-color:rgb(239, 44, 44); 
    color: white;
    border-radius:30px;
    font-size:20px;
    border:0px solid ;
    text-decoration: none;
    padding:11px;
   
}

btn:hover {
   cursor: pointer;
}

</style>
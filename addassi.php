<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Insert assignment data</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                  
                    <h2> Add Assignment</h2>
                    <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">  Name </label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for=""> Assignment </label>
                            <input type="text" name="assi" class="form-control"   placeholder="Enter Your Assignment">
                        </div>
                        

                        <button type="submit" name="insert" class="btn btn-primary"> Save Data </button>

                        <a href="assi.php" class="btn btn-danger"> BACK </a>
                    </form>
                      
                </div>
            </div>
        </div>
    </div>




<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'details');

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $assi = $_POST['assi'];
   
    $query = "INSERT INTO assignment (name,assi) VALUES ('$name','$assi')";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: assi.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
    
    
}

?>
</body>
</html>
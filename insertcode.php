<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Insert Employee Data</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                  
                    <h2> Add Employee Data</h2>
                    <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">  Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for=""> Place </label>
                            <input type="text" name="place" class="form-control" placeholder="Enter Your Place">
                        </div>
                        <div>
                            <label for=""> Email </label>
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for=""> Contact </label>
                            <input type="text" name="contact" class="form-control" placeholder="Enter Contact" >
                        </div>
                        <div>
                            <label> image name </label>
                            <input type="text" name="images"  id="images" class="form-control" >
                        </div>

                        <button type="submit" name="insert" class="btn btn-primary"> Save Data </button>

                        <a href="index.php" class="btn btn-danger"> BACK </a>
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
    $place = $_POST['place'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $images = $_POST['images'];


    
    $query = "INSERT INTO employee (name,place,email,contact,images) VALUES ('$name','$place','$email','$contact','$images')";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
        header('Location: index.php');
    }
    
}

?>
</body>
</html>
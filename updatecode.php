<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>update data</title>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'details');

    $id = $_POST['id'];

    $query = "SELECT * FROM employee WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2>Update Your Employee Data</h2>
                            <hr>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for="">  Name </label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Place </label>
                                    <input type="text" name="place" class="form-control" value="<?php echo $row['place'] ?>" placeholder="Enter Your Place" required>
                                </div>
                                <div>
                                    <label for=""> Email </label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>" placeholder="Enter your email">  
                                </div>
                                <div class="form-group">
                                    <label for=""> Contact </label>
                                    <input type="text" name="contact" class="form-control" value="<?php echo $row['contact'] ?>" placeholder="Enter Contact" required>
                                </div>
                                <div>
                                    <label> Enter Image Name </label>
                                    <input type="text" name="images"  id="images" class="form-control" value="<?php echo $row['images'] ?>">    
                                </div>

                                <button type="submit" name="update" class="btn btn-primary"> Update Data </button>

                                <a href="index.php" class="btn btn-danger"> CANCEL </a>
                            </form>

                        </div>
                    </div>
                    
                    <?php
                    if(isset($_POST['update']))
                    {
                        $name = $_POST['name'];
                        $place = $_POST['place'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $images = $_POST['images'];
                    
                        
                        $query = "UPDATE employee SET name='$name', place='$place', email='$email', contact='$contact',images='$images' WHERE id='$id'  ";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            header("location:index.php");
                        }
                        else
                        {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                        
                    }
                    ?>

                </div>
            </div>
            <?php
        }
    }
    else
    {
        // echo '<script> alert("No Record Found"); </script>';
        ?>
        <div class="container">
            <div class="row">
                <div >
                    <h4>No Record Found</h4>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</body>
</html>
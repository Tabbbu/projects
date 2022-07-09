<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <title> assignment </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    
</head>
<body>
       <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'details');

                $query = "SELECT * FROM assignment";
                $query_run = mysqli_query($connection, $query);
                    ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Assignment </th>
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                        ?>
                                    <tr>
                                        <th> <?php echo $row['id']; ?> </th>
                                        <th> <?php echo $row['name']; ?> </th>
                                        <th> <?php echo $row['assi']; ?> </th>
                                        
                                        <th> 
                                            <form action="updateassi.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input type="submit" name="updatedata" class="btn btn-success" value="EDIT">
                                            </form>
                                        </th>
                                        <th> 
                                            <form action="deleteassi.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input type="submit" name="deletedata" class="btn btn-danger" value="DELETE"> 
                                            </form>
                                        </th>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                                ?>
                        </tbody>
                    </table>
                    </div>
        </div>
        <div class="card">
                <div class="card-body">
                    <button class="btn btn-success" onclick="document.location='addassi.php'">
                        ADD ASSIGNMENT
                    </button>
                     <button class="btn btn-success" onclick="document.location='index.php'">
                         Go Back
                     </button>
                </div>
            </div>
</body>

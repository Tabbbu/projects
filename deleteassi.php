<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'details');

if(isset($_POST['deletedata']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM assignment WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:assi.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
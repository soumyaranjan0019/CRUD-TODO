<?php
include "conn.php";

$sl_no = $_GET['srs'];

$sql = "DELETE FROM srs2 WHERE id = '$sl_no'";

if(mysqli_query($conn,$sql)){

    header("location:data.php");
}
?>
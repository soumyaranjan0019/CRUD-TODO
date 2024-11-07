<?php
include "conn.php";

$sl_no = $_GET['srs'];

$sql = "SELECT * FROM srs2 WHERE id = '$sl_no'";

$qry = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($qry);
?>

<?php
    if(isset($_POST['submit']))
    {
        $email=$_POST['email_id'];
        $password=md5($_POST['pass_word']);

        $qr = "UPDATE srs2 SET email_id = '$email',pass_word = '$password' WHERE id = '$sl_no'";

        if(mysqli_query($conn,$qr)){

            header("location:data.php");
        }
    }
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<script>
    if(window.history.replaceState) 
    {
        window.history.replaceState(null,null,window.location.href);
    }
</script>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" align="center">

<input type="hidden" name="id">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" value="<?= $row['email_id']; ?>" required>
</div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_word" value="<?= $row['pass_word']; ?>" required>
  </div>
  
  <input type="submit" name="submit" class="btn btn-primary" value="submit" required>
  
</form>
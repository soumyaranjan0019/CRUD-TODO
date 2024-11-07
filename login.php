<?php
include "conn.php";

if(isset($_POST['submit']))
{
    $email=$_POST['email_id'];
    $password=md5($_POST['pass_word']);

    $sql = "SELECT * FROM srs2 WHERE email_id = '$email' AND pass_word = '$password'";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        session_start();
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['email_id'] = $row['email_id'];
        header('Location:data.php');
      }
    }else{
            echo "<script> alert('Email & Password are not matched.'); </script>";
         }
}
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <script>
      if(window.history.replaceState)
      {
        window.history.replaceState(null,null,window.location.href);
      }
    </script><br><br>

<h1 class="text-center col-6">Login Page</h1><br>
<form action="<?php $_SERVER['PHP_SELF']; ?>" class="col-6" method="post" align="center">

<div class="mb-3 form-check">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" required>
</div>

  <div class="mb-3 form-check">
    <label for="exampleInputPassword1" class="form-label"> Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_word" required>
  </div>
  
  <input type="submit" name="submit" class="btn btn-success" value="submit" required>

  <a href="reg.php">
        <button type="button" class="btn btn-dark">Register</button>
    </a>

  
</form>
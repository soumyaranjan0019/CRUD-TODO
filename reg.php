<?php
    include "conn.php";

    if(isset($_POST['submit']))
    {
        $name=$_POST['full_name'];
        $age=$_POST['age'];
        $email=$_POST['email_id'];
        $password=md5($_POST['pass_word']);

        $qry="SELECT email_id FROM srs2 WHERE email_id='$email'";
        $result=mysqli_query($conn,$qry);
        
        if(mysqli_num_rows($result) > 0)
        {
            echo "<script>alert('Email already exists! Please try another.')</script>";
        }else
            {
                $sql="INSERT INTO srs2 (full_name,age,email_id,pass_word) VALUES ('$name','$age','$email','$password')";

                if(mysqli_query($conn,$sql))
                {
                    
                    header("location:login.php");
                    echo "<script>alert('Registered Successfully!')</script>";
                }
            }
    }
?>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href);
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center col-6 mx-auto">Register Page</h1><br>

<form <?php $_SERVER['PHP_SELF']; ?> method='post' class="col-6 mx-auto">
<div class="mb-3 form-check">

    <label class="form-label">Name</label>
    <input  class="form-control" type="text" name="full_name" required>
  </div>
  <div class="mb-3 form-check">
  <label class="form-label">Age</label>
    <input  class="form-control" type="number" name="age" required>

  </div>
  <div class="mb-3 form-check">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" required>
  </div>
  <div class="mb-3 form-check">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="pass_word" required>

    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="pass_word" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  
  <a href="login.php">
        <button type="button" class="btn btn-dark">Login</button>
    </a>
</form>

<script src="password.js"></script>
</body>
</html>
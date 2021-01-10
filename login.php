<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="container">
    <div class="center">
    <h2 class="heading">Login</h2>
        <form method="post">
            <div class="form-group row">
                <label for="umail" class="col-md-3 col-form-label">User Name</label>
                <div class="col-md-7"><input type="text" name="email" class="form-control" id="uemail" required></div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label">Password</label>
                <div class="col-md-7"><input type="password" name="password" class="form-control" id="password" required></div>
            </div>
            <div class="form-group row">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
    session_start();
    $db = mysqli_connect('localhost',"root","",'userdata');
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select email,fullName,UserPassword from userinformation where email='$email' and UserPassword='$password'";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$email;
            $_SESSION['name']=mysqli_fetch_row($result)[1];
            session_abort();
            header('location:home.php');
        }
        else
        {
            echo "Invalid Username or Password!";
        }
    }


?>
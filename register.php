<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="container">
    <div class="center">
    <h2 class="heading">Register</h2>
        <form action = "<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group row">
                <label for="uname" class="col-md-3 col-form-label">Name</label>
                <div class="col-md-7"><input type="text" name="uname"class="form-control" id="uname" required></div>
            </div>
            <div class="form-group row">
                <label for="uemail" class="col-md-3 col-form-label">Email</label>
                <div class="col-md-7"><input type="text" name="uemail" class="form-control" id="uemail" required></div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label">Password</label>
                <div class="col-md-7"><input type="password" name="password" class="form-control" id="password" required></div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-md-3 col-form-label">Gender</label>
                <div class="col-md-7"><input type="text" name="gender" class="form-control" id="gender" required></div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-md-3 col-form-label">DOB</label>
                <div class="col-md-7"><input type="date" name="dob" class="form-control" id="dob" required></div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-3 col-form-label">Tel:</label>
                <div class="col-md-7"><input type="text" name="phone" class="form-control" id="phone" required></div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-3 col-form-label">Address</label>
                <div class="col-md-7"><input type="text" name="address" class="form-control" id="address" required></div>
            </div>
            <div class="form-group row">
                <button type="submit" name="submit" class="btn btn-primary ">Register</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
    $db = mysqli_connect('localhost',"root","",'userdata');
    if(isset($_POST['submit']))
    {
        $name=$_POST['uname'];
        $email=$_POST['uemail'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $sql = "INSERT INTO userinformation (fullName,email,UserPassword,telephone,gender,dob,UserAddress) values('$name','$email','$password',
        '$phone','$gender','$dob','$address');";
        if (mysqli_query($db, $sql)) {
            header('location:login.php');
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    }
    mysqli_close($db);
?>

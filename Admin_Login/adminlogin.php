<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else
{
    echo "No Connection";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <?php include 'link.php'?> 
</head>
<body>
    <header>
        <div class="container center-div shadow">
            <div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN</div>

            <div class="container row d-flex-row justify-content-center mb-5">
                <div class="admin_form shadow p-2">
                    <form action="logincheck.php" method="POST">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" name="user" value="" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="pass" value="" class="form-control" autocomplete="off">
                        </div>
                        <input type="submit" class="btn btn-success" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
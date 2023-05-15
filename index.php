<?php
require('./conection.php');
if (isset($_POST['submitButton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    

   


    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['level']) && !empty($_POST['password'])) {
        $insert = loginlogout::inserting($name, $email, $level, $password,$image);
        echo "<script>
      alert('User registered successfully!') 
       </script>";
    } else {
        echo "<script>
       alert('Please fill all the fields...!') 
        </script>";
    }
}


?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-eadge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="Style1.css">
    <title>Sign Up form</title>
</head>

<body>


    <div class="main">
        <div class="content">


            <div class="form" action=:"" method="POST">
                <form method="POST" enctype="multipart/form-data" action="upload.php">
                    <input type="file" name="my_image" required accept=:".png,.jpg,.jpeg">
                    
                </form>
                <form action="" method="Post">
                    <div>
                        <h1>Sign Up</h1>
                    </div>
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Enter your name">
                        <input type="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="input-box">
                        <select class="level" name="level" id="l">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                        <input type="password" name="password" placeholder="Enter your password">
                    </div>

                    <div class="login">
                        <a href="./login.php">Do you have any account? Login </a>
                    </div>
                    <div class="submit">
                        <input type="submit" name="submitButton" placeholder="signbutton">
                    </div>
                    <div>
                        <a href="./index1.html" name="Back" class="back">Back</a>

                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
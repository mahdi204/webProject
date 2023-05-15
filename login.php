<?php
require('./conection.php');
if (isset($_POST['loginButton'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
   /* $query="SELECT level FROM users WHERE name= :n and password= :p";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $row+mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['level']=$row['level'];
        header('location:HomeAdmin.php');
    }*/



    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $login=loginlogout::login($name,$password);
    }
    else{
        echo "<script>
        alert('Please fill all the fields...!') 
         </script>";
    }
}

?>
<!doctype html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-eadge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="Style1.css">
    <title>login form</title>
</head>


<style>
    .form form {
        width: 240px;
        height: 250px;
    }
    h1{
        padding-bottom: 20px;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }
</style>


<body>
    <div class="main">
        <div class="content">
            <div class="form">
                
                <form action="" method="post">
                    <div>
                        <h1>Login</h1>
                    </div>
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Enter your name">
                        <input type="password" name="password" placeholder="Enter your password">
                    </div>


                    <div class="login">
                        <a href="./index.php">Don't have any account? Sign in</a>
                    </div>
                    <div class="logButton">
                        <input type="submit" value="Login" name="loginButton">
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-eadge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .container {
        margin-top: 10%;
        margin-bottom: 20%;
    }
</style>

<body>
    <h1>Admin Document List </h1>
    <style>
        .btn {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        h1 {
            display: flex;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 30px;
            justify-content: center;
            margin-top: 20px;
            
        }
    </style>

    <div class="container">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Password</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('./conection.php');
                $p = loginlogout::selectdata();
                /* if(isset($_GET['id'])){
                $id=$_GET['id'];
                $e=loginlogout::delete($id);
                }*/


                if (count($p) > 0) {
                    for ($i = 0; $i < count($p); $i++) {
                        foreach ($p[$i] as $key => $value) {
                            if ($key != 'id') {
                                echo '<td>' . $value . '</td>';
                            }
                        }
                        ?>
                        <td><button class="btn btn-primary"><a href="update.php?id=<?php echo $p[$i]['id'] ?> " class="text-light">Update</a></button></td>
                        <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $p[$i]['id'] ?>"class="text-light">Delete</a></button></td>
                        <?php
                        echo '</tr>';
                    }
                }
                

                ?>
                <div>
                <td><button class="btn btn-secondary"><a href="login.php" class="text-light">Back To Login</a></button></td>
                </div>


            </tbody>
        </table>
    </div>
    <h1>

    </h1>
</body>

</html>
<?php 
require('./conection.php');


$successMessage =" Updated Succesfully";

if(isset($_POST['submitButton'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    
    
    
    if(!empty($_POST['name'])&&!empty($_POST['email'])){
        $update= loginlogout::update($name,$email);
        echo "<script>
      alert('Updated Successfully') 
       </script>";
    }
    else{
       echo "<script>
       alert('Please fill all the fields...!') 
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-eadge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1>Update Documents</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" >
                </div>
                <div class="col-sm-3 d-grid">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-secondary" href="HomeAdmin.php" role="button">Back</a>
                </div>
            </div>



        </form>
    </div>
</body>

</html>
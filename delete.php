<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginlogoutsystem";

    //عمل ربط للبيانات 
    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM users WHERE id=$id";
    $connection->query($sql);
}
// رجع الآدمن على الصفحة الرئيسية
header("location:HomeAdmin.php");
exit;
?>
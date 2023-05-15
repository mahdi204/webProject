<?php
/**
 * Summary of loginlogout
 */
class loginlogout
{
    public static function connect()
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=loginlogoutsystem', 'root', '');
            return $con;
        } catch (PDOException $erro1) {
            echo $erro1->getMessage();
        } catch (Exception $erro2) {
            echo $erro2->getMessage();
        }
    }
    /**
     * Summary of inserting
     * @param mixed $name
     * @param mixed $email
     * @param mixed $level
     * @param mixed $password
     * @return mixed
     */
    public static function inserting($name, $email, $level, $password,$image)
    {
        $insert =  loginlogout::connect()->prepare("INSERT INTO users(name,email,level,password,image)VALUES(:n,:e,:l,:p,:i) ");
        $insert->bindValue(':n', $name);
        $insert->bindValue(':e', $email);
        $insert->bindValue(':l', $level);
        $insert->bindValue(':p', $password);
        $insert->bindValue(':i', $image);

        $insert->execute();
    }
    /**
     * Summary of login
     * @param mixed $name
     * @param mixed $password
     * @return mixed
     */


     public static function update($name, $email)
    {
        $id= $_GET['id'];

        $p = loginlogout::connect()->prepare("UPDATE users"." SET name=:n, email=:e"." WHERE id=$id");
        $p->bindValue(':n', $name);
        $p->bindValue(':e', $email);
        
        $p->execute();
        echo "<script><alert>(Updatedd Successfully);</script>";

        }
    public static function login($name, $password)
    {
        $login = loginlogout::connect()->prepare("SELECT level FROM users WHERE name=:n and password=:p");
        $login->bindValue(':n', $name);
        $login->bindValue(':p', $password);
        $login->execute();
        if ($login->rowCount() > 0) {
            $fetch = $login->fetch(PDO::FETCH_ASSOC);
            session_start();
            if ($fetch) {
                switch ($fetch['level']) {
                    case '1':
                        $_SESSION['level'] = 1;
                        echo 'This is the admin page';
                        header('location:HomeAdmin.php');
                        break;

                    case '2':
                        $_SESSION['level'] = 2;
                        header('location:HomeUser.php');
                        break;
                }
            }
        }
        else{
            echo "<script><alert>('user is not registered!');</script>";
        }
    }

    public static function selectdata(){
        $data = array();
        $p=loginlogout::connect()->prepare('SELECT * FROM users ');
        $p->execute();
        $data = $p->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function selectdatauser(){
        $data = array();
        $p=loginlogout::connect()->prepare('SELECT name,email,level FROM users ');
        $p->execute();
        $data = $p->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    /**
     * Summary of delete
     * @param mixed $id
     * @return mixed
     */
    public static function delete($id){
        $p=loginlogout::connect()->prepare('DELETE * FROM users where id=:id');
        $p->bindValue(':id',$id);
        $p->execute();

    }
}

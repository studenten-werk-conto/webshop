<?php
    include('../core/header.php');
    if (isset($_POST['submit']) && $_POST['submit'] != '') {
        echo('1');
        $username = $con->real_escape_string($_POST['username']);
        echo('1');
        $password = $con->real_escape_string($_POST['password']);
        echo('15');
        $liqry = $con->prepare("SELECT admin_user_id,username,password FROM admin_user WHERE username = '".$username."' LIMIT 1;");
        echo('14');
        if($liqry === false) {
            trigger_error(mysqli_error($con));
            echo('13');
        } else{
            echo('1SADADSF2');
            $liqry->bind_param('s',$username);
            $liqry->bind_result($adminId,$username,$dbHashPassword);
            if($liqry->execute()){
                $liqry->store_result();
                $liqry->fetch();
                echo'ranker';
                if(password_verify($password, $dbHashPassword)){
                    $_SESSION['Sadmin_id'] = $adminId;
                    $_SESSION['Sadmin_username'] = stripslashes($username);
                    echo "Bezig met inloggen... <meta http-equiv=\"refresh\" content=\"1; URL=index_loggedin.php\">";
                    exit();
                } else {
                    echo "ERROR tijdens inloggen";
                }
            }
            $liqry->close();
        }
    }
?>
<form action="index.php" method="post">
    <input type="username" name="username" id="" placeholder="username">
    <input type="password" name="password" id="" placeholder="Password">
    <input type="submit" name="submit" value="Login">
</form>
<?php
    include('../core/footer.php');
?>
<?php
include 'styles.html';
include 'header.php';
if($_POST['submit']){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $userquery= mysqli_query($config, "SELECT * FROM users where username= '$username' and password= '$password'");
    if(mysqli_num_rows($userquery)>0){
        session_start();
        $usertable=mysqli_fetch_assoc($userquery);
        $_SESSION['names']=$usertable['names'];
        header('location:index.php');
    }else{
        echo 'wrong username or password';
    }
}

?>

<form action="" method="POST">
    <div class='loginform'>
<input type="text" name="username" placeholder="enter username" required="required" style="margin-top:12px;"><br>
<input type="password" name="password" placeholder="enter password" required="required"><br>
<input type="submit" name="submit" value="login">
<a href="forgotpassword.php" style="text-decoration: none;"> Forgot password?</a> 
<a href="signup.php">sign up</a>
    </div>
</form>
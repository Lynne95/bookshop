<?php
include 'header.php';
?>

<form action="" method="POST">
    <div class="loginform">
<input type="text" name="fullname" placeholder="enter fullname" required="required" style="margin-top: 10px;"><br>
<input type="text" name="username" placeholder="enter username" required="required"><br>
<input type="password" name="password" placeholder="enter password" required="required"><br>
<input type="password" name="password" placeholder="confirm password" required="required"><br>
<input type="submit" name="submit" value="signup">
    </div>
</form>

<?php
include 'styles.html';
?>
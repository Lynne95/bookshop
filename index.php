<?php
include 'styles.html';
include 'header.php';

?>
<form action="" method="post">
    <div class="search">
    <input name="search" type="text" placeholder="search here" style="width:40%">
    <input type="submit" name="submit" value="search">
    </div>
</form>
<form method="post">
    <a href="textbooks.php"><div class="categoryview">
        <div style="margin-top: 30%;">
        Text Books
        </div>
    </div></a>
   <a href="exercisebooks.php"> <div class="categoryview">
        <div style="margin-top: 30%;">
        Exercise Books
        </div>
    </div></a>
  <a href="stationery.php">  <div class="categoryview">
        <div style="margin-top: 30%;">
        Stationery
        </div>
    </div></a>
</form>

<?php
include 'header.php';
$txtbkqry=mysqli_query($config, "SELECT * FROM textbooks");
if(mysqli_num_rows($txtbkqry)>0){
    
}else{
    //echo no information
}
?>
<div class="add" style="text-align:right; margin-top:5px; margin-bottom:5px; margin-right:60px; font-weight:bold;"> 
<a href="addtxtbk.php" style="text-decoration: none; color:brown;">Add Textbook </a>
</div>

<table align="center" style=" width:80%; text-align:center;border-collapse:collapse; border-bottom:1px solid plum;"><tr style="font-weight: bold; "><td>Book Name</td><td>Class</td><td>Publisher</td><td>Cost</td></tr>
    <?php
while($txtbkrow=mysqli_fetch_assoc($txtbkqry)){
    $names=$txtbkrow['name'];
    $class=$txtbkrow['class'];
    $publisher=$txtbkrow['publisher'];
    $cost=$txtbkrow['cost'];
    echo '<tr style="border-bottom:1px solid plum;"><td>'.$names.'</td><td>'.$class.'</td><td>'.$publisher.'</td><td>'.$cost.'</td></tr>';
}
    ?>
    
</table>

<?php
include 'styles.html';
?>
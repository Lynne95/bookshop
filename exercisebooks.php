<?php
include 'header.php';
$exbkqry=mysqli_query($config,"SELECT * FROM exercisebooks");
?>
<div class="add"style="text-align:right; margin-top:5px; margin-bottom:5px;margin-right:60px;font-weight:bold;"> 
<a href="addexbk.php"  style="text-decoration: none; color:brown;">Add Exercisebook</a>
</div>
<div style="margin-top: 40px; width:100%;">


<table align="center" style=" width:80%; text-align:center;border-collapse:collapse; border-bottom:1px solid plum;"><tr style="font-weight: bold; "><td>Pages</td><td>Name</td><td>Type</td><td>Cost</td></tr>
    <?php
while($exbkrow=mysqli_fetch_assoc($exbkqry)){
    $pages=$exbkrow['pages'];
    $name=$exbkrow['name'];
    $type=$exbkrow['type'];
    $cost=$exbkrow['cost'];
    echo '<tr style="border-bottom:1px solid plum;  "><td>'.$pages.'</td><td>'.$name.'</td><td>'.$type.'</td><td>'.$cost.'</td></tr>';
}
    ?>
    
</table>

</div>

<?php
include 'styles.html';
?>


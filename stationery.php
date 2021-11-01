<?php
include 'header.php';
$statqry=mysqli_query($config, "SELECT * FROM stationery");

?>
<div class="add" style="text-align:right; margin-top:5px; margin-bottom:5px;margin-right:60px;font-weight:bold;"> 
<a href="addstat.php"  style="text-decoration: none; color:brown;">Add Stationery </a>
</div>
<div style="margin-top: 40px; width:100%;">

<table align="center" style=" width:80%; text-align:center;border-collapse:collapse; border-bottom:1px solid plum;"><tr style="font-weight: bold; "><td>Name</td><td>Type</td><td>Cost</td></tr>
    <?php
while($statrow=mysqli_fetch_assoc($statqry)){
    $name=$statrow['name'];
    $type=$statrow['type'];
    $cost=$statrow['cost'];
    echo '<tr style="border-bottom:1px solid plum;  "><td>'.$name.'</td><td>'.$type.'</td><td>'.$cost.'</td></tr>';
}
    ?>
    
</table>
</div>
<?php
include 'styles.html';
?>
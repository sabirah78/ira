<?php
$bakery=array("Kek","Kuih","Roti");
echo "I like".$bakery[0].",".$bakery[1]."
and".$bakery[2].".";
?>

<table border = 1>

 <tr>
 <td><?php echo $bakery[0];?></td>
 <td><?php echo $bakery[1];?></td>
 </tr>

 <tr>
 <td><?php echo $bakery[1];?></td>
 <td><?php echo $bakery[0];?></td>
 </tr>

 </table>
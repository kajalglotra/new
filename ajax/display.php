<?php
include("config.php");
$result=mysqli_query($db,"select * from admin_account");
   echo "<tr>";  
    echo "<td >username</td>";
    echo "<td>Password</td>";
    echo "<td >Id</td>";
    echo "<td >Status</td>";
    echo "<td >Edit</td>";
    echo "<td >Delete</td>";
    echo "</tr>";
 while($row = mysqli_fetch_array($result))
                 { 
                  $id=$row['id']; 
    echo "<tr>";  
    echo "<td >".$row['username']."</td>";
    echo "<td >".$row['password']."</td>";
    echo "<td >".$row['id']."</td>";
    echo "<td >".$row['active']."</td>";
    echo "<td ><a href=edit.php?id=".$row['id'].";><img src='b_edit.png' alt='' /></a></td>";
    echo "<td ><a class='delete' href='?action=delete&id=".$row['id']."'><img src='b_drop.png' alt='' /></a></td>";
    echo "</tr>";
}

?>


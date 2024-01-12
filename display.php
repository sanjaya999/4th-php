<?php
include ("menu.php");
// include ("itempost.php");
include ("dbs.php");
$q = "select * FROM products";
$r = mysqli_query($con, $q);
// $result=mysqli_query($con,$q);
?>
<div class="main-content">
    <div class="title">Display Items</div>
    <div class="content">
        <table border=1 class="display_table">
            <tr><th>Item No</th><th>Item Name</th><th>Stock</th><th>Price</th> <th>Remarks</th><th>Action</th> </tr>
            <?php
            while ($ans = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                $id = $ans['itemno']; 
                echo "<tr>";
                foreach ($ans as $v) {
                    echo "<td> $v </td>";
                }
                echo "<td><a class='btn delete' href='delete.php?id=$id' onclick='return confirm(\"Delete y/n?\");'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

<?php
include "config.php";

$db=mysqli_select_db($id, "prak_7");
$sql="SELECT kdbarang, nmbarang, jmlbarang, hrgbarang FROM barang ";
$hasil=mysqli_query($id, $sql);
while ($row=mysqli_fetch_row($hasil)){
    echo "$row[0], $row[1], $row[2], $row[3]<br>\n";
}
?>
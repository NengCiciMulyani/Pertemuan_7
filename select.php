<?php
    include "config.php";
        mysqli_select_db($id, "prak_7");
    $sqli="SELECT kdbarang, nmbarang, jmlbarang, hrgbarang FROM barang ";
    $hasil=mysqli_query($id, $sqli);
    echo '<table border="1">
            <thead>
                <tr>
                    <th>kdbarang</th>
                    <th>nmbarang</th>
                    <th>jmlbarang</th>
                    <th>hrgbarang</th>
                <tr>
            </thead>
            <tbody>';

    while ($row=mysqli_fetch_array($hasil)){
        echo '<tr>
                <td>'.$row['kdbarang'].'</td>
                <td>'.$row['nmbarang'].'</td>
                <td>'.$row['jmlbarang'].'</td>
                <td>'.$row['hrgbarang'].'</td>
            <tr>';
    }
    echo'
    </tbody>
    </table>';
?>

<?php
    $conn = mysqli_connect("localhost", "root", "", "db_inventory");
    if(!$conn){
        echo "gagal koneksi";
    }
?>
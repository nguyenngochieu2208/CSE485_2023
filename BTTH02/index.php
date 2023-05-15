<?php
    //demo hiển thị dữ liệu
    require "classes/database.php";
    
    $database = new Database();

    $sinhViens = $database->getAll("sinhvien");

    // print_r($sinhViens);
    foreach ($sinhViens as $sinhVien) {
        echo "IDsv: " . $sinhVien['idSV'] . "<br>";
        echo "Name: " . $sinhVien['tenSV'] . "<br>";
        echo "Email: " . $sinhVien['email'] . "<br>";
        echo "<br>";
    }
?>


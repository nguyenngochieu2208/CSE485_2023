<?php
//demo hiển thị dữ liệu
// require "classes/database.php";

// $database = new Database();

// $sql = "SELECT * FROM sinhvien";
// $sinhViens = $database->sqlPDO($sql);

// foreach ($sinhViens as $sinhVien) {
//     echo "IDsv: " . $sinhVien['idSV'] . "<br>";
//     echo "Name: " . $sinhVien['tenSV'] . "<br>";
//     echo "Email: " . $sinhVien['email'] . "<br>";
//     echo "<br>";
// }


?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    <div class="form-login h-100 d-flex justify-content-center align-items-center ">
        <form class="rounded-2 bg-warning p-4" style="width: 50%;" action="index.php" method="POST">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control mb-4" id="email" name="email" placeholder="......@gmail.com">

            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control mb-4" id="password"  name="password" placeholder="*********">

            <div class="d-flex">
                <input class="btn btn-primary" type="submit" value="Đăng nhập">

                <a class="text-decoration-none vertical-align-center" href="">Đăng Ký Tài Khoản</a>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
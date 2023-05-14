<?php 
    require "classes/Student.php";
    require "classes/StudentDAO.php";
    
    $studentDAO = new StudentDAO();

    $students = $studentDAO->getAll();
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    <div class="btn btn-primary my-3">
        <a class="text-decoration-none text-white" href="create.php">Thêm Sinh Viên</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Lớp</th>
            <th scope="col">Điểm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                <td>
                    <?= $student->getId() ?>
                </td>
                <td>
                    <?= $student->getTen() ?>
                </td>
                <td>
                    <?= $student->getLop() ?>
                </td>
                <td>
                    <?= $student->getDiem() ?>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
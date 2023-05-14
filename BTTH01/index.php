<?php 
    require "classes/Student.php";
    require "classes/StudentDAO.php";
    
    $studentDAO = new StudentDAO();
<<<<<<< HEAD
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="text">
    <?php
        $Id = "";
        $Name = "";
        $Class = "";
        $Point = "";

        if (isset($_POST["Them"])) {
            $Id = $_POST["Id"];
            $Name = $_POST["Name"];
            $Class = $_POST["Class"];
            $Point = $_POST["Point"];
        }

        if ($Id != "" && $Name != "" && $Class != "" && $Point != "") {
            $student = new Student ($Id, $Name, $Class, $Point);
            $studentDAO->create($student);

            header('Location: index.php');
            exit();
        }
        
    ?>
</div>

<form style="width: 24%; margin: 0 auto;" method="POST">
  <div class="mb-3">
    <label for="Id" class="form-label">Id: </label>
    <input type="text" class="form-control" name="Id" id="Id">
  </div>
  <div class="mb-3">
    <label for="Name" class="form-label">Họ tên: </label>
    <input type="text" class="form-control" name="Name" id="Name">
  </div>
  <div class="mb-3">
    <label for="Class" class="form-label">Lớp: </label>
    <input type="text" class="form-control" name="Class" id="Class">
  </div>
  <div class="mb-3">
    <label for="Point" class="form-label">Điểm: </label>
    <input type="text" class="form-control" name="Point" id="Point">
  </div>
  <button type="submit" name="Them" class="btn btn-primary">Thêm</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
=======

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
>>>>>>> 695596e28a94b4ee70df05f691ee7e39c190a33e

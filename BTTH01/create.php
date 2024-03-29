

+<?php 
    require "classes/Student.php";
    require "classes/StudentDAO.php";
    
    $studentDAO = new StudentDAO();
    $studentDAO->create($student);
    
    header('Location: index.php');
    // exit();
  ?>

 <head>
   <title>Create</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>

 <body>
   <form style="width: 24%; margin: 0 auto;" method="POST" action="create.php">
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
     <input class="btn btn-primary" type="submit" value="Thêm" name="them">
   </form>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>

 </html>
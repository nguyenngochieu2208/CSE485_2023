<head>
    <title>Thêm môn mới</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="content_text">
        <div class="container fluid">
            <div class="row content_text">
                <div class="box_text col-12 text-center">
                    <h1 style="color: rgb(56, 236, 236);">Thêm môn học</h1>
                    <hr>

                </div>
            </div>
        </div>
    </div>

<div class="content">
        <div class="container">
            <div class="row box_content mt-5">
                <form class="col-12 col-sm-12" method="POST">
                    <div class="input-group">
                        <span class="input-group-text">Tên môn học</span>
                        <input name="Name" type="text" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Id</span>
                        <input name="Id" type="number" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Thời gian môn</span>
                        <input name="Date" type="text" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Giáo viên</span>
                        <input name="Teacher" type="text" class="form-control">
                    </div>
                    <div><input class="add-btn btn btn-primary" type="submit" name="them" value="Thêm"></div>
                </form>
            </div>
        </div>
    </div>
</body>
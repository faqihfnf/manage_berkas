<?php 
require 'functions.php';

// get data dari url
$id = $_GET["id"];


$karyawan_rappel = query("SELECT *  FROM karyawan_rappel WHERE id = $id") [0];

if(isset($_POST["update"])) {

    if (update($_POST) > 0 ){

        echo "<script> alert('Data Berhasil Diupdate');
        document.location.href = 'index.php'
        </script>";
    
    }
    
    else {
        echo "<script> alert('Data Gagal Diupdate');
        document.location.href = 'index.php'
        </script>";
    }
}
    ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center text-primary">Update Data Karyawan Rapel</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<main>
    <section id="input">
    <div class="container"></div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $karyawan_rappel["id"]?>">
                <div class="mb-3">
                    <label for="employee_id" class="form-label">Employee ID</label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id" required value="<?= $karyawan_rappel["employee_id"]?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required value="<?= $karyawan_rappel["name"]?>">
                </div>
                <div class="mb-3">
                    <label for="job_level" class="form-label">Job Level</label>
                    <input type="text" class="form-control" id="job_level" name="job_level" required value="<?= $karyawan_rappel["job_level"]?>">
                </div>
                <div class="mb-3">
                    <label for="job_position" class="form-label">Job Position</label>
                    <input type="text" class="form-control" id="job_position" name="job_position" required value="<?= $karyawan_rappel["job_position"]?>">
                </div>
                <div>
                    <div class="mb-3">
                        <label for="organization" class="form-label">Organization</label>
                        <input type="text" class="form-control" id="organization" name="organization" required value="<?= $karyawan_rappel["organization"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="periode" class="form-label">Periode</label>
                        <input type="text" class="form-control" id="periode" name="periode" required value="<?= $karyawan_rappel["periode"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required value="<?= $karyawan_rappel["keterangan"]?>"></input>
                    </div>
                    <button type="submit" name="update"  class="btn btn-primary">Update</button>  
                    <a href="index.php"><button type="button" class="btn btn-danger">Kembali</button></a>    
                </div>
            </form>
        </div>
    </div>
    </section>
</main>
</html>


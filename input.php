
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
    <h1 class="text-center text-primary">Input Data Karyawan Rapel</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<main>
    <section id="input">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="employee_id" class="form-label">Employee ID</label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="job_level" class="form-label">Job Level</label>
                    <input type="text" class="form-control" id="job_level" name="job_level" required>
                </div>
                <div class="mb-3">
                    <label for="job_position" class="form-label">Job Position</label>
                    <input type="text" class="form-control" id="job_position" name="job_position" required>
                </div>
                <div>
                    <div class="mb-3">
                        <label for="organization" class="form-label">Organization</label>
                        <input type="text" class="form-control" id="organization" name="organization" required>
                    </div>
                    <div class="mb-3">
                        <label for="periode" class="form-label">Periode</label>
                        <input type="text" class="form-control" id="periode" name="periode" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control" id="keterangan" name="keterangan" rows="5" required></textarea>
                    </div>
                    <button type="submit" name="submit"  class="btn btn-success">Submit</button>   
                    <a href="index.php"><button type="button" class="btn btn-danger">Kembali</button></a>   
                </div>
            </form>
        </div>
    </div>
    </div>
    </section>
</main>
</html>

<?php 
$koneksi = mysqli_connect("localhost","root","faqih1993","rappel_gaji");


if(isset($_POST["submit"])){
    mysqli_query($koneksi, "insert into karyawan_rappel set
    employee_id = '$_POST[employee_id]',
    name = '$_POST[name]', 
    job_level = '$_POST[job_level]',
    job_position = '$_POST[job_position]',
    organization = '$_POST[organization]',
    periode = '$_POST[periode]',
    keterangan = '$_POST[keterangan]'");    
    
    echo "<script> alert('Data Berhasil Ditambahkan');
    document.location.href = 'index.php'
    </script>";
}
?>




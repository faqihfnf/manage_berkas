<?php 

require 'functions.php';

if(isset($_POST["register"])) {

if(registrasi($_POST) > 0 ) {

    echo "<script>
    alert('Registrasi Berhasil');
    </script>";
} 

else {
    echo mysqli_error($conn);
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Regristrasi</title>
</head>
<body>
    
<h1>Halaman Registrasi</h1>

<form action="" method="post">
<div class="col-md-2">
<div class="mb-3">
  <label for="username" class="form-label">Email</label>
  <input type="email" name="email" id="email" class="form-control">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="text" name="password" id="password" class="form-control">
  </div> 

  <div class="mb-3">
  <label for="password2" class="form-label">Konfirmasi Password</label>
  <input type="text" name="password2" id="password2" class="form-control">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Submit</button>
  
</form>

</body>
</html>
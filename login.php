<?php 
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}


require 'functions.php';

if(isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user 
    WHERE email = '$email'" );

//  cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

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
    <title>Login</title>
</head>
<body>

<h1 class="text-center">Halaman Log in</h1>
<?php if(isset($error)): ?>
   <script>
    alert('Login Gagal');
    </script>
    <?php endif; ?>

</body>

<main> 
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <form action="" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div> 
  <button type="submit" name="login" class="btn btn-success">login</button>
  </div> 
        </form>
</div>
</div>
</div>


</main>

</html>
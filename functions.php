<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

$conn = mysqli_connect("localhost","root","faqih1993","rappel_gaji");

function koneksi()  {
    $conn = mysqli_connect("localhost","root", "faqih1993","rappel_gaji");
    mysqli_select_db($conn, "rappel_gaji");
    return $conn;
}
function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] =$row;
}
return $rows;
}


function hapus($id) {
    $conn = mysqli_connect("localhost","root","faqih1993","rappel_gaji");
    mysqli_query($conn, "DELETE FROM karyawan_rappel where id = $id");

    return mysqli_affected_rows($conn);
}

function update($data) {
    $conn = mysqli_connect("localhost","root","faqih1993","rappel_gaji");

$id = $data["id"];
$name = $data["name"];
$employee_id = $data["employee_id"];
$job_level = $data["job_level"];
$job_position = $data["job_position"];
$organization = $data["organization"];
$periode = $data["periode"];
$keterangan = $data["keterangan"];

$query = "UPDATE karyawan_rappel SET
name = '$name',
employee_id = '$employee_id',
job_level = '$job_level',
job_position = '$job_position',
organization = '$organization',
periode = '$periode',
keterangan = '$keterangan'
WHERE id = $id
";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function registrasi($data) {
    $conn = mysqli_connect("localhost","root","faqih1993","rappel_gaji");

    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]) ;
    $password2 = mysqli_real_escape_string($conn, $data["password2"]) ;

    // cek email sudah dipakai atau belum
$result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
if(mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('Email sudah terdaftar. Silahkan gunakan email yang lain!')
    </script>";
    return false;
}


    // cek konfirmasi password

if($password !== $password2){
    echo "<script>
    alert('konfirmasi password salah')
    </script>";
    return false;
}

//encript password

$password = password_hash($password, PASSWORD_DEFAULT);

// tambahkan user ke database

mysqli_query($conn, "INSERT INTO user (email, password) VALUES('$email', '$password')");

// mysqli_query($conn, "INSERT INTO user set
// email = '$_POST[email]',
// password = '$_POST[password]'");

return mysqli_affected_rows($conn);



}



?>
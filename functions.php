<?php 
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





?>
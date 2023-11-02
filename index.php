<?php
function koneksi()  {
    $conn = mysqli_connect("localhost","root", "faqih1993");
    mysqli_select_db($conn, "rappel_gaji");
    return $conn;
}


function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] =$row;
}
return $rows;
}
$karyawan_rappel = query("SELECT *  FROM karyawan_rappel")
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Tabel Data</title>
</head>

<body>
    <h1 class="d-flex justify-content-center bg-primary-subtle">Data Rappel Gaji Karyawan </h1>
    <div class="container p-5">
    <a href="input.php"><button type="button" class="btn btn-info">Tambah Data Karyawan</button></a>    
    
        <br><br>
        <table id="myTable" class="table table-hover">
            <thead>
                <!-- Judul Tabel -->
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job Level</th>
                    <!-- <th scope="col">Job Position</th> -->
                    <th scope="col">Organization</th>
                    <th scope="col">Periode</th>
                    <!-- <th scope="col">Keterangan</th> -->
                    <th scope="col"></th>
                </tr>
                <!-- Judul Tabel -->
            </thead>
            <tbody>
                <!-- Isi Tabel Didapat dari form input -->
                <?php $i = 1; ?>
                <?php foreach($karyawan_rappel as $rappel): ?>
                <tr>
                    <th scope="row">
                        <?= $i++; ?>
                    </th>
                    <td>
                        <?= $rappel['employee_id']; ?>
                    </td>
                    <td>
                        <?= $rappel['name']; ?>
                    </td>
                    <td>
                        <?= $rappel['job_level']; ?>
                    </td>
                    <!-- <td><?= $rappel['job_position']; ?></td> -->
                    <td>
                        <?= $rappel['organization']; ?>
                    </td>
                    <td>
                        <?= $rappel['periode']; ?>
                    </td>
                    <!-- <td><?= $rappel['keterangan']; ?></td> -->
                    <td>
                        <!-- button detail -->
                        <a data-toggle="tooltip" data-placement="top" title="Detail" 
                        href="detail.php?id=<?= $rappel['id']; ?>"><img src="images/button-detail.svg"></a>

                        <!-- button update -->
                        <a data-toggle="tooltip" data-placement="top" title="Update" 
                        href="update.php?id=<?= $rappel['id']; ?>"><img src="images/button-update.svg"></a>
                        
                        <!-- button delete -->
                        <a data-toggle="tooltip" data-placement="top" title="Delete" 
                        href="hapus.php?id=<?= $rappel['id']; ?>" onclick="return confirm('Data Akan Dihapus?')">
                        <img src="images/button-delete.svg"></a>
                        
                    </td>
                </tr>

                <?php  endforeach;?>
                
                
                
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Script Java Script diluar bundle dari datatable.net -->
    <script src="script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->
   
</body>

</html>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/99cbdce537.js" crossorigin="anonymous"></script>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2 align="center">Data Mahasiswa</h2>
    <div class="py-2">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="create.php">Create Data Mahasiswa</a>
            </li>
        </ul>
    </div>
    <div class="table-responsive">
        <table class="table-bordered" width="100%" cellspacing="0">
            <thead align="center">
            <tr bgcolor="ddd7f2">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Kelas</th>
                <th>Jenis-Kelamin</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody align="center">
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswas");
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr><td colspan="6" style="text-align: center;">Tidak ada data yang tersedia!</td></tr>';
                }
                $no = 1; 
                while ($mahasiswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$mahasiswa['nim']."</td>";
                echo "<td>".$mahasiswa['nama']."</td>";
                echo "<td>".$mahasiswa['kelas']."</td>";
                echo "<td>".$mahasiswa['jenis_kelamin']."</td>";

                echo "<td>";
                echo "<a title='Edit Data' onclick='return konfirmasi_edit()' class='btn btn-primary btn-circle' href='edit.php?nim=".$mahasiswa['nim']."'><i class='fa-solid fa-pen-to-square'></i></a> | ";
                echo "<a title='Hapus Data' class='btn btn-danger btn-circle' onclick='return konfirmasi_hapus()' href='delete.php?nim=".$mahasiswa['nim']."'><i class='fas fa-trash'></i></a>";
                echo "</td>";

                echo "</tr>";
                }
            ?>
                <script type="text/javascript">
                    function konfirmasi_hapus() {
                    tanya = confirm("Anda yakin akan menghapus data yang dipilih ?");
                    if (tanya == true) return true;
                    else return false;
                    }
                </script>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Create Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h2 align="center">Input Data Mahasiswa</h2>
        <form action="proses.php" method="post">
            <div class="form-group">
                <label>NIM</label>
                <input type="number" name="nim" required class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Kelas</label>
                <select class="form-control" name="kelas">
                    <option value="SI.4A">SI.4A</option>
                    <option value="SI.4B">SI.4B</option>
                    <option value="TI.4A">TI.4A</option>
                    <option value="TI.4B">TI.4B</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Jenis-Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <br>
        <a href="index.php" class="btn btn-outline-primary">Kembali</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
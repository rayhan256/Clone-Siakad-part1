<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tambah Guru</title>
</head>

<body>
    <div class="container">
        <h1 class="display-4 mt-4 mb-3" style="text-align: center;">Tambah Guru</h1>
        <form action="<?= base_url('guru/add_guru') ?>" method="post">
            <div class="form-group">
                <label for="">Kode Guru</label>
                <input type="text" name="kode_guru" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nama Guru</label>
                <input type="text" name="nama_guru" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat_guru" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">No Telepon</label>
                <input type="text" name="telpon_guru" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mata Pelajaran</label>
                <input type="text" name="pelajaran_guru" id="" class="form-control">
            </div>
            <input type="submit" value="Tambah Guru" class="btn btn-primary">
        </form>
    </div>
</body>

</html>

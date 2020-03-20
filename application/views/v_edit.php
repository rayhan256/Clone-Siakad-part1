<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Edit Siswa</title>
</head>

<body>
    <div class="container">
        <h1 class="display-4 mt-4" style="text-align: center;">Update Siswa</h1>
        <form action="<?= base_url('sekolah/update_sekolah'); ?>" method="post">
            <?php foreach($siswa as $s) { ?>
            <div class="form-group">
                <label for="">Id</label>
                <input type="text" name="id" id="" class="form-control" value="<?= $s->id ?>">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="" class="form-control" value="<?= $s->nama ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" id="" class="form-control" value="<?= $s->alamat ?>">
            </div>
            <div class="form-group">
                <label for="">Umur</label>
                <input type="text" name="umur" id="" class="form-control" value="<?= $s->umur ?>">
            </div>
            <input type="submit" value="Submit" class="btn btn-success">
            <?php } ?>
        </form>
    </div>
</body>

</html>

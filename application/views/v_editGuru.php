<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Edit Guru</title>
</head>

<body>
    <div class="container">
        <h1 class="display-4 mt-4 mb-3" style="text-align: center;">Edit Guru</h1>
        <form action="<?= base_url().'guru/update_guru' ?>" method="post">
            <?php foreach($guru as $g) { ?>
            <div class="form-group">
                <input type="text" name="id" id="" class="form-control" value="<?= $g->id ?>" hidden>
            </div>
            <div class="form-group">
                <label for="">Nama Guru</label>
                <input type="text" name="nama" id="" class="form-control" value="<?= $g->nama ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" id="" class="form-control" value="<?= $g->alamat ?>">
            </div>
            <div class="form-group">
                <label for="">No Telepon</label>
                <input type="text" name="telpon" id="" class="form-control" value="<?= $g->telpon ?>">
            </div>
            <div class="form-group">
                <label for="">Mata Pelajaran</label>
                <input type="text" name="mata_pelajaran" id="" class="form-control" value="<?= $g->mata_pelajaran ?>">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <?php } ?>
        </form>
    </div>
</body>

</html>

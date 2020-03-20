<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <h1 class="display-4 mb-5" style="text-align: center;">Update Siswa</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="<?= base_url('sekolah/tambah_data'); ?>" method="post" class="ml-3 mr-3 mt-4">
                        <div class="form-group">
                            <label for="">Nama :</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat :</label>
                            <input type="text" name="alamat" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Umur :</label>
                            <input type="text" name="umur" id="" class="form-control">
                        </div>
                        <input type="submit" name="submit" value="Add Student" class="btn btn-success mb-4" id="">
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url('assets/images/unnamed.JPG')?>" alt="" style="margin-left: 20%; max-width: 50%; max-height: 50%;">
            </div>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Siakad | Wowong University</title>
</head>
<style>
.carousel-item {
    height: 600px;
    width: 100%;
}

.carousel-item img {
    height: 600px;
    width: 100%;

}

img {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
    width: 80%;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Siakad | Wowong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Search Data</a>
                </li>
            </ul>
            <span class="navbar-text">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Login
                </button>
                <a href="<?= base_url('login/v_signUpSiswa') ?>"><button class="btn btn-success">
                        Sign Up
                    </button></a>
            </span>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('login/do_login_siswa') ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Username : </label>
                            <input type="text" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password : </label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn btn-secondary" data-dismiss="modal">Close</div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section id="header" class="mb-5 mt-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/images/1.JPG') ?>" class="d-inline-block w-100 h-30" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-dark">Profesional</h3>
                        <p>Wowong university melatih mahasiswa untuk lebih professional dalam pekerjaan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/2.JPG') ?>" class="d-inline-block w-100 h-30" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-dark">Literasi</h3>
                        <p>Budaya membaca untuk peningkatan ilmu diluar kampus</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/3.JPG') ?>" class="d-inline-block w-100 h-30" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Learn By Doing</h3>
                        <p>konsep yang digunakan yaitu learn by doing, belajar sekaligus tingkatkan pengalaman.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="container">
        <section id="content">
            <h4 class="display-4 mb-5">Informasi Terbaru</h4>
            <div class="card mb-4">
                <div class="card-header bg-dark text-white"><b>Informasi</b></div>
                <div class="card-body">
                    <p>Mulai tanggal 16 Maret 2020, seluruh mahasiswa kampus wowong akan diliburkan dikarenakan<br>
                        wabah virus corona yang sudah mulai merebak di indonesia. System perkuliahan akan dilaksanakan
                        dalam bentuk online </p>
                </div>
            </div>
            <section id="content">
                <div class="card mb-5">
                    <div class="card-header bg-dark text-white"><b>Informasi Sidang</b></div>
                    <div class="card-body">
                        <p>Sidang akan dilaksanakan pada akhir bulan November 2020, dan tiap mahasiswa harus sedia
                            duit<br> sebanyak-banyaknnya buat mbayar SPP. Jika belum lunas maka gak akan lulus
                            aslinaaaaaa.
                            <br>
                            <br>
                            <br>
                            Karena ada kasus korona maka sidang di universitas wowong akan diundur 3 tahun sampai satu
                            dunia gak ada korona lagi. Happy Liburan guyssss
                        </p>
                    </div>
                </div>
            </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
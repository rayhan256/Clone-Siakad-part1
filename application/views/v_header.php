<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
    <title>Teacher Table</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">School Admin</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-user navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hello, <?= $this->session->userdata('nama');?></a></li>
                    <li><a href="<?= base_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <nav class="navbar-primary">
        <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
        <ul class="navbar-primary-menu">
            <li>
                <a href="<?= base_url('sekolah/index') ?>"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Siswa</span></a>
                <a href="<?= base_url('guru/index') ?>"><span class="glyphicon glyphicon-education"></span><span class="nav-label">Guru</span></a>
                <a href="<?= base_url('karyawan/index') ?>"><span class="glyphicon glyphicon-briefcase"></span><span class="nav-label">Karyawan</span></a>
                <a href="<?= base_url('find/index') ?>"><span class="glyphicon glyphicon-search"></span><span class="nav-label">Cari</span></a>
            </li>
        </ul>
    </nav>
    <div class="main-content">

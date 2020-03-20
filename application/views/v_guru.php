<div class="container">
    <h1 class="display-4 mt-4" style="text-align: center;">Data Guru</h1>
    <hr>
    <a href="<?= base_url('guru/tambah_guru') ?>"><button class="btn btn-success mb-3">Tambah Data Guru</button></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kode Guru</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telpon</th>
                <th>Mata Pelajaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        $nomor = 1;
        foreach($guru as $g) {
        ?>
        <tbody>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $g->id ?></td>
                <td><?= $g->nama ?></td>
                <td><?= $g->alamat ?></td>
                <td><?= $g->telpon ?></td>
                <td><?= $g->mata_pelajaran ?></td>
                <td>
                    <a href="<?= base_url('guru/edit_guru/'.$g->id) ?>"><button class="btn btn-primary">Edit</button></a>
                    <a href="<?= base_url('guru/delete_guru/'.$g->id) ?>"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
</body>

</html>

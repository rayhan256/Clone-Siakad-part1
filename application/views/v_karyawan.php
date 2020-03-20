    <div class="container">
        <h1 class="display-4 mt-3" style="text-align: center;">Data Karyawan</h1>
        <hr>
        <a href="<?= base_url('karyawan/v_add') ?>"><button class="btn btn-success mb-3">Tambah Data Karyawan</button></a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Id Karyawan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $nomor = 1;
            foreach($karyawan as $k) { ?>
            <tbody>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $k->id ?></td>
                    <td><?= $k->nama ?></td>
                    <td><?= $k->alamat ?></td>
                    <td><?= $k->telpon ?></td>
                    <td><?= $k->jabatan?></td>
                    <td>
                        <a href="<?= base_url('karyawan/v_editKaryawan/'.$k->id) ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="<?= base_url('karyawan/delete_karyawan/'.$k->id) ?>"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
    </body>

    </html>

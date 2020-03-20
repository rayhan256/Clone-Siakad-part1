    <br>
    <div class="container">
        <h1 class="display-4 mt-3" style="text-align: center;">Data Siswa</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url('sekolah/add') ?>"><button class="btn btn-success mb-3">Tambah Data Siswa</button></a>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        $nomor = 1;
                        foreach($siswa as $s) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?php echo $s->nama ?></td>
                            <td><?php echo $s->alamat ?></td>
                            <td><?php echo $s->umur ?></td>
                            <td><a href="<?= base_url('sekolah/edit/'.$s->id_siswa) ?>"><button class="btn btn-primary">Update</button></a>
                                <a href="<?= base_url('sekolah/delete/'.$s->id_siswa)?>"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <div class="col-md-6">
                <canvas id="myChart" width="200px" height="200px" style="max-width: 400px; max-height: 400px;"></canvas>
            </div>
        </div>
    </div>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Siswa', 'Guru', 'Karyawan'],
                datasets: [{
                    label: 'Jumlah Siswa',
                    data: [4, 5, 6],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>

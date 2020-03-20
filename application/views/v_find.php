<script>
    var baseurl = "<?php echo base_url(""); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js

</script>
</head>

<body>
    <h1>Data Siswa</h1>
    <hr>
    <form action="<?= base_url('find/index')?>" method="post">
        <label for="">Search</label>
        <input type="text" name="keyword" id="">
        <input type="submit" value="Submit">
    </form>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
            </tr>
        </thead>
        <?php foreach($siswa as $s) : ?>
        <tbody>
            <tr>
                <td><?= $s->nama;?></td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
    <script>
        /*
        $(document).ready(function() {
            $("#btn-search").click(function() { // Ketika tombol simpan di klik
                // Ubah text tombol search menjadi SEARCHING... 
                // Dan tambahkan atribut disable pada tombol nya agar tidak bisa diklik lagi
                $(this).html("SEARCHING...").attr("disabled", "disabled");

                $.ajax({
                    url: baseurl + 'find/search', // File tujuan
                    type: 'POST', // Tentukan type nya POST atau GET
                    data: {
                        keyword: $("#keyword").val()
                    }, // Set data yang akan dikirim
                    dataType: "json",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(response) { // Ketika proses pengiriman berhasil
                        // Ubah kembali text button search menjadi SEARCH
                        // Dan hapus atribut disabled untuk meng-enable kembali button search nya
                        $("#btn-search").html("search").removeAttr("disabled");

                        // Ganti isi dari div view dengan view yang diambil dari controller siswa function search
                        $("#view").html(response.hasil);
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
                        alert(xhr.responseText); // munculkan alert
                    }
                });
            });
        });

    </script>

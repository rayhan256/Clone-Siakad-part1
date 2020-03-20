<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title> Title </title>
</head>

<body>
    <table border="1" cellpadding="8" class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nama Siswa</th>
                <th>Alamat Siswa</th>
                <th>Umur</th>
            </tr>
        </thead>
        <br><br>
        <?php
  if( ! empty($siswa)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa dari controller
      
      echo "<tr>";
      echo "<td>".$data->nama."</td>";
      echo "<td>".$data->alamat."</td>";
      echo "<td>".$data->umur."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
  }
  ?>
    </table>
</body>

</html>

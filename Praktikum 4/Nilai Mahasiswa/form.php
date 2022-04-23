<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <h1 class="text-center">Nilai Mahasiswa</h1>
  <br>
  <form action="form.php" method="POST">
    <div class="form-group row">
      <label for="nim" class="col-4 col-form-label">NIM</label>
      <div class="col-8">
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Matkul</label>
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
          <option value="DDP">Dasar Dasar Pemograman</option>
          <option value="BDI">Basis Data</option>
          <option value="Web1">Pemograman Web</option>
        </select>
      </div>
    </div>
    </div>
    <div class="form-group row">
      <label for="nilai" class="col-4 col-form-label">Nilai</label>
      <div class="col-8">
        <input id="nilai" name="nilai" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="proses" value="SIMPAN" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  <hr>
  <!-- kode php -->
  <?php
  require_once 'class_mahasiswa.php';
  if ($_POST) {
    $ns = new Mahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);
    echo "NIM :" . $ns->nim;
    echo '<br>';
    echo "Matakuliah :" . $ns->matkul;
    echo '<br>';
    echo "Nilai :" . $ns->nilai;
    echo '<br>';
    echo "Status :" . $hasil;
    echo '<br>';
    echo "Grade :" . $hasil2;
  }
  ?>
</body>

</html>
<?php

require_once 'class bankakun.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>From ATM</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 mx-auto">
    <h3 class="col-12 bg-primary text-white py-2">Form </h3>
    <hr>
    <div class="row">
      <div class="col-12">
        <div style="width:50%; margin:auto;" class="card-body">
          <form method="POST" action="form.php">
            <div class="form-group row">
              <label for="nomor" class="col-4 col-form">No.Account</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input id="nomor" name="nomor" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="saldo_awal" class="col-4 col-form-label">Tabungan Awal</label>
              <div class="col-8">
                <input id="saldo_awal" name="saldo_awal" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="customer" class="col-4 col-form-label">Nama Customer</label>
              <div class="col-8">
                <input id="customer" name="customer" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <hr>
</body>

</html>



<?php
$_nomor = $_POST['nomor'];
$_saldo = $_POST['saldo_awal'];
$_customer = $_POST['customer'];

$ab1 = new BankAccount($_nomor, $_saldo, $_customer);
$ab1->cetak();

?>
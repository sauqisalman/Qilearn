<?php

$angka1 = @$_POST['tangka1'];
$angka2 = @$_POST['tangka2'];
$hasil = @$_POST['thasil'];

if (isset($_POST['btambah'])) {
  $hasil = $angka1 + $angka2;
}
if (isset($_POST['bkurang'])) {
  $hasil = $angka1 - $angka2;
}
if (isset($_POST['bkali'])) {
  $hasil = $angka1 * $angka2;
}
if (isset($_POST['bbagi'])) {
  $hasil = $angka1 / $angka2;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sauqi | Kalkulator</title>
  <link rel="shortcut icon" href="calculator.ico" type="image/x-icon">
</head>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Poppins:wght@200;300&family=Roboto:wght@300&display=swap");
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');

  * {
    margin: 0;
    padding: 0;
  }

  body {
    background-image: url(gradient.jpg);
    background-size: cover;
    background-position: center;
    box-shadow: inset 9999px 0 0 rgb(0, 0, 0, .3);
  }

  .container {
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  }

  form {
    width: 300px;
    height: 350px;
    background-color: #00a8ff;
    display: block;
    padding: 10px;
    border-radius: 5px;
    border: 5px solid black;
  }

  input {
    outline: none;
    text-align: center;
    font-family: arial;
  }

  .tombol-operasi {
    text-align: center;
  }

  .tombol-operasi input {
    width: 40px;
    height: 20px;
    margin-top: 5px;
  }

  span {
    display: block;
  }

  .judul {
    text-align: center;
    font-family: Oswald;
    font-weight: bold;
    font-size: 30px;
  }

  .kolom1 {
    text-align: center;
  }

  .kolom1 input {
    margin: 10px 0;
    width: 200px;
    height: 30px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border: 2px solid;
  }

  .kolom2 {
    text-align: center;
  }

  .kolom2 input {
    width: 200px;
    height: 30px;
    margin: 10px 0;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border: 2px solid;
  }

  .hasil {
    text-align: center;
    margin-top: 10px;
  }

  .hasil input {
    width: 200px;
    height: 30px;
    margin: 10px 0;
    border: 2px solid black;
    font-family: Oswald;
    color: black;
    font-size: 18px;
    background-color: #00a8ff;
  }

  .container .nama {
    width: 400px;
    height: 200px;
    background-color: #00a8ff;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    font-family: Montserrat;
    border: 5px solid black;
    border-radius: 5px;
  }

  .nama .sauqi {
    font-weight: bolder;
  }

  a {
    font-family: arial;
    font-weight: bold;
    text-transform: uppercase;
    color: #00a8ff;
    border: 4px solid #00a8ff;
    display: block;
    margin: 10px auto;
    text-decoration: none;
    height: 30px;
    width: 100px;
    text-align: center;
    line-height: 30px;
  }

  @media (max-width : 400px ){
    .container {
      display: block;
    }
    .nama {
      margin: auto;
      width: 250px;
    }
    form {
      margin: 20px auto;
    }
  }
</style>

<body>
  <div class="container">
    <div class="nama">
      <h1 class="sauqi">SAUQI SALMAN SETIAWAN</h1>
      <p>XI-TKJ</p>
      <p>Absen 28</p>
      <p>Tugas Membuat Kalkulator Sederhana</p>
    </div>
    <form action="" method="POST">
      <div class="judul">
        <span>Kalkulator Sederhana</span>
      </div>
      <div class="kolom1">
        <span>Angka Pertama</span>
        <input type="text" name="tangka1" value="<?= $angka1 ?>" />
      </div>
      <div class="kolom2">
        <span>Angka Kedua</span>
        <input type="text" name="tangka2" value="<?= $angka2 ?>" />
      </div>
      <div class="tombol-operasi">
        <span>Pilih Operasi</span>
        <div class="tombol">
          <input type="submit" value="+" name="btambah" />
          <input type="submit" value="-" name="bkurang" />
          <input type="submit" value="x" name="bkali" />
          <input type="submit" value="/" name="bbagi" />
        </div>
      </div>
      <div class="hasil">
        <span>Hasil</span>
        <input type="text" name="thasil" value="<?= $hasil ?>" />
      </div>
    </form>
  </div>
  <a href="../main.html">HOME</a>
</body>

</html>
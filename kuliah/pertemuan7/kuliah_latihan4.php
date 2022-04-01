<?php 
$mahasiswa = [
    ["nama" =>'M Paisal Ambari',
    "gambar" => "img/poto.jpeg",
    'npm'=>'213040065', 
    'email'=>'paisalambari15@gmail.com',
    'prodi'=>"Teknik Informatika"], 

    ["nama"=>'Juan Aditya',
    "gambar" => "img/org1.PNG",
    'npm'=>'213040053',
     'email'=>'Juanaditya@gmail.com',
     'prodi' =>'Teknik Informatika'],

    ["nama"=>'M Priamitra', 
    "gambar" => "img/org2.PNG",
    'npm'=>'213040063',
    'email'=>'priamitra@gmail.com',
    'prodi'=> 'Teknik Informatika'],
   
    ["nama"=>'Audi Hezra',
    "gambar" => "img/org3.PNG",
    'npm'=>'213040066',
    'email' => 'Audihezra@gmail.com',
    "prodi"=> 'Teknik Informatika'],
    
    ["nama"=>'M Daffa Abdul',
    "gambar" => "img/org4.PNG",
    "npm"=>'213040038',
    "email"=>'Daffa@gmail.com',
    "prodi"=>'Teknik Informatika']
]; ?>
<<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>

<body>
    <div class="container my-3 ">
        <h1>Detail Mahasiswa</h1>

        <div class="card mb-3 " style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $_GET['gambar']; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
                        <p class="card-text"><?= $_GET['npm']; ?></p>
                        <p class="card-text"><?= $_GET['email']; ?></p>
                        <p class="card-text"><?= $_GET['prodi']; ?></p>

                        <a href="kuliah_latihan3.php" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
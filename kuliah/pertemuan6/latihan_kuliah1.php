<?php 
// Array Associative
// Array yang indexnya berupa string, yang berasosiasi atau berpasangan dengan nilai

$mahasiswa = [
    [   
        "nama" => "paisal ambari",
        "npm" => "213040065", 
        "email" => "paisalambar@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Audi Hzr", 
        "npm" => "213040066", 
        "email" => "audihzr@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Juan Aditya",
        "npm" => "213040053", 
        "email" => "juanaditya@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
];
// var_dump($mahasiswa[3]["nama"]);
    
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama  : <?php echo $mhs["nama"]?></li>
    <li>NPM   : <?php echo $mhs["npm"]?></li>
    <li>Email : <?php echo $mhs["email"]?></li>
    <li>Prodi : <?php echo $mhs["jurusan"]?></li>
</ul>
<?php } ?>
<?php 

$mahasiswa = [
    [//1.
        "nrp" => "223040153",
        "nama" => "Rifqi Harits Pratama D",
        "email" => "Rifqi.223040153@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//2.    
        "nrp" => "223040148",
        "nama" => "Muhammad Nizarul Faizin",
        "email" => "Nizarul.223040148@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//3.
        "nrp" => "223040157",
        "nama" => "Muhamad Faiz Alhadziq Naufal Athallah",
        "email" => "Faiz.223040157@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//4.
        "nrp" => "223040137",
        "nama" => "Aldo Leonard Albaihaqi",
        "email" => "Aldo.223040137@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//5.
        "nrp" => "223040150",
        "nama" => "Dicky Dwi Dermawan",
        "email" => "Dicky.223040150@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//6.
        "nrp" => "223040168",
        "nama" => "Genta Sena Irasta",
        "email" => "Genta.223040168@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//7.
        "nrp" => "223040146",
        "nama" => "Muhammad Adis Sumarwin",
        "email" => "Adis.223040146@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//8.
        "nrp" => "223040175",
        "nama" => "Hilmi Anugrah Bela Negara",
        "email" => "Hilmi.223040175@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//9.
        "nrp" => "223040165",
        "nama" => "Ilman Hanifa",
        "email" => "Ilman.223040165@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//10.
        "nrp" => "223040164",
        "nama" => "Herdy Sya'banul Hakim",
        "email" => "Herdy.223040164@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ]
    
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas5</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>
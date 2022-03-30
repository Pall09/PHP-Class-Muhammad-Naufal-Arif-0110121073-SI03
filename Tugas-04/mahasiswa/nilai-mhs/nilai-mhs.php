<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    .text {
        margin-top: 20px;
        margin-left: 12px;
    }
    </style>
</head>

<body>

    <?php
        include_once "navbar.php";
        include_once "input-nilai.php";
    ?>
    <hr>
    <div class="container">
    <?php
        require_once "class_nilai.php";

        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        

        $dataMhs = new NilaiMahasiswa($nim, $matkul, $nilai);

        if (isset($_POST['proses'])) {
            echo '<ul>';
            echo '<li>NIM : '. $dataMhs->nim . '</li>';
            echo '<li>Mata Kuliah : '. $dataMhs->matkul . '</li>';
            echo '<li>Nilai : '. $dataMhs->nilai . '</li>';
            echo '<li>Hasil Ujian : '. $dataMhs->grade($dataMhs->nilai) . '</li>';
            echo '<li>Grade : '. $dataMhs->hasil($dataMhs->nilai) . '</li>';
            echo '</ul>';
        }else {
            echo "<script>console.log('Variabel Kosong');</script>";
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
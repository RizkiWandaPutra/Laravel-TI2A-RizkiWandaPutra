<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ol>
    <div>
        copyright&copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika-PNL
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01; ?></li>
        <li>t?></li>
        <li>e?></li>
        <li>w?></li>
    </ol>
    <div>
        copyright&copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika-PNL
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <ol>
        <?php 
            foreach ($mahasiswa as $nama) {
                echo "<li>$nama</li>";
            } ?>
    </ol>
    <div>
        copyright&copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika-PNL
    </div>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01; ?></li>
    </ol>
    <div>
        copyright&copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika-PNL
    </div>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php 
            foreach ($mahasiswa as $nama){
                echo "<li>$nama</li>";
            } ?></li>
    </ol>
    <div>
        copyright&copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika-PNL
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Proses</title>
</head>
<body>
    <?php
    echo "Nama Lengkap :";
    if (isset($_POST['nama'])) {

        echo $_POST ['nama'];
    }
    echo"<br>";
    echo "Tempat Lahir :";
    if (isset($_POST['Tempat Lahir'])){

        echo $_POST ['Tempat Lahir'];
    }

    echo"<br>";
    echo "Tangal Lahir  :";
    if (isset($_POST['Birth'])){
        
        echo $_POST ['Birth'];
    }

    echo"<br>";
    echo "Jenis Kelamin:";
    if(isset($_POST['Jenis Kelamin'])){

    echo $_POST ['jenis Kelmain'];
    }

    echo"<br>";
    echo "Alamat:";
    if(isset($_POST['Alamat'])){

        echo $_POST ['Alamat'];
    }

    echo"<br>";
    echo "Agama:";
    if(isset($_POST['Agama'])){

        echo $_POST ['Agama'];
    }
?>
</body>
</html>
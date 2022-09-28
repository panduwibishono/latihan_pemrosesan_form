<!Doctype html>
<html lang="en">
    <head>
        <title>Tugas Pendaftaran</title>
        </head>
        <center>
<body>
    <h2>Pendaftaran Siswa Baru</h2>
    <h2>SMKN 1 SAYUNG </h2>
        <form action="Proses.php" method="post">
        <table border=0>

    <tr>
        <td>Nama Lengkap:</td>
        <td><input type="text" name="nama" /> <br /></td>
</tr>

<tr>
    <td>

<tr>
    <td>Tempat Lahir</td>
    <td><input type="text" name="Tempat Lahir" /> <br /></td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td><input type="Date" nam="Birth" /> <br /></td>
</tr>

<tr>
    <td> Jenis Kelamin </td>
    <td>
    <input type="radio" name="Jenis Kelamin" value="laki-laki" />Laki-Laki
    <input type="radio" name="Jenis Kelamin" value="Perempuan" /> Perempuan
</td>
</tr>

<tr>
    <td>Alamat</td>
<td>
    <Textarea name="Alamat" > </Textarea>
    </td>
</tr>

<tr>
    <td>Agama</td>
    <td>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <select name="Agama">
        <option value="">
        <option value="Islam">Islam
            <option value="Kristen">Kristen
                <option value="Budha">Budha
                    <option value="Hindu">Hindu
                        <option value="Konghucu">Konghucu
</select > <br />
<form>
</tr>

<tr>
    <td>
         <input type="submit" value="Ulang" />
</td>

    <td>
        <input type="submit" value="Submit" />
</td>
</tr>

</form>
</body>
</html>
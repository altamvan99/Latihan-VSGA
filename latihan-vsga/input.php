<html>

<head>

<body>
    <h2>Input data </h2>

    <a href="welcome.php" style="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Data Buku</a><br><br>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Id Buku</td>
                <td>:</td>
                <td><input type="text" name="idbuku" placeholder="Nik" required></td>
            </tr>

            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" placeholder="Judul" required></td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang" placeholder="pengarang" required></td>
            </tr>

            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><input type="text" name="isbn" placeholder="isbn" required></td>
            </tr>

            <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><input type="text" name="tahun_terbit" placeholder="Tahun Terbit" required></td>
            </tr>


            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan"></td>
            </tr>

        </table>
    </form>

    <?php

    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $insert = mysqli_query($koneksi, "INSERT INTO buku VALUES 
('" . $_POST['idbuku'] . "',
'" . $_POST['judul'] . "',
'" . $_POST['pengarang'] . "',
'" . $_POST['isbn'] . "',
'" . $_POST['tahun_terbit'] . "') ");


        if ($insert) {
            echo 'Berhasil disimpan';
        } else {
            echo 'gagal disimpan' . mysqli_error($koneksi);
        }
    }
    ?>


</body>
</head>

</html>
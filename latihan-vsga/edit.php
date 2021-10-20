<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='" . $_GET['idbuku'] . "' ");
$result = mysqli_fetch_array($data_edit);
?>

<html>

<head>

<body>
    <h2>Edit data </h2>

    <a href="welcome.php" style="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Biodata</a><br><br>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>ID BUKU</td>
                <td>:</td>
                <td><input type="text" name="idbuku" value="<?php echo $result['idbuku'] ?>" required></td>
            </tr>

            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul" value="<?php echo $result['judul'] ?>" required></td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang" value="<?php echo $result['pengarang'] ?>" required></td>
            </tr>

            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><input type="text" name="isbn" value="<?php echo $result['isbn'] ?>" required></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><input type="text" name="tahun_terbit" value="<?php echo $result['tahun_terbit'] ?>" required></td>
            </tr>



            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="simpan"></td>
            </tr>

        </table>
    </form>

    <?php

    if (isset($_POST['edit'])) {
        $update = mysqli_query($koneksi, "UPDATE buku SET judul = '" . $_POST['judul'] . "',
        pengarang = '" . $_POST['pengarang'] . "',
        isbn = '" . $_POST['isbn'] . "',
        tahun_terbit = '" . $_POST['tahun_terbit'] . "'
        WHERE idbuku = '" . $_GET['idbuku'] . "' ");

        if ($update) {
            echo 'berhasil di edit';
        } else {
            echo 'gagal di edit';
        }
    }
    ?>
</body>
</head>

</html>
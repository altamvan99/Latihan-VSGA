<?php

?>
<html>

<head>
    <title>Halaman</title>
</head>

<body>
    <h1>Selamat datang </h1>


    <a href="input.php" style="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Tambah Data</a><br><br>
    <table border="1" cellspacing="0" width="50%">
        <tr style="text-align:center; font-weight:bold; background-color:#eee; ">
            <td>no</td>

            <td>ID buku</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>ISBN</td>
            <td>Tahun Terbit</td>
            <td>opsi</td>

        </tr>


        <?php
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($koneksi, "select * from buku");
        if (mysqli_num_rows($select) > 0) {
            while ($hasil = mysqli_fetch_array($select)) {
        ?>


                <td><?php echo $no++ ?></td>

                <td><?php echo $hasil['idbuku'] ?> </td>
                <td><?php echo $hasil['judul'] ?> </td>
                <td><?php echo $hasil['pengarang'] ?> </td>
                <td><?php echo $hasil['isbn'] ?> </td>
                <td><?php echo $hasil['tahun_terbit'] ?> </td>
                <td>
                    <a href="edit.php?idbuku=<?php echo $hasil['idbuku'] ?> ">Edit</a> ||

                    <a href="hapus.php?idbuku=<?php echo $hasil['idbuku'] ?> " onclick="return confirm('Are you sure?')">Hapus</a>



                </td>

                <td>

                </td>

                </tr>


            <?php }
        } else { ?>
            <tr>
                <td colspan="7" style="text-align:center;">Data Kosong</td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>
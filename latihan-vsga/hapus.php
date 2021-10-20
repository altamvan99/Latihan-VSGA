<?php
include 'koneksi.php';
if(isset ($_GET['idbuku'])){
    $delete = mysqli_query($koneksi, "DELETE FROM buku WHERE idbuku='".$_GET['idbuku']."' ");
    header ('location:welcome.php');
}

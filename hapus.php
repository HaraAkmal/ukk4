<?php
include "koneksi.php";

$id = $_GET['id'];

$result = mysqli_query($konek, "DELETE FROM barang WHERE id_barang=$id");

header("Location:index.php");
?>
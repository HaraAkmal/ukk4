<html>
<head>
    <style>
        fieldset{
            font-family: 'Courier New', Courier, monospace;
            border: 7px solid #FFACAC;
            border-radius: 8px;
            width: 50%;
            margin-left: 23%;
            margin-top: 10%;
        }
    </style>
 <title> CRUD Inventaris Barang</title>
</head>
<fieldset>

<body style="font-family:arial">
 <center><h2>Inventaris Barang <br /> Sembako</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Harga Barang</td>
                <td><input type="text" name="harga_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Stok Barang</td>
                <td><input type="text" name="stok_barang" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <div>
                <td><input type="submit" value="Tambahkan"></td>
                </div>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = $_POST['harga_barang'];
        $stok_barang = $_POST['stok_barang'];

        include "koneksi.php";

     $tambah_barang = "insert into barang values('','$nama_barang','$harga_barang','$stok_barang')";
     $kerjakan=mysqli_query($konek, $tambah_barang);
     if($kerjakan)
     {
     echo "Barang berhasil ditambahkan. <a href='index.php'>Lihat Data Barang</a>";
     }
     else
      {
      echo "Gagal menambahkan barang";
     }
    }
    ?>

</fieldset>
</body>
</html>
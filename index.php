<html>
<head>
 <title>CRUD Inventaris Barang</title>
 <style>
fieldset{
    border: 7px solid #FFACAC;
    border-radius: 8px;
    width: 50%;
    margin-left: 23%;
    margin-top: 10%;
}
 .table1 {
    font-family: 'Courier New', Courier, monospace;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
    margin-top: 8%;
}
.table1 tr th{
    background: #212A3E;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<fieldset>

<body style="font-family:courier">
 <center><h2>Inventaris Barang <br /> Sembako</h2></center>
 <hr />
 <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
  <td align=right width=70px><a href="ubah.php?id=<?php echo $id_barang;?>">Ubah</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table>
</body>
<a href="logout.php">Logout</a>

</fieldset>
</html>
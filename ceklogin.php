<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($konek, $query);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.php");
} else {
    echo "Username atau password salah.";
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $product = htmlspecialchars($_POST['product']);

    echo "<h1>Pesanan Berhasil!</h1>";
    echo "<p>Nama: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Alamat: $address</p>";
    echo "<p>Produk: $product</p>";
} else {
    echo "<h1>Akses tidak valid!</h1>";
}
?>

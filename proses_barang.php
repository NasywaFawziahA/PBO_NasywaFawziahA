<?php
include ('koneksi.php');
$koneksi = new database();
$action =$_GET ['action'];
if ($action =="add")
{
    $koneksi-> tambah_data($_post['kd_barang'],$_post['nama_barang'],$_post['stok'],$_post['harga_beli'],$_post['harga_jual'],$_files['gambar_produk']['name']);
    header ('location:tampil.php');
}
else if ($action =="edit")
{
    $koneksi-> tambah_data($_post['kd_barang'],$_post['nama_barang'],$_post['stok'],$_post['harga_beli'],$_post['harga_jual'],$_files['gambar_produk']['name']);
    header ('location:tampil.php');
}
else if ($action =="delete")
{
    $id_barang =$_get['id_barang'];
    $koneksi->delete_data($id_barang);
    header ('location:tampil.php');
}
if($action =="print_satuan")
{
    $nama_barang =$_post ['nama_barang'];
    $koneksi-> satuan_print($nama_barang);
    header('location:cetak2.php?nama_barang='.$nama_barang);
}
if ($action == "login")
{
    $koneksi->login ($_post['username'],$_post['password']);
}
if($action =="logout")
{
    $koneksi->logout();
}
?>
<?php
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
$koneksi=mysqli_connect("localhost","root","","belajar_oop");
if(!$koneksi){
    die("Koneksi gagal: ".mysqli_connect());
}
?>

<!doctype html>
<html>
    <head>
<title></title>
<style type="text/css">
    form#background_border
    {
        margin: 0px 230px;
        color:white;
    }
</style>
</head>
<body>
    <a href="tambah_data.php">Tambah Data</a>
    <form id="background_border" method="get">
        <input type="text" nama="cari" placeholder="cari nama barang">
        <input type="submit" values="cari">
    </form>
    <?php
    if (isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>hasil pencarian: ".$cari."</b>";
    }
    ?>
    <table border="1">
<tr>
    <th>No</th>
    <th>Barang</th>
    <th>Stok</th>
    <th>harga Beli</th>
    <th>Harga Jual</th>
    <th>action</th>
</tr>
<?php
$no = 1;
foreach($data_barang as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['stok'];?></td>
        <td><?php echo $row['harga_beli']; ?></td>
        <td><?php echo $row['harga_jual']; ?></td>
        <td> 
            <a href="edit_data.php? id_barang=<?php echo $row ['id_barang'];?>&action=edit">edit</a>
            <a href="proses_barang.php?id_barang=<?php echo $row['id_barang'];?>&action=delete">hapus</a>
    </td>
 </tr>
<?php
}
?>
    </table>
<br/>
<button.id="logoutButton">Logout</button>
<script>
    document.getElementById("logoutButton"). addEventListtener("click", function ().{window.location.href="logout.php";});
</script>
    </body>
</html>
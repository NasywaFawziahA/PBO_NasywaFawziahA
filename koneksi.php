<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "belajar_oop";
    var $koneksi = "";
    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }
    // Fungsi untuk menampilkan data berdasarkan ID barang
    function tampil_edit_data($id_barang) {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    // Fungsi untuk mengedit data barang
    function edit_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual, $gambar_produk) {
        // Cek apakah ada file gambar yang diupload
        if ($gambar_produk != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); // Ekstensi file gambar yang diperbolehkan
            $x = explode('.', $gambar_produk);
            $ekstensi = strtolower(end($x)); // Ekstensi file yang diupload
            $file_tmp = $_FILES['gambar_produk']['tmp_name'];
            $angka_acak = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; // Menggabungkan angka acak dengan nama file
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); // Pindahkan file gambar ke folder 'gambar/'
                // Query UPDATE untuk mengedit data berdasarkan ID
                $query = "UPDATE tb_barang SET
                            nama_barang = '$nama_barang',
                            stok = '$stok',
                            harga_beli = '$harga_beli',
                            harga_jual = '$harga_jual',
                            gambar_produk = '$nama_gambar_baru'
                          WHERE id_barang = '$id_barang'";
                $result = mysqli_query($this->koneksi, $query);
                if (!$result) {
                    die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) . " - " . mysqli_error($this->koneksi));
                } else {
                    echo "<script>alert('Data berhasil diubah.');window.location='tampil.php';</script>";
                }
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='edit_data.php';</script>";
            }
        } else {
            // Jika tidak ada gambar yang diupload, jalankan query UPDATE tanpa kolom gambar
            $query = "UPDATE tb_barang SET
                        nama_barang = '$nama_barang',
                        stok = '$stok',
                        harga_beli = '$harga_beli',
                        harga_jual = '$harga_jual'
                      WHERE id_barang = '$id_barang'";
            $result = mysqli_query($this->koneksi, $query);
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) . " - " . mysqli_error($this->koneksi));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='tampil.php';</script>";
            }
        }
    }
}
function tampil_edit_data($id_barang){
    $data = mysqli_query($this->koneksi,"select * from tb_barang where id_barang='$id_barang'");
    while($d = mysqli_fetch_array($data)){
        $hasil[] = $d;
    }
    return $hasil;
}

function edit_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual, $gambar_produk){
    // Jalankan apabila terdapat gambar edit yang di upload
    if($gambar_produk['name'] != ""){
        // Ekstensi yang diperbolehkan
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload
        $nama = $gambar_produk['name']; //menyimpan nama file dengan ekstensi yang diupload
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $gambar_produk['size'];
        $file_tmp = $gambar_produk['tmp_name'];

        // Proses pengamanan nama file
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$nama; //menggabungkan angka acak dengan nama file sebenarnya

        // Cek jika ekstensi file sesuai dengan ekstensi yang diizinkan
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            // Cek jika ukuran file tidak lebih dari 2MB
            if($ukuran < 2044070){
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar

                // Query UPDATE berdasarkan ID yang produknya kita edit
                $query = "UPDATE tb_barang SET nama_barang = '$nama_barang', stok = '$stok', harga_beli = '$harga_beli', harga_jual = '$harga_jual', gambar_produk = '$nama_gambar_baru'";
                $query .= "WHERE id_barang = '$id_barang'";
                $result = mysqli_query($this->koneksi, $query);

                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($this->koneksi).
                        " - ".mysqli_error($this->koneksi));
                } else {
                    echo "<script>alert('Data berhasil diubah.');window.location='tampil1.php';</script>";
                }
            } else {
                echo "<script>alert('Ukuran file terlalu besar');window.location='edit_data.php';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='edit_data.php';</script>";
        }
    } else {
        // Jalankan query UPDATE jika tidak ada gambar yang di upload
        $query = "UPDATE tb_barang SET nama_barang = '$nama_barang', stok = '$stok', harga_beli = '$harga_beli', harga_jual = '$harga_jual'";
        $query .= "WHERE id_barang = '$id_barang'";
        $result = mysqli_query($this->koneksi, $query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($this->koneksi).
                " - ".mysqli_error($this->koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='tampil1.php';</script>";
        }
    }
}

function delete_data($id_barang){
    mysqli_query($this->koneksi,"delete from tb_barang where id_barang='$id_barang'");
}
?>
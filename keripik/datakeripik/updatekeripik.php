    <!-- <?php
    global $id_barang;
    global $jeniskeripik;
    global $rasakeripik;
    global $harga;
   
if($_SERVER['REQUEST_METHOD']=='POST'){
    //MEndapatkan Nilai Dari Variable
    $nis = $_POST['id_barang'];
    $namasiswa = $_POST['jeniskeripik'];
    $jk = $_POST['rasakeripik'];
    $alamat = $_POST['harga'];
}

    //import file koneksi database
    require_once('../koneksi.php');

    //Membuat SQL Query
    $sql = "UPDATE siswa SET 
        jeniskeripik = '$jeniskeripik',
        rasakeripik = '$rasakeripik',
        harga = '$harga' 
        WHERE id_barang = '$id_barang';";

    //Meng-update Database
    if(mysqli_query($con,$sql)){
    echo 'Berhasil Update Data Siswa';
    }else{
    echo 'Gagal Update Data Siswa';
    }
    mysqli_close($con);
    
    ?> -->

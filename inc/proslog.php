<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password' ");
$data = mysqli_fetch_array($sql);
$cek = mysqli_num_rows($sql);
if ($cek>0) {
if ($data['role']=="pengguna") {
    $_SESSION['username']= $username;
    $_SESSION['status']= "Pengguna";
    $_SESSION['id_akun']= $data[0];
    header("location:../pengguna/index.php");

}else if ($data['role']=="perusahaan") {
    $_SESSION['username']= $username;
    $_SESSION['status']= "Perusahaan";
    $_SESSION['id_ akun']= $data[0];
    header("location:../perusahaan/index.php"); 

}

}else{
?>
<script type="text/javascript">
    alert("Akun Anda Ada Yang Salah");
    window.location="../login.php";
</script>

<?php 
}

?>
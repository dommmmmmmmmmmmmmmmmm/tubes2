<?php 
  session_start();
  include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$password' ");
$data = mysqli_fetch_array($sql);
$cek = mysqli_num_rows($sql);
if ($cek>0) {
  if ($data['level']=="admin") {
    $_SESSION['username']= $username;
    $_SESSION['status']= "ADMIN";
    $_SESSION['id_petugas']= $data[0];
    header("location:../admin/index.php");

  }else if ($data['level']=="operator") {
    $_SESSION['username']= $username;
    $_SESSION['status']= "OPERATOR";
    $_SESSION['id_petugas']= $data[0];
    header("location:../operator/index.php"); 


}else if ($data['level']=="peminjam") {
    $_SESSION['username']= $username;
    $_SESSION['status']= "PEMINJAM";
    $_SESSION['id_petugas']= $data[0];
    header("location:../peminjam/index.php");
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
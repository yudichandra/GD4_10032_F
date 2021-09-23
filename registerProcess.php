<?php
 // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
 // $_POST itu method di formnya
 if(isset($_POST['register'])){

 // untuk mengoneksikan dengan database dengan memanggil file db.php
 include('./db.php');
 // tampung nilai yang ada di from ke variabel
 // sesuaikan variabel name yang ada di registerPage.php disetiap input
 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 $npm = $_POST['npm'];
 $prodi = $_POST['prodi'];
 // Melakukan insert ke databse dengan query dibawah ini
 $query = mysqli_query($con,"INSERT INTO users(name,username, password, npm, prodi)
 VALUES('$name','$username', '$password', '$npm', '$prodi')") or die(mysqli_error($con)); 
 // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

 if($query){
 echo
 '<script>
    alert("Register Success"); window.location = "./index.php"
 </script>';
 }
 }else if ($query){
 echo
 '<script>
    alert("Register Failed"); window.location = "./registerPage.php"
 </script>';
}else{
    echo
'<script>
    window.history.back()
</script>';
}
?>
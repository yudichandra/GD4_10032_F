<?php
include ('../db.php');
if(isset($_POST['editt'])){
if(isset($_GET['hal'])){
    if($_GET['hal']=="edit"){
        $query = mysqli_query($con,"SELECT * FROM users WHERE id='$_GET[id]'");
        $data = mysqli_fetch_assoc($query);
        if($data)
        {
            $vnama=$data['name'];
            $vusername=$data['username'];
            $vpassword=$data['password'];
            $vnpm=$data['npm'];
            $vprodi=$data['prodi'];
        }
    
$query=mysqli_query($con,"UPDATE users SET name='$_POST[name]',username='$_POST[username]',password='$_POST[password]',npm='$_POST[npm]',prodi='$_POST[prodi]' WHERE id='$_GET[id]'
   ");
   if($query){
    echo
    '<script>
       alert("Create Data Success"); window.location = "../page/listMahasiswaPage.php"
    </script>';
    }
    }
}
}else if ($query){
    echo
    '<script>
       alert("Create Data Failed"); window.location = "../page/dashboardPage.php"
    </script>';
   }else{
       echo
   '<script>
       window.history.back()
   </script>';
   }
?>
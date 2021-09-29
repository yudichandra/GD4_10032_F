<?php

?>
 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
 <h4 >EDIT MAHASISWA</h4>
 <hr>
 <form action="../process/editPesertaProcess.php" method="post">
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Name</label>
 <input class="form-control" value="<?=@$vname?>" id="name" name="name" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" cslass="form-label">NPM</label>
 <input class="form-control" value="<?=@$vnpm?>" id="npm" name="npm" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Prodi</label>
 <select class="form-select"  aria-label="Default select example" name="prodi" id="prodi">
 <option value="<?=$vnprodi?>"><?=@$vnprodi?></option>
 <option value="Informatika">Informatika</option>
 <option value="Sistem Informasi">Sistem Informasi</option>
 <option value="Industri">Industri</option>
 </select>
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Username</label>
 <input class="form-control" value="<?=@$vusername?>" id="username" name="username" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputPassword1" class="form-label">Password</label>
 <input type="password" value="<?=@$vpassword?>" class="form-control" id="password" name="password">
 </div>

 <div class="d-grid gap-2">
 <button action="../process/editPesertaProcess.php" type="submit" class="btn btn-primary" name="editt">Edit Mahasiswa</button>
 </div>
 </form>
 </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
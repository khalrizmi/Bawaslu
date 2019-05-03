 <?php 

  if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "insert into user values(NULL, '$nama', '$username', '$password')");
    if ($query) {
      echo "<script>alert('berhasil menambah data');document.location.href='index.php?p=user'</script>";
    } else {
      echo "Error : ". mysqli_error($con);
    }
  }

 ?>

<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Tambah User</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label class="control-label">Nama</label>
            <input class="form-control" type="text" name="nama" required>
          </div>
          <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control" type="text" name="username" required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="text" name="password" required>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?p=user"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
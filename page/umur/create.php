<?php 

  if (isset($_POST['submit'])) {

    $rentang = $_POST['rentang'];
    $nilai = $_POST['nilai'];

    $query = mysqli_query($con, "insert into umur values(NULL, '$rentang', '$nilai')");
    if ($query) {
      echo "<script>alert('berhasil menambah data');document.location.href='index.php?p=umur'</script>";
    } else {
      echo "Error : ". mysqli_error($con);
    }
  }

 ?>

<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Tambah Umur</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label class="control-label">Rentang Nilai</label>
            <input class="form-control" type="number" name="rentang">
          </div>
          <div class="form-group">
            <label class="control-label">Nilai</label>
            <input class="form-control" type="text" name="nilai">
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?p=umur"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
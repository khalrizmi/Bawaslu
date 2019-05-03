<?php 

  $query = mysqli_query($con, "select * from ipk where id='$_GET[id]'");
  $data = mysqli_fetch_assoc($query);

  if (isset($_POST['submit'])) {

    $rentang = $_POST['rentang'];
    $nilai = $_POST['nilai'];

    $query = mysqli_query($con, "update ipk set rentang='$rentang', nilai='$nilai' where id='$_GET[id]'");
    if ($query) {
      echo "<script>alert('berhasil mengubah data');document.location.href='index.php?p=ipk'</script>";
    } else {
      echo "Error : ". mysqli_error($con);
    }
  }

 ?>

<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Edit IPK</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label class="control-label">Rentang Nilai</label>
            <input class="form-control" type="text" name="rentang" value="<?= $data['rentang'] ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label">Nilai</label>
            <input class="form-control" type="text" name="nilai" value="<?= $data['nilai'] ?>" required>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ubah</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?p=ipk"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
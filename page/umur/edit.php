<?php 

  $query = mysqli_query($con, "select * from umur where id='$_GET[id]'");
  $data = mysqli_fetch_assoc($query);

  if (isset($_POST['submit'])) {

    $rentang = $_POST['rentang'];
    $nilai = $_POST['nilai'];

    $query = mysqli_query($con, "update umur set rentang='$rentang', nilai='$nilai' where id='$_GET[id]'");
    if ($query) {
      echo "<script>alert('berhasil mengubah data');document.location.href='index.php?p=umur'</script>";
    } else {
      echo "Error : ". mysqli_error($con);
    }
  }

 ?>

<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Edit Umur</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label class="control-label">Rentang Nilai</label>
            <input class="form-control" type="number" name="rentang" value="<?= $data['rentang'] ?>">
          </div>
          <div class="form-group">
            <label class="control-label">Nilai</label>
            <input class="form-control" type="text" name="nilai" value="<?= $data['nilai'] ?>">
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ubah</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?p=umur"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php 
  
  if (isset($_GET['delete'])) {

    $query = mysqli_query($con, "delete from umur where id='$_GET[id]'");
    if ($query) {
      echo "<script>alert('berhasil menghapus data');document.location.href='index.php?p=umur'</script>";
    } else {
      echo "Error : ". mysqli_error($con);
    }
  }

 ?>

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Umur</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <a href="?p=umur&act=create" class="btn btn-primary">Tambah</a>
      </div>
      <div class="card-body">
        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Rentang Nilai</th>
              <th>Nilai</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = mysqli_query($con, "select * from umur");
                $no = 0;
                while ($data = mysqli_fetch_assoc($query)):
                  $no++;
             ?>
             <tr>
               <td><?= $no ?></td>
               <td><?= $data['rentang'] ?></td>
               <td><?= $data['nilai'] ?></td>
               <td>
                 <a href="?p=umur&act=edit&id=<?= $data['id'] ?>">Edit</a>
                 |
                 <a href="?p=umur&delete&id=<?= $data['id'] ?>" onclick="return confirm('Data akan dihapus permanent')" class="text-danger">Hapus</a>
               </td>
             </tr>
           <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
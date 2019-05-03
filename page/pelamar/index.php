<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Pelamar</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>No.Telepon</th>
              <th>JK</th>
              <th>Agama</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = mysqli_query($con, "select * from pelamar");
                $no = 0;
                while ($data = mysqli_fetch_assoc($query)):
                  $no++;
             ?>
             <tr>
               <td><?= $no ?></td>
               <td><?= $data['nama'] ?></td>
               <td><?= $data['tanggal_lahir'] ?></td>
               <td><?= $data['email'] ?></td>
               <td><?= $data['alamat'] ?></td>
               <td><?= $data['telepon'] ?></td>
               <td><?= $data['jk'] ?></td>
               <td><?= $data['agama'] ?></td>
               <td>
                 <a href="?p=pelamar&act=show&id=<?= $data['id'] ?>">Lihat</a>
               </td>
             </tr>
           <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Kriteria</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Kriteria Umur</h4>
      </div>
      <div class="card-body">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Rentang Nilai</th>
              <th>Nilai</th>
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
             </tr>
           <?php endwhile; ?>
         </tbody>
       </table>
     </div>
   </div>

   <div class="card">
    <div class="card-header">
      <h4>Kriteria Pendidikan</h4>
    </div>
    <div class="card-body">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Rentang Nilai</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $query = mysqli_query($con, "select * from pendidikan");
          $no = 0;
          while ($data = mysqli_fetch_assoc($query)):
            $no++;
            ?>
            <tr>
             <td><?= $no ?></td>
             <td><?= $data['rentang'] ?></td>
             <td><?= $data['nilai'] ?></td>
           </tr>
         <?php endwhile; ?>
       </tbody>
     </table>
   </div>
 </div>

 <div class="card">
  <div class="card-header">
    <h4>Kriteria IPK</h4>
  </div>
  <div class="card-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Rentang Nilai</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = mysqli_query($con, "select * from ipk");
        $no = 0;
        while ($data = mysqli_fetch_assoc($query)):
          $no++;
          ?>
          <tr>
           <td><?= $no ?></td>
           <td><?= $data['rentang'] ?></td>
           <td><?= $data['nilai'] ?></td>
         </tr>
       <?php endwhile; ?>
     </tbody>
   </table>
 </div>
</div>

<div class="card">
  <div class="card-header">
    <h4>Kriteria Status</h4>
  </div>
  <div class="card-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Rentang Nilai</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = mysqli_query($con, "select * from status");
        $no = 0;
        while ($data = mysqli_fetch_assoc($query)):
          $no++;
          ?>
          <tr>
           <td><?= $no ?></td>
           <td><?= $data['rentang'] ?></td>
           <td><?= $data['nilai'] ?></td>
         </tr>
       <?php endwhile; ?>
     </tbody>
   </table>
 </div>
</div>

<div class="card">
  <div class="card-header">
    <h4>Kriteria Jarak Tempuh</h4>
  </div>
  <div class="card-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Rentang Nilai</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = mysqli_query($con, "select * from jarak");
        $no = 0;
        while ($data = mysqli_fetch_assoc($query)):
          $no++;
          ?>
          <tr>
           <td><?= $no ?></td>
           <td><?= $data['rentang'] ?></td>
           <td><?= $data['nilai'] ?></td>
         </tr>
       <?php endwhile; ?>
     </tbody>
   </table>
 </div>
</div>

</div>
</div>
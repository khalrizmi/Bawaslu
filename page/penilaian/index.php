<?php 


$r = array();
$rn = array();
$rb = array();
$rrangking = array();
$jumlah_pelamar = mysqli_num_rows(mysqli_query($con, "select * from pelamar"));

?>


<!-- <div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Kriteria</h1>
  </div>
</div> -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" id="headingOne">
        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h4>Data Alternatif</h4></a>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Pendidikan</th>
                <th>Status</th>
                <th>IPK</th>
                <th>Jarak Tempuh</th>
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
                 <?php 
                 $umur = mysqli_fetch_assoc(mysqli_query($con, "select * from umur where id='$data[id_umur]'"));
                 $r[1][$no] = $umur['nilai'];
                 ?>
                 <td><?= $umur['nilai'] ?></td>

                 <?php 
                 $pendidikan = mysqli_fetch_assoc(mysqli_query($con, "select * from pendidikan where id='$data[id_pendidikan]'"));
                 $r[2][$no] = $pendidikan['nilai'];
                 ?>
                 <td><?= $pendidikan['nilai'] ?></td>

                 <?php 
                 $status = mysqli_fetch_assoc(mysqli_query($con, "select * from status where id='$data[id_status]'"));
                 $r[3][$no] = $status['nilai'];
                 ?>
                 <td><?= $status['nilai'] ?></td>

                 <?php 
                 $ipk = mysqli_fetch_assoc(mysqli_query($con, "select * from ipk where id='$data[id_ipk]'"));
                 $r[4][$no] = $ipk['nilai'];
                 ?>
                 <td><?= $ipk['nilai'] ?></td>

                 <?php 
                 $jarak = mysqli_fetch_assoc(mysqli_query($con, "select * from jarak where id='$data[id_jarak]'"));
                 $r[5][$no] = $jarak['nilai'];
                 ?>
                 <td><?= $jarak['nilai'] ?></td>
               </tr>
             <?php endwhile; ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>

   <?php 

   $table = ["", "umur", "pendidikan", "status", "ipk", "jarak"];
   $id    = ["", "id_umur", "id_pendidikan", "id_status", "id_ipk", "id_jarak"];
   for ($x=1; $x <= 5 ; $x++) { 
    for ($y=1; $y <= $jumlah_pelamar; $y++) { 
        // echo "R".$x.$y.":".$r[$x][$y]." ";
      $query = mysqli_query($con, "SELECT MAX(nilai) as max FROM pelamar INNER JOIN $table[$x] u ON pelamar.$id[$x] = u.id");
      $max = mysqli_fetch_assoc($query);
      $hasil = $r[$x][$y] / $max['max'];
      $rn[$x][$y] = round($hasil, 2);
    }
  }

  $bobot = [0, 0.2, 0.3, 0.2, 0.2, 0.1];
  for ($x=1; $x <= $jumlah_pelamar ; $x++) { 
    $tambah = 0;
    for ($y=1; $y <= 5; $y++) {   
      $kali = ($bobot[$y] * $rn[$y][$x]);
      $tambah+=$kali;
    }
      // echo $tambah;
      // echo "<br>";
    $rb[$x] = $tambah;
  }

  ?>

  <!-- rangking -->
  <?php 

  $query = mysqli_query($con, "select * from pelamar");
  $no = 0;
  while ($data = mysqli_fetch_assoc($query)){
    $no++;
    $rrangking[$data['nama']] = $rb[$no];
  }
  // var_dump($rrangking);
  arsort($rrangking);
  // echo "<br>";
  // var_dump($rrangking);

  ?>
  

  <div class="card">
    <div class="card-header" id="headingTwo">
      <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><h4>Tabel Normalisasi</h4></a>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Umur</th>
              <th>Pendidikan</th>
              <th>Status</th>
              <th>IPK</th>
              <th>Jarak Tempuh</th>
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
               <td><?= $rn[1][$no] ?></td>
               <td><?= $rn[2][$no] ?></td>
               <td><?= $rn[3][$no] ?></td>
               <td><?= $rn[4][$no] ?></td>
               <td><?= $rn[5][$no] ?></td>
             </tr>
           <?php endwhile; ?>
         </tbody>
       </table>
     </div>
   </div>
 </div>

 <div class="card">
  <div class="card-header" id="headingThree">
    <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><h4>Hasil Perangkingan</h4></a>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
    <div class="card-body">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Hasil</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 0;
          foreach ($rrangking  as $value => $key):
            $no++;
            ?>
            <tr>
             <td><?= $no ?></td>
             <td><?= $value ?></td>
             <td><?= $key ?></td>
           </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
   </div>
 </div>
</div>


</div>
</div>
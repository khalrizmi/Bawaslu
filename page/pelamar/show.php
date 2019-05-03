<?php 

	$query = mysqli_query($con, "select * from pelamar where id='$_GET[id]'");
	$data = mysqli_fetch_assoc($query);

 ?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Detail Pelamar</h1>
  </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table">
							<tr>
								<td>Nama</td>
								<td><?= $data['nama'] ?></td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td><?= $data['tanggal_lahir'] ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?= $data['email'] ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><?= $data['alamat'] ?></td>
							</tr>
							<tr>
								<td>No. Telepon</td>
								<td><?= $data['telepon'] ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td><?= $data['jk'] ?></td>
							</tr>
							<tr>
								<td>Agama</td>
								<td><?= $data['agama'] ?></td>
							</tr>
							<tr>
								<td>Umur</td>
								<?php 
									$query = mysqli_query($con, "select * from umur where id='$data[id_umur]'");
									$umur = mysqli_fetch_assoc($query);
								 ?>
								<td><?= $umur['rentang'] ?></td>
							</tr>
							<tr>
								<td>Pendidikan</td>
								<?php 
									$query = mysqli_query($con, "select * from pendidikan where id='$data[id_pendidikan]'");
									$pendidikan = mysqli_fetch_assoc($query);
								 ?>
								<td><?= $pendidikan['rentang'] ?></td>
							</tr>
							<tr>
								<td>IPK</td>
								<?php 
									$query = mysqli_query($con, "select * from ipk where id='$data[id_ipk]'");
									$ipk = mysqli_fetch_assoc($query);
								 ?>
								<td><?= $ipk['rentang'] ?></td>
							</tr>
							<tr>
								<td>Status</td>
								<?php 
									$query = mysqli_query($con, "select * from status where id='$data[id_status]'");
									$status = mysqli_fetch_assoc($query);
								 ?>
								<td><?= $status['rentang'] ?></td>
							</tr>
							<tr>
								<td>Jarak Tempuh</td>
								<?php 
									$query = mysqli_query($con, "select * from jarak where id='$data[id_jarak]'");
									$jarak = mysqli_fetch_assoc($query);
								 ?>
								<td><?= $jarak['rentang'] ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<td>Foto</td>
								<td><a href="image/foto/<?= $data['foto'] ?>" target="_blank"><?= $data['foto'] ?></a></td>
							</tr>
							<tr>
								<td>Fotocopy KTP</td>
								<td><a href="image/ktp/<?= $data['ktp'] ?>" target="_blank"><?= $data['ktp'] ?></a></td>
							</tr>
							<tr>
								<td>CV</td>
								<td><a href="image/cv/<?= $data['cv'] ?>" target="_blank"><?= $data['cv'] ?></a></td>
							</tr>
							<tr>
								<td>Ijazah</td>
								<td><a href="image/ijazah/<?= $data['ijazah'] ?>" target="_blank"><?= $data['ijazah'] ?></a></td>
							</tr>
							<tr>
								<td>Transkrip Nilai</td>
								<td><a href="image/nilai/<?= $data['transkrip_nilai'] ?>" target="_blank"><?= $data['transkrip_nilai'] ?></a></td>
							</tr>
							<tr>
								<td>SKCK</td>
								<td><a href="image/skck/<?= $data['skck'] ?>" target="_blank"><?= $data['skck'] ?></a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a class="btn btn-secondary" href="?p=pelamar"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
			</div>
		</div>
	</div>
</div>
<?php 

include 'config/connection.php';

if (isset($_POST['daftar'])) {

	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir']; 
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$umur = $_POST['umur'];
	$agama = $_POST['agama'];
	$pendidikan = $_POST['pendidikan'];
	$ipk = $_POST['ipk'];
	$status = $_POST['status'];
	$jarak = $_POST['jarak'];

	$date = Date('ddmmYY__His');

	$foto = $date.$_FILES['foto']['name'];
	$foto_tmp = $_FILES['foto']['tmp_name'];
	move_uploaded_file($foto_tmp, 'image/foto/'.$foto);

	$ktp = $date.$_FILES['ktp']['name'];
	$ktp_tmp = $_FILES['ktp']['tmp_name'];
	move_uploaded_file($ktp_tmp, 'image/ktp/'.$ktp);

	$cv = $date.$_FILES['cv']['name'];
	$cv_tmp = $_FILES['cv']['tmp_name'];
	move_uploaded_file($cv_tmp, 'image/cv/'.$cv);

	$ijazah = $date.$_FILES['ijazah']['name'];
	$ijazah_tmp = $_FILES['ijazah']['tmp_name'];
	move_uploaded_file($ijazah_tmp, 'image/ijazah/'.$ijazah);

	$nilai = $date.$_FILES['nilai']['name'];
	$nilai_tmp = $_FILES['nilai']['tmp_name'];
	move_uploaded_file($nilai_tmp, 'image/nilai/'.$nilai);

	$skck = $date.$_FILES['skck']['name'];
	$skck_tmp = $_FILES['skck']['tmp_name'];
	move_uploaded_file($skck_tmp, 'image/skck/'.$skck);

	$sql = "INSERT INTO pelamar VALUES(NULL, '$nama', '$tanggal_lahir', '$email', '$alamat', '$telepon',
										'$jk', '$agama', '$umur', '$pendidikan', '$ipk', '$status', '$jarak',
										'$foto', '$ktp', '$cv', '$ijazah', '$nilai', '$skck')";
	$query = mysqli_query($con, $sql);
	if ($query) {
		echo "<script>alert('Anda berhasil mendaftar');document.location.href='daftar.php'</script>";
	} else {
		echo "<script>alert('Sedang terjadi masalah, coba beberapa saat lagi!');document.location.href='daftar.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bawaslu</title>
	<!-- Main CSS-->
	<link rel="stylesheet" type="text/css" href="vali/css/main.css">
</head>
<body style="background-color: #007d71; ">
	
	<div class="container">
		<!-- <div class="row justify-content-md-center" style="margin-top: 10px;">
			<b><h3 style="margin: 10px" class="text-white">Bawaslu Jabar</h3></b>
		</div>
		<div class="row justify-content-md-center">
			<p class="text-white">Dari Bawaslu Kita Selamatkan Pemilu Indonesia</p>
		</div> -->

		<div class=" justify-content-md-center" style="margin-top: 25px;">
			<form method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<h5>Silahkan Mendaftar</h5>
					</div>
					<div class="card-body row">
						<div class="col-md-6">
							<form class="form-horizontal">
								<div class="form-group row">
									<label class="control-label col-md-3">Nama Lengkap</label>
									<div class="col-md-8">
										<input class="form-control" type="text" name="nama" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Tanggal Lahir</label>
									<div class="col-md-8">
										<input class="form-control" type="date" name="tanggal_lahir" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Email</label>
									<div class="col-md-8">
										<input class="form-control" type="email" name="email" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">No. Telepon</label>
									<div class="col-md-8">
										<input class="form-control" type="number" name="telepon"  required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Alamat</label>
									<div class="col-md-8">
										<textarea class="form-control" rows="4" name="alamat"  required></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Jenis Kelamin</label>
									<div class="col-md-9">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="radio" name="jk" checked value="L">Laki - Laki
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="radio" name="jk" value="P">Perempuan
											</label>
										</div>
									</div>
								</div>
						<!-- <div class="form-group row">
							<label class="control-label col-md-3">Identity Proof</label>
							<div class="col-md-8">
								<input class="form-control" type="file">
							</div>
						</div> -->
					</form>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Umur</label>
								<select name="umur" class="form-control"  required>
									<?php $query = mysqli_query($con, "select * from umur");
									while ($data = mysqli_fetch_assoc($query)): ?>
										<option value="<?= $data['id'] ?>"><?= $data['rentang'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Agama</label>
								<select name="agama" class="form-control"  required>
									<option value="islam">Islam</option>
									<option value="krister">Kristen</option>
									<option value="Budha">Budha</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Pendidikan</label>
								<select name="pendidikan" class="form-control"  required>
									<?php $query = mysqli_query($con, "select * from pendidikan");
									while ($data = mysqli_fetch_assoc($query)): ?>
										<option value="<?= $data['id'] ?>"><?= $data['rentang'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">IPK</label>
								<select name="ipk" class="form-control"  required>
									<?php $query = mysqli_query($con, "select * from ipk");
									while ($data = mysqli_fetch_assoc($query)): ?>
										<option value="<?= $data['id'] ?>"><?= $data['rentang'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Status</label>
								<select name="status" class="form-control"  required>
									<?php $query = mysqli_query($con, "select * from status");
									while ($data = mysqli_fetch_assoc($query)): ?>
										<option value="<?= $data['id'] ?>"><?= $data['rentang'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Jarak Tempuh</label>
								<select name="jarak" class="form-control"  required>
									<?php $query = mysqli_query($con, "select * from jarak");
									while ($data = mysqli_fetch_assoc($query)): ?>
										<option value="<?= $data['id'] ?>"><?= $data['rentang'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="">
						<div class="form-group">
							<label class="control-label">Foto 3 x 4</label>
							<input class="form-control" type="file" name="foto"  required>
						</div>
					</div>
					<div class="">
						<div class="form-group">
							<label class="control-label">Fotocopy KTP</label>
							<input class="form-control" type="file" name="ktp"  required>
						</div>
					</div>
					<!-- <div class="form-group row">
							<label class="control-label col-md-3">Identity Proof</label>
							<div class="col-md-8">
								<input class="form-control" type="file">
							</div>
						</div> -->
					</div>
					<div class="col-md-3">
						<div class="">
							<div class="form-group">
								<label class="control-label">CV</label>
								<input class="form-control" type="file" name="cv"  required>
							</div>
						</div>
						<div class="">
							
							<div class="form-group">
								<label class="control-label">Ijazah</label>
								<input class="form-control" type="file" name="ijazah"  required>
							</div>
							
						</div>
						<div class="">
							<div class="form-group">
								<label class="control-label">Transkrip Nilai</label>
								<input class="form-control" type="file" name="nilai"  required>
							</div>
						</div>
						<div class="">
							
							<div class="form-group">
								<label class="control-label">SKCK</label>
								<input class="form-control" type="file" name="skck"  required>
							</div>
							
						</div>
					<!-- <div class="form-group ">
							<label class="control-label col-md-3">Identity Proof</label>
							<div class="col-md-8">
								<input class="form-control" type="file">
							</div>
						</div> -->
					</div>
				</div>
				<div class="card-footer">
					<div class="">
						<div class="col-md-8 col-md-offset-3">
							<button class="btn btn-primary" type="submit" name="daftar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Daftar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="home.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script src="vali/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="vali/js/plugins/bootstrap-datepicker.min.js"></script>
<script>
	$('#demoDate').datepicker({
		format: "dd/mm/yyyy",
		autoclose: true,
		todayHighlight: true
	});
</script>
</body>
</html>
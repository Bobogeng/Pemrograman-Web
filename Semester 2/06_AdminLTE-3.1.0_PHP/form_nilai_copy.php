<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Program Studi Teknik Informatika</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="ti.php">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum 3</a></li>
						<li class="breadcrumb-item active">form_nilai</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Form Nilai</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<!DOCTYPE html>
							<html lang="en">

							<head>
								<!-- Required meta tags -->
								<meta charset="utf-8">
								<meta name="viewport" content="width=device-width, initial-scale=1">

								<!-- Bootstrap CSS -->
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

								<title>Array Siswa</title>
							</head>

							<body class="bg-light">
								<div class="container-fluid">
									<div class="col-12 col-md-6 m-auto">
										<h3 class="text-center">Form Nilai Siswa</h3>
										<hr class="featurette-divider mx-auto">
										<form class="form-horizontal" method="POST" action="nilai_siswa_copy.php">
											<div class="form-group row">
												<label for="fname" class="col-4 col-form-label text-end">Nama Lengkap</label>
												<div class="col-8">
													<div class="input-group mb-3">
														<input id="fname" name="fname" type="text" class="form-control" value="" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="matkul" class="col-4 col-form-label text-end">Mata Kuliah</label>
												<div class="col-8">
													<div class="input-group mb-3">
														<select class="form-select" aria-label="Mata Kuliah" name="matkul">
															<option selected value="" class="text-muted">Pilih Mata Kuliah</option>
															<option value="BI">Bahasa Indonesia</option>
															<option value="PA">Pendidikan Agama</option>
															<option value="DDP">Dasar-dasar Pemrograman</option>
															<option value="SO">Sistem Operasi</option>
															<option value="PTI">Pengantar Teknologi Informasi</option>
															<option value="MK">Matematika Komputer</option>
															<option value="PW1">Pemrograman Web 1</option>
															<option value="PK">Pembentukan Karakter</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="uts" class="col-4 col-form-label text-end">Nilai UTS</label>
												<div class="col-4">
													<div class="input-group mb-3">
														<input id="uts" name="uts" type="number" class="form-control" value="" placeholder="Nilai UTS" aria-label="Nilai UTS" aria-describedby="basic-addon2">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="uas" class="col-4 col-form-label text-end">Nilai UAS</label>
												<div class="col-4">
													<div class="input-group mb-3">
														<input id="uas" name="uas" type="number" class="form-control" value="" placeholder="Nilai UAS" aria-label="Nilai UAS" aria-describedby="basic-addon3">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="tugas" class="col-4 col-form-label text-end">Nilai Tugas/Praktikum</label>
												<div class="col-4">
													<div class="input-group mb-3">
														<input id="tugas" name="tugas" type="number" class="form-control" value="" placeholder="Nilai Tugas" aria-label="Nilai Tugas" aria-describedby="basic-addon4">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<div class="offset-4 col-8">
													<input type="submit" class="btn btn-primary" value="Simpan" name="submit">
												</div>
											</div>
										</form>
										<hr class="featurette-divider mx-auto">
									</div>
								</div>

								<!-- Bootstrap Bundle with Popper -->
								<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
							</body>

							</html>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>
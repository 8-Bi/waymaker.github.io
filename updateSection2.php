<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">	
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<style type="text/css">
	.nextButton{
		outline: none;
		background: white;
		background: red;
		border-radius: 5px;
		border:none;
		color: white;
		outline: none;
		text-align: center;
		margin-top: 25px;
	}
	.judul{
		margin: 50px;
		text-align: center;
		font-size: 48px;
		color: #343090;
		font-family: 'Nunito', sans-serif;
	}

	.judul h1{
		font-weight: 750;
	}
	h2{
		font-family: Nunito;
		font-style: normal;
		font-weight: 800;
		font-size: 30px;
		line-height: 41px;

	}

	input{	
		box-sizing: border-box;
		border-radius: 5px;
		border: none;
		padding: 10px;
	
	}

	p{
		font-weight: 500;
		margin-bottom: 8px;
	}

	.dataN{
		margin-bottom: 20px;
		margin-top: 20px;
		
		
	}
	textarea{
		width: 370px;
		height: 142px;
		border: none;
		box-sizing: border-box;
		border-radius: 5px;
		text-align: left;
		margin-top: -10px;
		padding: 7px 10px 7px 10px;
	}

	
	select{
		border: none;
		box-sizing: border-box;
		border-radius: 5px;
		padding: 7px 10px 7px 10px;
	}
	
	input[type=text]{
		padding: 7px 10px 7px 10px;
	}
	input[type=email]{
		padding: 7px 10px 7px 10px;
	}
	
	button{		
		border-radius: 5px;
		width: 191px;
		height: 60px;

	}
	.btn-1{
		margin-top: 10px;
	}
	.bg{
		background: #F7F9FF;
		border-radius: 10px;
		padding:30px 20px 30px 20px;
	}
	.save{
		background: #44C2FD;
		border-radius: 5px;
		border:none;
		color: white;
		outline: none;
		margin-top: 25px;
	}
	table{
		text-align: center;
		font-size: 14px;
		border:none;
		
	}
	.ganjil{
		background-color: #44C2FD;
		color: #ffffff;
		padding: 20px;
		font-weight: bold;
	}
	.genap{
		background-color: #3AAFF1;
		color: #ffffff;
		padding: 20px;
		font-weight: bold;
	}
	.abu-abu{
		background-color: #f5f5f5;
	}
	.putih{
		background-color: white;
	}
	#jurusan{
		margin-bottom: 50px;
	}
	#nilaiUN{
		margin-bottom: 50px;
	}
	#ruangKelas{
		margin-bottom: 50px;
	}
	#ekstrakurikuler{
		margin-bottom: 50px;
	}
	button.btn-back{
		outline: none;
		border: none;
		background: white;
	}
	.action{
		width: 50px;
		height: 50px;
		border-radius: 50%;
		background-color: red;
		margin-top: 0px;
		border: none;
		color: white;
	}
	.edit{
		margin-left: 0px;
		background-color: #2DD22A;
	}
	.delete{
		margin-left: 10px;
	}
</style>
<body>
	
<div class="container">
	
		<a href="dataSekolah.php">
		<button class="btn-back">
			<h2 style="width: 0px">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</h2>
		</button>
	</a>
		<div class="judul">
			<h1>Update Data Sekolah</h1>
		</div>
		
	
		
<section id="jurusan">
	<div class="bg">
		<div class="row">
			<div class="col-3">
				<h2>Jurusan</h2>
				<div class="dataN">
					<input type="text" name="jurusanSekolah" id="jurusanSekolah" placeholder="Nama Jurusan...">
					<button class="save">Simpan Data</button>
				</div>
			</div>
			<div class="col-9">
				<h2>Tampilan Data</h2>
				<table border="1" cellpadding="10px;">
						<tr>							
							<td class="ganjil">No. </td>
							<td class="genap">Nama Jurusan</td>
							<td class="ganjil">Action</td>							
						</tr>
						<tr class="abu-abu">						
							<td>1.</td>												
							<td>Teknologi Komunikasi Dan Jaringan</td>	
							<td><button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button></td>						
						</tr>
						<tr class="putih">						
							<td>2.</td>												
							<td>Akutansi</td>
							<td><button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button></td>		
						</tr>
					</table>
			</div>
		</div>
	</div>
</section>
	
<section id="nilaiUN">
	<div class="bg">
		<div class="row">
			<div class="col-3">			
				<h2>Nilai UN</h2>
				<div class="dataN">
					<select name="tahunUNSekolah">
						<?php	
							$tahunSekarang = date("Y");							
							for($x = $tahunSekarang; $x >= 2010; $x--) {
								?>
								<option><?= $x; ?></option>
								<?php	
							}
						?>
					</select>
				</div>
				<div class="dataN">
					<input type="text" name="judulUNSekolah" id="judulUNSekolah" placeholder="Nama Pelajaran">
				</div>
				<div class="dataN">
					<input type="text" name="valueUNSekolah" id="valueUNSekolah" placeholder="Nilai">	
				</div>
				<button class="save">Simpan Data</button>
			</div>

			<div class="col-9">
				<h2>Tampilan Data</h2>
				<table border="1" cellpadding="10px;">
					<tr>
						
						<td class="ganjil">Tahun</td>
						<td class="genap">Nama Pelajaran</td>
						<td class="ganjil">Nilai</td>
						<td class="genap">Action</td>
						
					</tr>
					<tr class="abu-abu">						
						<td>2021</td>
						<td>Bahasa Indonesia</td>
						<td>92</td>
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>						
					</tr>
					<tr class="putih">						
						<td>2021</td>
						<td>Bahasa Inggris</td>
						<td>92</td>
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>						
					</tr>
					<tr class="abu-abu">						
						<td>2021</td>
						<td>Matematika</td>
						<td>92</td>
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>					
					</tr>
				</table>
			</div>			
		</div>
	</div>
</section>
<section id="ruangKelas">
	<div class="bg">
		<div class="row">
			<div class="col-3">
				<h2>Ruangan</h2>
					<div class="dataN">
						<input type="text" name="ruanganSekolah" id="ruanganSekolah" placeholder="Nama Ruangan...">						
					</div>
					<div class="dataN">
						<input type="number" name="valueRuanganSekolah" id="valueRuanganSekolah" placeholder="Jumlah Ruangan">
						<button class="save">Simpan Data</button>
					</div>
			</div>
			<div class="col-9">
				<h2>Tampilan Data</h2>
				<table border="1" cellpadding="10px;">
					<tr>							
						<td class="ganjil">No. </td>
						<td class="genap">Nama Ruangan</td>
						<td class="ganjil">Jumlah Ruangan</td>							
						<td class="genap">Action</td>
					</tr>
					<tr class="abu-abu">						
						<td>1.</td>												
						<td>Kelas</td>	
						<td>95</td>
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
							<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>						
					</tr>
					<tr class="putih">						
						<td>2.</td>												
						<td>Perpustakaan</td>
						<td>1</td>
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
							<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>		
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section id="ekstrakurikuler">
	<div class="bg">
		<div class="row">
			<div class="col-3">
				<h2>Ekstrakurikuler</h2>
					<div class="dataN">
						<input type="text" name="ekstrakurikulerSekolah" id="ekstrakurikulerSekolah" placeholder="Nama Ekstrakurikuler...">
						<button class="save">Simpan Data</button>						
					</div>			
			</div>
			<div class="col-9">
				<h2>Tampilan Data</h2>
				<table border="1" cellpadding="10px;">
					<tr>							
						<td class="ganjil">No. </td>
						<td class="genap">Nama Ekstrakurikuler</td>
						<td class="ganjil">Action</td>
						
					</tr>
					<tr class="abu-abu">						
						<td>1.</td>												
						<td>Basket</td>							
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>						
					</tr>
					<tr class="putih">						
						<td>2.</td>												
						<td>Badminton</td>
						<td>
							<button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button>
						</td>		
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a href="updateSection3.php">
		<button class="nextButton">Next</button>
	</a>	
</section>
	
</div>
</body>
</html>
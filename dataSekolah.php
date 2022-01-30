<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">	
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">

<style type="text/css">
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

	input{	
		box-sizing: border-box;
		border-radius: 5px;
		border: none;
	
	}

	p{
		font-weight: 500;
		margin-bottom: 8px;
	}

	.dataN{
		margin-bottom: 20px;
		padding: 20px;
		
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
	input[type=text].takNampak{
		border: none;
		width: 50%;
		background: none;

	}
	input[type=text].takNampak1{
		border: none;
		width: 105%;
		background: none;
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
	#prestasi{
		margin-top:100px;
		margin-bottom: 100px;
	}
	img.img-prestasi{
		width: 1140px;
		border: 1px solid #c4c4c4;
		height:310px;
		border-radius: 10px;
		text-align: center;
		align-content: center;
	}
	button{
		margin-top: 50px;
		background: #FF5858;
		color: white;
		border: none;
		border-radius: 5px;
		width: 191px;
		height: 60px;

	}
	#inputanText{
		margin-bottom: 120px;
		background: #F7F9FF;
		padding: 30px;
		border-radius: 20px
	}
	#inputanGaris{
		margin-bottom: 120px;
		background: #F7F9FF;
		padding: 30px;
		border-radius: 20px
	}
	#inputanMataPelajaran{
		margin-bottom: 120px;
		background: #F7F9FF;
		padding: 30px;
		border-radius: 20px
	}
	.btn-1{
		margin-top: 10px;
	}
	button.btn-back{
		outline: none;
		border: none;
		color: black;
		background: white;
	}
	


</style>
<body>
<div class="container">
	<a href="adminSekolah.php">
		<button class="btn-back">
		<h2 style="width: 0px">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
		</h2>
	</button>
	</a>
	

	<div class="judul">
		<h1>Data Sekolah</h1>		
	</div>
	<section id="inputanText">
	<div class="row">
		<div class="col-6">
			<div class="dataN">
				<p>Nama Sekolah :</p>
				<input type="text" name="namaSekolah" id="namaSekolah">
			</div>
			<div class="dataN">				
				<p>Email :</p>
				<input type="email" name="emailSekolah" id="emailSekolah">
			</div>
			<div class="dataN">
				<p>Alamat :</p>
				<textarea id="alamatSekolah" name="alamatSekolah">
					
				</textarea>
			</div>
			<div class="dataN">				
				<p>No Telp :</p>
				<input type="text" name="telpSekolah" id="telpSekolah">
			</div>
		</div>
		<div class="col-6">
			<div class="dataN">				
				<p>Kurikulum :</p>
				<input type="text" name="kurikulumSekolah" id="kurikulumSekolah">
			</div>
			<div class="dataN">				
				<p>Nilai Akreditasi :</p>
				<input type="text" name="akreditasiSekolah" id="akreditasiSekolah">
			</div>
			<div class="dataN">				
				<p>Jumlah Guru :</p>
				<input type="text" name="jmlguruSekolah" id="jmlguruSekolah">
			</div>
			<div class="dataN">
				<p>Jumlah Siswa :</p>
				<input type="text" name="jmlsiswaSekolah" id="jmlsiswaSekolah">
			</div>
		</div>
		<a href="updateSection1.php">
			<button class="btn-1" >Edit Data</button>	
		</a>
	
	</div>	
	</section>
	
	<section id="inputanGaris">
	<div class="row">
		<div class="col-3">
			<p>Jurusan</p>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="jurusanSekolah" id="jurusanSekolah" value="Teknologi Komputer dan Jaringan"> 		
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="jurusanSekolah" id="jurusanSekolah" value="Akuntansi"> 		
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="jurusanSekolah" id="jurusanSekolah" value="Pemasaran"> 		
			</div>
		</div>
		<div class="col-3">
			<p>Nilai UN</p>
				<div class="d-flex">
					<input class="takNampak1" type="text" value="Tahun "> :
					<input class="takNampak" type="text" name="tahunUNSekolah" id="tahunUNSekolah" value="2019">				
				</div>
				<hr>
				<div class="d-flex">
					<input class="takNampak1" type="text" name="judulUNSekolah" id="judulUNSekolah" value="Bahasa Indonesia"> :
					<input class="takNampak" type="text" name="valueUNSekolah" id="valueUNSekolah" value="67.1">				
				</div>
				<hr>
				<div class="d-flex">
					<input class="takNampak1" type="text" name="judulUNSekolah" id="judulUNSekolah" value="Bahasa Inggris"> :
					<input class="takNampak" type="text" name="valueUNSekolah" id="valueUNSekolah" value="92.2">				
				</div>
				<hr>
				<div class="d-flex">
					<input class="takNampak1" type="text" name="judulUNSekolah" id="judulUNSekolah" value="Matematika"> :
					<input class="takNampak" type="text" name="valueUNSekolah" id="valueUNSekolah" value="100">				
				</div>
				<hr>
				<div class="d-flex">
					<input class="takNampak1" type="text" name="judulUNSekolah" id="judulUNSekolah" value="Kejuruan"> :
					<input class="takNampak" type="text" name="valueUNSekolah" id="valueUNSekolah" value="98.0">				
				</div>			
		</div>
		<div class="col-3">
			<p>Ruang Kelas</p>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulTotalKelas" id="judulTotalKelas" value="Total Ruang Kelas  "> :
				<input class="takNampak" type="text" name="valueTotalKelas" id="valueTotalKelas" value="2019">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulKelas" id="judulKelas" value="Lab Komputer"> :
				<input class="takNampak" type="text" name="valueKelas" id="valueKelas" value="2">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulKelas" id="judulKelas" value="UKS">
				<input class="takNampak" type="text" name="valueKelas" id="valueKelas" value="1">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulKelas" id="judulKelas" value="Ruang Guru"> :
				<input class="takNampak" type="text" name="valueKelas" id="valueKelas" value="1">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulKelas" id="judulKelas" value="Ruang Kepala Sekolah"> :
				<input class="takNampak" type="text" name="valueKelas" id="valueKelas" value="1">	
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulKelas" id="judulKelas" value="Ruang Koperasi"> :
				<input class="takNampak" type="text" name="valueKelas" id="valueKelas" value="1">	
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="judulKelas" id="judulKelas" value="Perpustakaan"> :
				<input class="takNampak" type="text" name="valueKelas" id="valueKelas" value="1">	
			</div>					
		</div>
		<div class="col-3">
			<p>Ekstrakurikuler</p>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="ekstrakurikulerSekolah" id="ekstrakurikulerSekolah" value="Bola Basket">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="ekstrakurikulerSekolah" id="ekstrakurikulerSekolah" value="Badminton">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="ekstrakurikulerSekolah" id="ekstrakurikulerSekolah" value="Video Editing">				
			</div>
			<hr>
			<div class="d-flex">
				<input class="takNampak1" type="text" name="ekstrakurikulerSekolah" id="ekstrakurikulerSekolah" value="Bola Voli">				
			</div>					
		</div>
	<a href="updateSection2.php">
			<button class="btn-1" >Edit Data</button>	
		</a>
	</div>
	</section>
	
	<section id="inputanMataPelajaran">
	<div class="row">
		<div class="col-6">
			<div class="bg-MPP">
				<p>Mata Pelajaran Produktif</p>
				<select name="jurusanMPP" id="jurusanMPP">
					<option>TKJ</option>
					<option>AK</option>
					<option>PM</option>
				</select>
				<select name="kelasMPP" id="kelasMPP">
					<option>Kelas 10</option>
					<option>Kelas 11</option>
					<option>Kelas 12</option>
				</select>
				<br>
				<br>
				<input type="text" class="dataN" name="judulMPP" id="judulMPP" value="BLablalba">
				<br>
				<textarea name="descMPP" id="descMPP">

				</textarea>
				<br>
				<br>
				<input type="text" class="dataN" name="judulMPP" id="judulMPP" value="BLablalba">
				<br>
				<textarea name="descMPP" id="descMPP">

				</textarea>
				<br>
				<br>
				<input type="text" class="dataN" name="judulMPP" id="judulMPP" value="BLablalba">
				<br>
				<textarea name="descMPP" id="descMPP">

				</textarea>
			</div>
			
		</div>

		<div class="col-6">
			<div class="bg-MNP">
				<p>Mata Pelajaran NonProduktif</p>
				<select name="jurusanMNP" id="jurusanMNP">
					<option>TKJ</option>
					<option>AK</option>
					<option>PM</option>
				</select>
				<select name="kelasMNP" id="kelasMNP">
					<option>Kelas 10</option>
					<option>Kelas 11</option>
					<option>Kelas 12</option>
				</select>
				<br>
				<br>
				<input type="text" class="dataN" name="judulMNP" id="judulMNP" value="BLablalba">
				<br>			
				<input type="text" class="dataN" name="judulMNP" id="judulMNP" value="BLablalba">
				<br>			
				<input type="text" class="dataN" name="judulMNP" id="judulMNP" value="BLablalba">
			</div>
		</div>
			<a href="updateSection3.php">
			<button class="btn-1" >Edit Data</button>	
		</a>
	</div>	
	</section>
	
	<section id="prestasi">
		<p>Prestasi Sekolah</p>
		<img src="#" class="img-prestasi">
		<div class="d-flex">
			<p style="padding-top: 7px">Judul Prestasi</p>
			<input type="text" name="judulPrestasi" class="takNampak1" id="judulPrestasi" value="test kesenangan saja" style="width: 50%; padding-left: 30px;">	
		</div>
		<div class="d-flex">
			<p style="padding-top: 7px">Source Link :</p>
			<input type="text" name="judulPrestasi" class="takNampak1" id="judulPrestasi" value="http://localhost/Waymaker/Sekolah/dataSekolah.php" style="width: 70%; padding-left: 30px;">	
		</div>
		<a href="updateSection4.php">
			<button class="btn-1" >Edit Data</button>	
		</a>
	</section>
	
</div>
</body>
</html>
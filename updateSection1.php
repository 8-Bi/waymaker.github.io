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
		width: 1280px;
		border: 1px solid #c4c4c4;
		height:310px;
		border-radius: 10px;
		text-align: center;
		align-content: center;
	}
	.save{
		background: #44C2FD;
		border-radius: 5px;
		border:none;
		color: white;
		outline: none;
		padding: 20px;
		margin-top: 25px;
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
	.bg-MPP input[type=text]{
		border:;
	}
	table{
		text-align: center;
		font-size: 14px;
		border:none;
		margin-top: 50px;
		margin-bottom: 100px;
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
		background-color: #f4f4f4;
	}
	button.btn-back{
		outline: none;
		border: none;
		background: white;
	}
	.action{
		width: 30px;
		height: 30px;
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
	.nextButton{
		outline: none;
		background: white;
		background: red;
		border-radius: 5px;
		border:none;
		color: white;
		outline: none;
		padding: 20px 100px;
		margin-top: 25px;
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
			<div class="dataN">
				<p>Jenis Sekolah:</p>
				<select style="padding: 10px 30px";>
					<option>Swasta</option>
					<option>Negeri</option>
				</select>
			</div>
		</div>
	<button class="save">Simpan Data</button>

	</div>
	<a href="updateSection2.php">
		<button class="nextButton">Next</button>
	</a>		
	
	</section>

	<h1>Tampilan Data</h1>
	<table border="1" cellpadding="10px;">
		<tr>
			
			<td class="ganjil">Nama Sekolah</td>
			<td class="genap">Email</td>
			<td class="ganjil">Alamat</td>
			<td class="genap">No Telp</td>
			<td class="ganjil">Kurikulum</td>
			<td class="genap">Nilai Akreditasi</td>
			<td class="ganjil">Jumlah Guru</td>
			<td class="genap">Jumlah Siswa</td>
			<td class="ganjil">Jenis Sekolah</td>
			<td class="genap">Action</td>
		</tr>
		<tr class="abu-abu">
			
			<td>SMK Kristen Immanuel</td>
			<td>emia@gmail.com</td>
			<td>Jln Sutoyo</td>
			<td>085346552998</td>
			<td>K-13</td>
			<td>A</td>
			<td>34 orang</td>
			<td>600 orang</td>
			<td>Swasta</td>
			<td>
				<button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
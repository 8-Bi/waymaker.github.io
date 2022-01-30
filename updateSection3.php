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
	/*	padding: 20px 100px;*/
		margin-top: 25px;
	}
	.action{
		width: 24px;
	    height: 24px;
	    border-radius: 50%;
	    background-color: red;
	    border: none;
	    font-size: 10px;
	    color: white;
	}
	.edit{
		margin-left: 0px;
		background-color: #2DD22A;
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
	#mataPP{
		margin-bottom: 50px;
	}
	button.btn-back{
		outline: none;
		border: none;
		background: white;
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

	<section id="mataPP">
		<div class="bg">
			<div class="row">
				<div class="col-3">
					<h2>MP Produktif</h2>
					<div class="dataN">
						<input type="text" name="jurusanMPP" id="jurusanMPP" placeholder="Nama Jurusan...">						
					</div>
					<div class="dataN">
						<input type="text" name="kelasMPP" id="kelasMPP" placeholder="Kelas Berapa...">						
					</div>
					<div class="dataN">
						<input type="text" name="judulMPP" id="judulMPP"  style="width: 100%;" placeholder="Nama / Singkatan Mata Pelajaran">
					</div>
					<div class="dataN">
						<textarea name="descMpp" id="descMPP" placeholder="Deskripsikan Mata Pelajaran tersebut" style="width: 100%"></textarea>
					</div>
					<button class="save">Simpan Data</button>
				</div>
				<div class="col-9">
					<h2>Tampilan Data</h2>
					<table border="1" cellpadding="10px;">
						<tr>							
							<td class="ganjil">No. </td>
							<td class="genap">Nama Jurusan</td>
							<td class="ganjil">Kelas</td>							
							<td class="genap">Nama Mata Pelajaran</td>
							<td class="ganjil">Deskripsi</td>
							<td class="genap">Action</td>
						</tr>
						<tr class="abu-abu">						
							<td>1.</td>												
							<td>TKJ</td>	
							<td>10</td>
							<td>Sistem Komputer</td>
							<td>mata Pelajaran yang mendukung dan membantu kita untuk mengerti tentang bahasa - bahasa Komputer beserta Sistemnya</td>
							<td><button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button></td>						
						</tr>
						<tr class="putih">						
							<td>2.</td>												
							<td>TKJ</td>	
							<td>10</td>
							<td>Fisika</td>
							<td>Melatih ingatan dan logika anak - anak IT</td>
							<td><button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button></td>		
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>

	<section id="mataPNP">
		<div class="bg">
			<div class="row">
				<div class="col-3">
					<h2>MP NonProduktif</h2>
					<div class="dataN">
						<input type="text" name="jurusanMPP" id="jurusanMPP" placeholder="Nama Jurusan...">						
					</div>
					<div class="dataN">
						<input type="text" name="kelasMPP" id="kelasMPP" placeholder="Kelas Berapa...">						
					</div>
					<div class="dataN">
						<input type="text" name="judulMPP" id="judulMPP"  style="width: 100%;" placeholder="Nama / Singkatan Mata Pelajaran">
					</div>					
					<button class="save">Simpan Data</button>
				</div>
				<div class="col-9">
					<h2>Tampilan Data</h2>
					<table border="1" cellpadding="10px;">
						<tr>							
							<td class="ganjil">No. </td>
							<td class="genap">Nama Jurusan</td>
							<td class="ganjil">Kelas</td>							
							<td class="genap">Nama Mata Pelajaran</td>						
							<td class="genap">Action</td>
						</tr>
						<tr class="abu-abu">						
							<td>1.</td>												
							<td>TKJ</td>	
							<td>10</td>
							<td>Sistem Komputer</td>
							<td><button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button></td>						
						</tr>
						<tr class="putih">						
							<td>2.</td>												
							<td>TKJ</td>	
							<td>10</td>
							<td>Fisika</td>						
							<td><button class="action edit"><i class="fa fa-edit"></i></button>
				<button class="action delete"><i class="fa fa-trash"></i></button></td>		
						</tr>
					</table>
				</div>
			</div>
		</div>
		<a href="updateSection4.php">
		<button class="nextButton">Next</button>
	</a>	
	</section>

	
</div>
</body>
</html>
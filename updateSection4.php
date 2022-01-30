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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@800&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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

	.add{
		margin-top: 135px;
		font-size: 40px;
		width: 72px;
		height: 72px;
		background-color: #000;
		opacity: 0.5;
		color: white;
		border-radius: 36px;
		transition: .2s;
		cursor: pointer;
		margin: 116px 515px;
	}
	.add:hover{
		opacity: 0.7;
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
		background: #F7F9FF;
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
	.kumpul{
		margin-top: 71px;
		width: 1140px;
		height: 310px;
		border: 3px dashed #C4C4C4;
		box-sizing: border-box;
	}
	#upload-photo{
		opacity: 0;
	    position: absolute;
	    z-index: -1;
	}
	.output{
		visibility: hidden;
	}
	.visible-output{
		width: 1140px;
	    height: 310px;
	    object-fit: cover;
	    margin-top: -328px;
		margin-left: -3px;
	}
	#filename{
		font-family: Raleway;
		font-weight: 300;
	}
	#tampilanData{
		margin-bottom: 100px;
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
	<div class="kumpul">
		<label for="upload-photo" class="add" id="add" style="padding-left: 22px">+</label>
		<input type="file" accept="image/*" onchange="loadFile(event)" id="upload-photo">
		<img id="output" class="output visible-output"/><br/>
	</div>
	<br>
	<center><p id="filename">Pilih Gambar</p></center>
	<div class="dataN">
		<input type="text" name="jurusanMPP" id="jurusanMPP" placeholder="Judul Prestasi">						
	</div>
	<div class="dataN">
		<input type="text" name="jurusanMPP" id="jurusanMPP" placeholder="Link Website">						
	</div>
	<button class="save">Simpan Data</button>
	<a href="dataSekolah.php">		
		<button class="nextButton">Next</button>
	</a>
	<br><br><br><br><br>
	<section id="tampilanData">
	<h2>Tampilan Data</h2>
		<table border="1" cellpadding="10px;">
			<tr>							
				<td class="ganjil">No. </td>
				<td class="genap">Foto</td>
				<td class="ganjil">Judul</td>							
				<td class="genap">Link</td>
				<td class="ganjil">Action</td>
				
			</tr>
			<tr class="abu-abu">						
				<td>1.</td>												
				<td>TKJ</td>	
				<td>10</td>
				<td></td>
				<td>
					<button class="action edit"><i class="fa fa-edit"></i></button>
					<button class="action delete"><i class="fa fa-trash"></i></button>
				</td>						
			</tr>
			
	</section>
	
</div>
</body>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    //ambil lokasi gambar
    output.src = URL.createObjectURL(event.target.files[0]);

    //Setelah gambarnya di add, function yang di jalankan :
    output.onload = function() {
      document.getElementById("output").classList.remove('output');
      document.getElementById("submit").disabled = false;
      var fileName = document.getElementById('upload-photo').files[0].name;
      document.getElementById("filename").innerHTML=fileName;
    }
  };
</script>
</html>
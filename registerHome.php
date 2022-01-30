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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style type="text/css">
	body{
	z-index: hidden;
}
button.btn-back{
	outline: none;
	border: none;
	background: white;
}
h2.h-register{
	padding-top: 5px;
	font-size: 48px;
	color: #343090;
	font-family: 'Nunito', sans-serif;
	font-weight: 750;
	margin-left: 128px;
}
.inputan{
	margin-left: 170px;

	margin-top: 54px;
}
h3.h3-inp{
	font-size: 24px;
	color: #544443;
	font-family: 'Nunito', sans-serif;
	font-weight: 750;
}
input.inp-br50{
	border: 3px solid #D6D6D4;
	border-radius: 50px;
	height: 50px;
	width: 470px;
	margin-bottom: 30px;
	padding: 25px;
}
input.inp-radio{
	width:34px;
	height: 34px;
}

img{
	position: absolute;
	left: 0;
	top: 0;
	background-image: url(../logo.png);
}
button.register-btn{
	margin-left: 100px;
	width: 400px;
	height: 111px;
	padding: 42px;
	background: #6592FD;
	border-radius: 70px;
	border: none;
	outline: none;
	text-align: center;
	justify-content: center;
	position: absolute;
	top:90%;

}
h1.h-register2{
	margin-top:-10px;
	font-size: 36px;
	color: white;
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
	
}
.logo{
	position: absolute;
	left:50%;
	top:1%;
	width: 323px;
	z-index:-2;
	opacity: 0.1;

}
.spanSignIn{
	position: absolute;
	left: 59.74%;
	right: 11.88%;
	top: 107.67%;
	bottom: 9.08%;

	font-family: nunito;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	line-height: 23px;

	color: #000000;
}
</style>
<body>
<div class="container">
	<div class="d-flex" style="margin-top: 50px;">
		<a href="home.php">
		<button class="btn-back">
			<h2>
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</h2>
		</button>
		</a>
		<h2 class="h-register">
			Register
		</h2>
	</div>
	<br>
	<div class="d-flex">
		<div class="inputan">
			<h3 class="h3-inp">Email</h3>
			<input type="email" class="inp-br50" name="emailSekolah" id="emailSekolah" placeholder="Email@gmail.com">
			<h3 class="h3-inp">Nama Sekolah</h3>
			<input type="text" class="inp-br50" name="namaSekolah" id="namaSekolah" placeholder="Nama Sekolah">
			<h3 class="h3-inp">Password</h3>
			<input type="password" class="inp-br50" name="passwordSekolah" id="passwordSekolah">
			<div class="d-flex">
				<div class="bantu">
					<h3 class="h3-inp">No. Telp</h3>
					<input type="text" class="inp-br50" name="telpSekolah" id="telpSekolah" placeholder="Nomor Yang dapat dihubungi">	
				</div>
				
			</div>		
		</div>
		<div class="right">
			<div class="right-btn">
				<a href="#"><button class="register-btn"><h1 class="h-register2">Register</h1></button></a>
				<span class="spanSignIn">
					Already have an account? 
					<span>
						<a href="">Sign In</a>
					</span>
				</span>
			</div>
			<div class="logo">
				<img src="../img/logo.png">
			</div>
		</div>
		
	</div>
	
</div>
</body>
</html>
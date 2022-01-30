<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
	body{
		background-image: url("images/bglogin.png"),linear-gradient(109.78deg, rgba(95, 89, 247, 0.8) 27.28%, rgba(68, 194, 253, 0.8) 81.55%);
	}

	.container{
		font-family: 'Raleway', sans-serif;
		font-size: 24px;
	}
	.mid-box{
		margin-top: 100px;
		margin-bottom: 100px;
	}
	.mid-box .col-sm{
		height: 500px;
	}
	#left{
		border-top-left-radius: 50px;
		border-bottom-left-radius: 50px;
		padding-left: 59px;
	}
	#right{
		border-top-right-radius: 50px;
		border-bottom-right-radius: 50px;
		padding-left: 59px;
		padding-right: 59px;

	}
	h3{
		margin-top: 62px;
		font-weight: 800;
		font-size: 48px;
	}
	input[type=text]{
		outline: none;
		padding-left: 20px;
	}
	input[type=password]{
		outline: none;
		padding-left: 20px;
	}
	input#nama{
		width: 420px;
		height: 50px;
		border-radius: 50px;
		border: 3px solid #DDDDDC;
		margin-bottom: 26px;
		background-color: #F5F5F5;
	}
	input#password{
		width: 420px;
		height: 50px;
		border-radius: 50px;
		border: 3px solid #DDDDDC;
		background-color: #F5F5F5;
	}
	#btn{
		width: 262px;
		height: 50px;
		border-radius: 50px;
		border: none;
		margin-top: 36px;
		font-size: 20px;
		color: #fff;
		background-color: #6592FD;
		font-weight: 600;
	}
	#btn-register{
		width: 262px;
		height: 50px;
		border-radius: 50px;
		margin-left: 48px;
		font-size: 20px;
		background-color: #41403E;
		border: 2px solid #F5F5F5;
		color: #F5F5F5;
		font-weight: 600;
	}
	button.btn-back{
		outline: none;
		border: none;
		color: white;
		background: none;
		margin-top: 20px;

	}
</style>
<body>
<div class="semua">
<div class="container">
	<a href="home.php">
		<button class="btn-back">
			<h2>
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</h2>
		</button>
		</a>
  <div class="mid-box row">
    <div class="col-sm" id="left" style="background-color: #F5F5F5; color: #41403E; ">
      <h3>LOGIN</h3>
      <p style="font-weight: 800;">Nama</p>
      <input type="text" id="nama">
      <p style="font-weight: 800;">Password</p>
      <input type="password" id="password">
      <br>
      <button id="btn">LOGIN</button>
    </div>

    <div class="col-sm" id="right" style="background-color: #41403E; color: #F5F5F5; max-width: 500px;">
      <h3 style="font-size:24px; "><span style="font-size: 36px;">KAMU</span><br>BUKAN SEORANG<br>MEMBER?</h3>
      <p style="font-size: 22px; margin-top: 55px;margin-bottom: 0px;">
      	Silahkan lakukan register terlebih dahulu,
			<div style="height: 20px; font-size: 22px;"></span>
			Demi kenyamanan seluruh pengguna Way Maker.
      </p>
      <a href="registerHome.php">
      <button id="btn-register" style="margin-top: 28px;">Register</button>	
      </a>
      
    </div>
</div>
</div>
</div>
</body>
</html>
<?php 
	session_start();
	include "config/connect.php";
	error_reporting(false);
	if (@$_SESSION['adm'] == "") {
		echo "<script>alert('You must login first');document.location.href='login.php';</script>";
	}else{

	}

	function rupiah($angka) {
		 $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
         return $hasil_rupiah;
    }

	$cek = mysqli_query($conn, "SELECT * FROM pricing");
			$fetch = mysqli_fetch_array($cek);


	if (isset($_POST['submit'])) {

			$cek = mysqli_query($conn, "SELECT * FROM pricing");
			$fetch = mysqli_fetch_array($cek);
	

		$bayi_publish = $_POST['bayi_publish'];
		$pelajar_publish = $_POST['pelajar_publish'];
		$personal_publish = $_POST['personal_publish'];
		$bisnis_publish = $_POST['bisnis_publish'];
		$bayi = $_POST['bayi'];
		$pelajar = $_POST['pelajar'];
		$personal = $_POST['personal'];
		$bisnis = $_POST['bisnis'];

		if ($fetch['bayi'] == "" OR $fetch['bayi_publish'] == "" OR $fetch['pelajar'] == "" OR $fetch['pelajar_publish'] == "" OR $fetch['personal'] == "" OR $fetch['personal_publish'] == "" OR $fetch['bisnis'] == "" OR $fetch['bisnis_publish'] == "") {

			mysqli_query($conn, "INSERT INTO pricing VALUES('$bayi', '$bayi_publish', '$pelajar', '$pelajar_publish', '$personal', '$personal_publish', '$bisnis', '$bisnis_publish')");
		}else{
		$msl = mysqli_query($conn, "UPDATE pricing SET bayi = '$bayi', bayi_publish = '$bayi_publish', pelajar = '$pelajar', pelajar_publish = '$pelajar_publish', personal = '$personal', personal_publish = '$personal_publish', bisnis = '$bisnis', bisnis_publish = '$bisnis_publish'");
			if ($msl) {
				echo "<script>alert('successful saved');document.location.href='run.php';</script>";
			}else{
				echo "<script>alert('something wrong, try again');document.location.href='run.php';</script>";
			}

		}
	}


 ?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset=”UTF-8”>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(http://i.imgur.com/w16HASj.png);
		}
.bg {
    width: 100%;
    height: auto;
    min-height: 100vh;
    background-repeat: repeat;
    background-size: 100% 100%;
    background-position: top center
}

.content {
    margin-top: 20%
}

.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%)
}

.InputStyle {
    border-radius: 25px;
    border: solid 1px white;
    background: transparent;
    width: 100%;
    padding: 10px 20px
}

input,
input::-webkit-input-placeholder {
    font-size: 12px;
    color: white
}

.social-btn {
    position: absolute;
    bottom: 20px;
    left: 47%
}

.sub:hover{
	transition: all 0.4s;
	background: white;
	color: purple;
}

i {
    padding: 5px;
    color: white
}
	
td{
	background: white !important;
}

input,
input:focus {
    border: solid 1px white;
    outline: 0;
    -webkit-appearance: none;
    box-shadow: nones;
    -moz-box-shadow: none;
    -webkit-box-shadow: none
}

.admin{
	letter-spacing: 20px;
}

.secondLine {
    font-weight: 350;
    font-size: 15px;
    margin-bottom: 15%;
    color: white
}

.firstLine {
    font-size: 30px;
    color: white
}

@media only screen and (max-width: 600px) {
    .firstLine {
        font-size: 20px
    }

    .alert{
    	margin-top: 40px;
    }
}

.subm{
	width: 50%;
}

.subm:hover{
	width: 50%;
	background: white;
	color: purple;
	transition: all 0.3s;
}
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
	color: white;
	width:inherit; 
    padding:0 10px;
    border-color: white;
    border-bottom:none;
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
}

	</style>
	<head>
		<title>Test</title>
	</head>
	<body>
		<div class="container">
			<div class="col-sm-12">
				<center><h1 class="admin text-white">Administrator</h1><br>
				<span class="text-light">Edit Pricing</span></center><br>
				
				<center>
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col"><center>NO</center></th>
					      <th scope="col">Nama Paket</th>
					      <th scope="col">Harga Coret</th>
					      <th scope="col">Harga Publish</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td scope="row">1</td>
					      <td>Bayi</td>
					      <td><?= rupiah($fetch['bayi']) ?></td>
					      <td><?= rupiah($fetch['bayi_publish']) ?></td>
					    </tr>
					    <tr>
					      <td scope="row">2</td>
					      <td>Pelajar</td>
					      <td><?= rupiah($fetch['pelajar']); ?></td>
					      <td><?= rupiah($fetch['pelajar_publish']); ?></td>
					    </tr>
					    <tr>
					      <td scope="row">3</td>
					      <td>Personal</td>
					      <td><?= rupiah($fetch['personal']) ?></td>
					      <td><?= rupiah($fetch['personal_publish']) ?></td>
					    </tr>
					    <tr>
					      <td scope="row">3</td>
					      <td>Bisnis</td>
					      <td><?= rupiah($fetch['bisnis']) ?></td>
					      <td><?= rupiah($fetch['bisnis_publish']) ?></td>
					    </tr>
					  </tbody>
					</table>
				</center>
				<form method="post">
				<div class="row justify-content-center">
					<div class="col-sm-5">
						<fieldset class="scheduler-border">
					    <legend class="scheduler-border">Pricing : Bayi</legend>
					    <div class="control-group">
					        <label class="control-label input-label" for="startTime"></label>
					        <div class="controls bootstrap-timepicker">
					             <p> <input class="InputStyle" placeholder="Input harga coret " style="font-family:Arial, FontAwesome" value="<?= $fetch['bayi'] ?>" name="bayi" type="text" required> </p>
					              <p> <input class="InputStyle" placeholder="Input harga publish " style="font-family:Arial, FontAwesome" value="<?= $fetch['bayi_publish'] ?>" name="bayi_publish" type="text" required> </p>
					        </div>
					    </div>
					</fieldset>
					</div>

					<div class="col-sm-5">
						<fieldset class="scheduler-border">
					    <legend class="scheduler-border">Pricing : Pelajar</legend>
					    <div class="control-group">
					        <label class="control-label input-label" for="startTime"></label>
					        <div class="controls bootstrap-timepicker">
					             <p> <input class="InputStyle" name="pelajar" placeholder="Input harga coret " style="font-family:Arial, FontAwesome" type="text" value="<?= $fetch['pelajar'] ?>" required> </p>
					              <p> <input class="InputStyle" name="pelajar_publish" placeholder="Input Harga Publish Pelajar " value="<?= $fetch['pelajar_publish'] ?>" style="font-family:Arial, FontAwesome" type="text" required> </p>
					        </div>
					    </div>
					</fieldset>
					</div>

					<div class="col-sm-5">
						<fieldset class="scheduler-border">
					    <legend class="scheduler-border">Pricing : Personal</legend>
					    <div class="control-group">
					        <label class="control-label input-label" for="startTime"></label>
					        <div class="controls bootstrap-timepicker">
					             <p> <input class="InputStyle" name="personal" value="<?= $fetch['personal'] ?>" placeholder="Input harga coret personal " style="font-family:Arial, FontAwesome" type="text" required> </p>
					              <p> <input class="InputStyle" name="personal_publish" placeholder="Input harga publish " value="<?= $fetch['personal_publish'] ?>" style="font-family:Arial, FontAwesome" type="text" required> </p>
					        </div>
					    </div>
					</fieldset>
					</div>

					<div class="col-sm-5">
						<fieldset class="scheduler-border">
					    <legend class="scheduler-border">Pricing : Bisnis</legend>
					    <div class="control-group">
					        <label class="control-label input-label" for="startTime"></label>
					        <div class="controls bootstrap-timepicker">
					             <p> <input class="InputStyle" name="bisnis" placeholder="Input harga coret " style="font-family:Arial, FontAwesome" type="text" value="<?= $fetch['bisnis'] ?>" required> </p>
					              <p> <input class="InputStyle" name="bisnis_publish" placeholder="Input harga publish" value="<?= $fetch['bisnis_publish'] ?>" style="font-family:Arial, FontAwesome" type="text" required> </p>
					        </div>
					    </div>
					</fieldset>
					</div>		
				</div>
			</div>
			<center>
				<input class="InputStyle subm" name="submit" placeholder="Input Pelajar " style="font-family:Arial, FontAwesome" value="SUBMIT" type="submit">
			</center>
				</form>
		</div>
	</body>
</html>
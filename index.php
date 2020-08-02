<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<meta charset="utf-8">
	<title>PDF Oluştur</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container mt-5">
		<form action="pdf.php" class="col-md-6 offset-md-3" method="post">
			<h1 class="mb-3 offset-md-3">PDF Oluştur</h1>

			<div class="row mb-1">
			<div class="col-md-6">
			<input type="text" name="ad" placeholder="Ad" class="form-control" required> </div>
			<div class="col-md-6">
			<input type="text" name="soyad" placeholder="Soyad" class="form-control" required>
			</div>
			</div>

			<div class="mb-1">
			<input type="text" name="mail" placeholder="Mail" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="text" name="telefon" placeholder="Telefon" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="date" id="start" name="giris" value="" min="2020-01-01" max="2021-12-31" placeholder="Giriş Tarihi" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="date" id="start" name="cikis" value="" min="2020-01-01" max="2021-12-31" placeholder="Çıkış Tarihi" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="text" name="odatipi" placeholder="Oda Tipi" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="text" name="yetiskins" placeholder="Yetişkin Sayısı" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="text" name="cocuks" placeholder="Çocuk Sayısı" class="form-control" required> 
			</div>
			<div class="mb-1">
			<input type="text" name="cocuky" placeholder="Çocuk Yaşları" class="form-control" required> 
			</div>
			<div class="mb-1">
			<textarea name="mesaj" class="form-control" id="" cols="30" rows="3" placeholder="Açıklama"></textarea> </div>
			<button type="submit" class="btn btn-success btn-lg btn-block">PDF oluştur</button>
		</form>
	</div>
</body>
</html>
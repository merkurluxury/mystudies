<?php session_start ( ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lab1- Web Programlama 2</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<br>

<p class="text-center"><b>Alt Metin Bulucu</b></p>
<?php 

if (!empty($_GET['durum'])) {?>
 	<p class="text-center" style="color: red"><b>Boş Bırakma Lütfen</b></p>
 <?php } ?>
	<form action="index.php" method="POST" >
			
	<center>		<div class="form-group col-sm-5">
				<label>Aradığınız Metin:</label>
				<input type="text" name="altmetin" class="form-control" placeholder="Alt Metin Giriniz....">
			</div>

					<div class="form-group col-sm-5">
				<label>İçinde Aradığımız Metin:</label>
				<input type="text" name="metin" class="form-control" placeholder="Ana metni giriniz...">
			</div>
<button type="submit" class="btn btn-success col-sm-2" name="bul">Bul</button></center>
	</form>


<center>

	<?php 

	if (isset( $_POST['metin'])) {

//Burası metnimiz.
    $metin    = $_POST['metin'];
	//Metnin içinde yazıdır kelimesini bulduk.
    $bul      = $_POST['altmetin'];
	//Metnin içindeki yazıdır kelimesini <b> etiketi arasına aldık ve sadece yazıdır kısmı kalınlaştı.
    $degistir = "<b style='color:red'>".$bul."</b>";
    $metin = str_replace($bul, $degistir, $metin, $sayi);
	//Metnin son hali
   echo $metin. "<br>"; 


echo $sayi." Adet Bulundu";

	}
 

 ?>
</center>





</body>
</html>
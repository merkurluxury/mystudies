<!DOCTYPE html>
<html>
<head>
	<title>Lab-2</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

	<?php

		if (isset($_POST['hesapla'])) {

	$derssaati=$_POST['derssaati'];
	$katsayi=$_POST['katsayi'];
	$teorikders=$_POST['teorikders'];
	$toplam=$derssaati+$teorikders;

	if ($toplam<21) {

		switch ($_POST['unvan']){

		

	case 1:
	  $katsayi1=$katsayi*300;
	 	$ekmaas=$katsayi1*$toplam;
	
	case 2:
	  $katsayi1=$katsayi*250;
		$ekmaas=$katsayi1*$toplam;
		
		case 3 :
	  $katsayi1=$katsayi*200;
		$ekmaas=$katsayi1*$toplam;
		
		case 4:
	$katsayi1=$katsayi*160;
	$ekmaas=$katsayi1*$toplam;
		
	}}
	elseif($toplam>20){

		$toplam=20;
		switch ($_POST['unvan']){

		

			case 1:
			  $katsayi1=$katsayi*300;
				 $ekmaas=$katsayi1*$toplam;
			
			case 2:
			  $katsayi1=$katsayi*250;
				$ekmaas=$katsayi1*$toplam;
				
				case 3 :
			  $katsayi1=$katsayi*200;
				$ekmaas=$katsayi1*$toplam;
				
				case 4:
			$katsayi1=$katsayi*160;
			$ekmaas=$katsayi1*$toplam;
				
			}

		
	}

	}
	 ?>

<form action="index.php" method="POST" >
	<center>
		<h3> Ek Ders Ücret Hesaplayıcı</h3>
<div style="width: 40%">
	<label>Aşağıdan Ünvanınızı seçiniz:</label>
<select class="form-select" name="unvan" >
  <option value="1" >Profesör Doktor</option>
  <option value="2">Doçent Doktor</option>
  <option value="3">Yardımcı Doçent</option>
  <option value="4">Öğretim Görevlisi ve Araştırma Görevlisi</option>
 
</select>

 

 <div class="mb-4 row">
 	<label>Teorik Ders Sayısı:</label>
         <input type="number" class="form-control" name="teorikders" placeholder="Teorik Ders Saatini Giriniz..." min="0" max="20" required>
</div>
<div class="mb-4 row">
 	<label>Uygulama Ders Saati:</label>
         <input type="number" class="form-control" name="derssaati" placeholder="Uygulama Ders Saatini Giriniz..." min="0" max="10" required>
</div>

<div class="mb-4 row">
 <label>Memur Maaş Katsayısı:</label>
				<input type="number" class="form-control" name="katsayi" value="0.05592" required>
</div>


<button style="margin-top: 20px;" class="btn btn-dark" name="hesapla">Hesapla</button>
<hr />

<div class="mb-4 row">
 <label>Alacağınız Ek Ücret:</label>
				<input type="number" class="form-control" name="katsayi" value="<?php echo $ekmaas; ?>" disabled>
</div>

</center>

</form>




</body>
</html>

<?php 
error_reporting(0);

//eğer yazdır butonuna tıklandıysa
if (isset($_POST["gonder"]))
{
      //kullanıcı adı al

  $kullaniciadi = $_POST["kullaniciadi"];
    //adı al
    $ad = $_POST["isim"];
    
    //soyadı al
    $soyad = $_POST["soyad"];
     //e-mail al
     $email = $_POST["email"];
     //sifre al
     $sifre = $_POST["sifre"];
     
   
    

    //yazdırma işlemi
    echo 
    "<br>kullanıcı adınız: " . $kullaniciadi . 
    "<br> Adınız: " . $ad . 
    "<br> Soyadınız: " . $soyad.
    "<br> e mailiniz: " . $email.
    "<br> şifreniz:" . $sifre
    ;
}
if (CRYPT_SHA512 == 1)
{
echo "".crypt('sifre','$6$rounds=5000$anexamplestringforsalt$');
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web ödev</title>
</head>
<body>
    <div align="center">
        
        <form action="" method="POST">

        <label for="ad">Kulanıcı Adınız</label>
            <br>
            <input id="kullaniciadi" name="kullaniciadi" placeholder="kullanici adinizi giriniz...">
            <br>
            <label for="ad">Adınız</label>
            <br>
            <input id="ad" name="isim" placeholder="Adınızı giriniz...">
            
            <br><br>

            
            <label for="soyad">Soyadınız</label>
            <br>
            <input id="soyad" name="soyad" placeholder="Soyadınızı giriniz...">
            <br><br>

            <label for="email">e-mail</label>
            <br>
            <input id="email" name="email" placeholder="e-mailinizi giriniz">
            <br><br>


            <input id="sifre" name="sifre " type="password" placeholder="sifrenizi giriniz">
            <br><br>
            <input name="gonder" type="submit" value="gönder" />
        </form>
    
    </div>
</body>
</html>
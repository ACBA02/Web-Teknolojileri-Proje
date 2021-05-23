<?php
 if (isset($_POST['kullaniciadi'],$_POST['sifre'])&&($_POST['kullaniciadi']== 'G201210029')&&($_POST['sifre']== 'g201210029'))
 {
	 echo "Bilgiler Dogrulandi.<br>";
	 
	 echo "<p> <a href= 'Hakkinda.htm'>İleri</a></p>";
 }
 else
 {
	 echo "Kullanici Adi veya Sifre Yanlis. Lutfen bilgilerinizi kontrol edip tekrar deneyiniz.<br>";
	 
	 echo "<p> <a href= 'index.htm'>Geri</a></p>";
 }
?>
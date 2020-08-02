<?php 

require_once __DIR__ . '/vendor/autoload.php';
	
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$mail = $_POST["mail"];
$telefon = $_POST["telefon"];
$giris = $_POST["giris"];
$cikis = $_POST["cikis"];
$odatipi = $_POST["odatipi"];
$yetiskins = $_POST["yetiskins"];
$cocuks = $_POST["cocuks"];
$cocuky = $_POST["cocuky"];
$mesaj = $_POST["mesaj"];

$mpdf = new Mpdf\Mpdf();

$veri = '';

$veri .= '<h1> Bilgiler </h1>';

$veri .= '<strong>Ad	: </strong>' . $ad . '<br>';
$veri .= '<strong>Soyad	: </strong>' . $soyad . '<br>';
$veri .= '<strong>Mail	: </strong>' . $mail . '<br>';
$veri .= '<strong>Telefon		: </strong>' . $telefon . '<br>';
$veri .= '<strong>Giriş Tarihi	: </strong>' . $giris . '<br>';
$veri .= '<strong>Çıkış Tarihi	: </strong>' . $cikis . '<br>';
$veri .= '<strong>Oda Tipi		: </strong>' . $odatipi . '<br>';
$veri .= '<strong>Yetişkin Sayısı	: </strong>' . $yetiskins . '<br>';
$veri .= '<strong>Çocuk Sayısı	: </strong>' . $cocuks . '<br>';
$veri .= '<strong>Çocuk Yaşları	: </strong>' . $cocuky . '<br>';

if ($mesaj) {
	$veri .= '<br><strong>Mesaj : </strong><br>' . $mesaj;
}

$mpdf->writeHTML($veri);

$mpdf->output('bilgilerim.pdf','D');


 ?>
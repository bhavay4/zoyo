<?php 

session_start();
session_unset();
session_destroy();

$url = explode('?',$_SERVER['HTTP_REFERER']);
$url2 = explode('=',$_SERVER['HTTP_REFERER']);
$u1 = $url[0];
$u2 = $url2[1];
$u3 = $url2[2];
$u4 = $url2[3];
// $u3 = explode('%3D',$u2);
// $u4 = $u3[3];
// $u5 = explode('?',$u4);
echo $_SERVER['HTTP_REFERER']."<br>";
$nurl = $u1.'?view-submit='.$u2.'='.$u3.'='.$u4;
$nurl3 = $u1.'?view-submit='.$u2.'='.$u3;
$nurl2 = explode('/',$nurl);
$nurl4 = explode('/',$nurl3);
// echo $nurl2[4];
echo $nurl4[4];



if($_SERVER['HTTP_REFERER'] == $nurl){
	header("Location: ../".$nurl2[4]);
	exit();
}
else if($_SERVER['HTTP_REFERER'] == $nurl3){
	header("Location: ../".$nurl4[4]);
	exit();
}	  
else{
	header("Location: ../index.php");
	exit();
}

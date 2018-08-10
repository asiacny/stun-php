<?php

include_once("STUNClient.php");

//屏蔽socket通信警告
error_reporting(E_ERROR);

$sc = new STUNClient();

//$sc->setServerAddr("stun.ekiga.net"); 
//$sc->setServerAddr("stun.voip.aebc.com");
$sc->setServerAddr("stun.xten.com");
$sc->createSocket();

print("NAT TYPE:" . $sc->natType2String($sc->getNatType()) ."\n");
print("MAPPED ADDRESS:" . $sc->getMappedAddr() . "\n");

?>

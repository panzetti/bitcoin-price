<?php

require_once('functions.php');

$btcUSD = getPrice('https://btc-e.com/api/2/btc_usd/ticker');
$btcBTCE = $btcUSD["ticker"]["last"];

$btcUSD = getPrice('https://api.coindesk.com/v1/bpi/currentprice.json');
$btcCOINDESK = $btcUSD["bpi"]["USD"]["rate"];

$btcUSD = getPrice('https://api.bitcoinaverage.com/ticker/global/all');
$btcAVERAGE = $btcUSD["USD"]["last"];

// $btcUSD = getPrice('https://www.bitstamp.net/api/ticker/');
// $btcBITSTAMP = $btcUSD["high"]["last"];

$btcBTCE = round($btcBTCE, 2);
$btcCOINDESK = round($btcCOINDESK, 2);
$btcAVERAGE = round($btcAVERAGE, 2);
// $btcBITSTAMP = round($btcBITSTAMP, 2);

?>


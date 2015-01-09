<?php

require_once('functions.php');

$btcUSD = getPrice('https://btc-e.com/api/2/btc_usd/ticker');
$btcBTCE = $btcUSD["ticker"]["last"];

$btcUSD = getPrice('https://api.coindesk.com/v1/bpi/currentprice.json');
$btcCOINDESK = $btcUSD["bpi"]["USD"]["rate"];

$btcBTCE = round($btcBTCE, 2);
$btcCOINDESK = round($btcCOINDESK, 2);

?>
<!DOCTYPE HTML>
<html>
<body bgcolor=white>
Bitcoin Price - Coindesk <br />
<?= $btcCOINDESK; ?> <br />
Bitcoin Price - BTC-e <br />
<?= $btcBTCE; ?> <br />

</body>
</html>

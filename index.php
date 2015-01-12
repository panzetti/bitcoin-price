<!DOCTYPE HTML>
<html>
	<head>
		<title>Bitcoin Display Price</title>
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		 <script>
			function autoRefresh_div() {
				$("#result").load("index.php");// a function which will load data from other file after x seconds
											
		}
 				setInterval('autoRefresh_div()', 10000); // refresh div after 10 secs
         </script>
	</head>
<?php
require_once('config.php');
?>
<body bgcolor=white>
	<div id="result">
		<b>Bitcoin Price - BTC-e</b> <br />
		$ <?= $btcBTCE; ?><br /> <br />
		
		<b>Bitcoin Price - Coindesk</b> <br />
		$ <?= $btcCOINDESK; ?><br /><br />

		<b>Bitcoin Price - BitcoinAverage</b> <br />
		$ <?= $btcAVERAGE; ?><br /> <br />
		
		<b>Bitcoin Price - BLOCKCHAIN</b> <br />
		$ <?= $btcBLOCKCHAINUSD; ?> - R$ <?= $btcBLOCKCHAINBRL; ?><br /> <br />
		
		<b>Bitcoin Price - BITSTAMP</b> <br />
		$ <?= $btcBITSTAMP; ?><br /> <br />
		
	</div>
</body>
</html>

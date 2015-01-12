<?php
require_once('config.php');
?>
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

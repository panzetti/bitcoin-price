<!DOCTYPE HTML>
<html>
	<head>
		<title>Bitcoin Display Price</title>
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		 <script>
			function autoRefresh_div() {
				$("body").fadeOut(500,"linear",function(e){
						$("body").fadeIn(500,"linear",function(e){
							$("body").load("btcprice.php");  // a function which will load data from other file after x seconds
						});						
				});
			}
 			setInterval('autoRefresh_div()', 6000); // refresh div after 6 secs
		</script>
	</head>
	
<body bgcolor=white>
	<?php include_once("btcprice.php") ?>
</body>
</html>

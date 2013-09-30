<?php
	$msgEncoded = urlencode("Facilita Movel");
	$urlChamada = "https://www.facilitamovel.com.br/api/simpleSend.ft?user=alexandrecepg&password=40dc2387&destinatario=19992537531&msg=".$msgEncoded;
	echo file_get_contents($urlChamada);
?>
<?php
	$aluno = dbase_open('db/aluno.dbf', 0);
	if($aluno) {
		$aluno_length = dbase_numrecords($aluno);
		for($i = 1; $i <= $aluno_length; $i++) {
			$row = dbase_get_record_with_names($aluno, $i);
			if($row) {
				echo "<p>Aluno #$i: " . trim($row['NOME']). "</p>";
			}
		}
		dbase_close($aluno);
	}
?>

<?php
    $user = "alebonfa";
    $password = "ZTdLDKNBGFeWSW";
    $api_id = "3436483";
    $baseurl ="http://api.clickatell.com";
 
    $text = urlencode("This is an example message");
    $to = "551982036040";
 
    // auth call
    $url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
 
    // do auth call
    $ret = file($url);
 
    // explode our response. return string is on first line of the data returned
    $sess = explode(":",$ret[0]);
    if ($sess[0] == "OK") {
 
        $sess_id = trim($sess[1]); // remove any whitespace
        $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text";
 
        // do sendmsg call
        $ret = file($url);
        $send = explode(":",$ret[0]);
 
        if ($send[0] == "ID") {
            echo "successnmessage ID: ". $send[1];
        } else {
            echo "send message failed";
        }
    } else {
        echo "Authentication failure: ". $ret[0];
    }
?>

<!DOCTYPE html>  
<html lang="pt-BR" class="no-js">
	<head>
		<script type='text/javascript' src='//api.skyscanner.net/api.ashx?key=430c1b4c-a99c-46bd-8a50-bdedc0f2ffba'></script>  
	    <script type='text/javascript'> 
    	    skyscanner.load('snippets','2');  
        	function main(){  
            	var snippet=new skyscanner.snippets.SearchPanelControl(); 
	            snippet.setMarket('BR');
	            snippet.setCulture('pt-PT'); 
	            snippet.setCurrency('BRL');
	            snippet.setShape('box400x400');
	            snippet.draw(document.getElementById('snippet_searchpanel'));
	        }  
	        skyscanner.setOnLoadCallback(main);  
	    </script>
	</head>  
	<body>  
    	<div id='snippet_searchpanel' style='width: auto; height:auto;'></div>
	</body>  
</html>

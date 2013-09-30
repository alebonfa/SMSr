<?php
	$aluno = dbase_open('c:/dbf/teste.dbf', 0);
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
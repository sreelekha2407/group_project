<?php



$pdf = addslashes(file_get_contents($_FILES['inputname']['tmp_name']));
            $filetype = addslashes($_FILES['inputname']['type']);//pour le test 
            $namepdf = addslashes($_FILES['inputname']['name']);            
            if (substr($filetype, 0, 11) == 'application'){
            $mysqli->query("insert into tablepdf(pdf_nom,pdf)value('$namepdf','$pdf')");
            }
?>
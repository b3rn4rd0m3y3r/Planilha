<?php
	header('Access-Control-Allow-Origin: *');

	//include "connection.php";

	// Reading JSON POST using PHP
	$json = file_get_contents('php://input');
	$jsonObj = json_decode($json);
	$json1 = $jsonObj->json1;
	$json1Obj = json_decode($json1);
	$json2 = $jsonObj->json2;
	$json2Obj = json_decode($json2);
	$json3 = $jsonObj->json3;
	$json3Obj = json_decode($json3);
	$json4 = $jsonObj->json4;
	$json4Obj = json_decode($json4);
	$json5 = $jsonObj->json5;
	$json5Obj = json_decode($json5);
	$NomePlan = $json1Obj[0]->NomePlan;
	

	echo $json;

	$NoItens = count($jsonObj);

	$S = "";
	$itens = "";
	$sNo = "";
	// Percorre os itens do JSON, exceto o item 0 (zero) dos t�tulos

	//for($i=1;$i<$NoItens;$i++){
			//fwrite($fp, $sNo ."\r\n");
			/*
			$S .= "<li id=it" . $sNo . "><ul id=it" . $sNo;
			$S  .= ">";
			$TpItem = mb_convert_encoding($jsonObj[$i]->TipodoItem, 'ISO-8859-1', 'auto');
			$S .= "<li>" . $i . "</li>" ;
			$S .= "<li>" . $jsonObj[$i]->NoItem . "</li>" ;
			$S .= "<li>" . $TpItem . "</li>" ;
			$S .= "<li>" . $jsonObj[$i]->Quantidade . "</li>" ;
			$S .= "<li class=painel></li>" ;
			$S .= "</ul></li>" ;
			*/
			//$TpItem = mb_convert_encoding($jsonObj[$i]->TipodoItem, 'ISO-8859-1', 'auto');
	//		}
	// Arquivo de log e itens
	$fp = fopen($NomePlan, 'w');
	//fwrite($fp, $S ."\r\n");
	fwrite($fp, mb_convert_encoding($json1, 'ISO-8859-1', 'auto')."\r\n");
	fwrite($fp, mb_convert_encoding($json2, 'ISO-8859-1', 'auto')."\r\n");
	fwrite($fp, mb_convert_encoding($json3, 'ISO-8859-1', 'auto')."\r\n");
	fwrite($fp, mb_convert_encoding($json4, 'ISO-8859-1', 'auto')."\r\n");
	fwrite($fp, mb_convert_encoding($json5, 'ISO-8859-1', 'auto')."\r\n");
	//fwrite($fp, $itens);
	//fwrite($fp, "No. Itens: " . $NoItens ."\r\n");
	
	
	
	fclose($fp);
	
	
	
	?>
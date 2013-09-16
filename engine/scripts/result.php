<?php



function showResult($tbl){
$mas = array();

$connect = mysql_connect(HOST,USER,PASSWORD);
mysql_select_db(BASE,$connect);
mysql_query("SET NAMES utf8");

$query = "SELECT valLitCode, valCount, caption, valPrice  FROM val_code, $tbl WHERE iso4caption = valLitCode AND valDate=(SELECT MAX(valDate) FROM $tbl) ORDER BY caption";

$result = @mysql_query($query,$connect);  //or die(mysql_error());



while ($row = @mysql_fetch_array($result, MYSQL_NUM)) {
    //print_r($row);
    $mas[] = $row;
}
mysql_close($connect);

return $mas;
}

function isDateSet($tbl){	$connect = mysql_connect(HOST,USER,PASSWORD);
	mysql_select_db(BASE,$connect);
	mysql_query("SET NAMES utf8");
	$query = "SELECT * FROM $tbl WHERE valDate=(SELECT MAX(valDate) FROM $tbl)";

	$result = mysql_query($query,$connect) or die(mysql_error());
	$num = mysql_num_rows($result);
	mysql_close($connect);
	if($num){		return true;
		}else{			return false;
			}
}

function addInfo($mas,$tbl){	$now_date = date("Y-m-d H:i:s");	$link_connect = mysql_connect(HOST,USER,PASSWORD);
	mysql_select_db(BASE,$link_connect);
	mysql_query("SET NAMES utf8");
  		for($j=0;$j<count($mas);$j++){
		 	$sd = trim($mas[$j][1]);
		 	$sf = trim($mas[$j][2]);
		 	$sg = trim($mas[$j][3]);
		 	$sh = trim($mas[$j][5]);
    		$query = "INSERT INTO ".$tbl." VALUES(NULL,'$now_date','$sd','$sf','$sg','$sh','')";
			mysql_query($query) or die("DDDDDD".mysql_error());
		}

	mysql_close($link_connect);
}


?>
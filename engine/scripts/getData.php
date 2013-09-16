<?php

require_once 'settings.php';

function Error($message = ""){
	@file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs/errors.log',$message, FILE_APPEND);

}

function LoadXML($link){
		if($data = @simplexml_load_file($link)){
			return $data;
			}else{
				Error(date('d.m.Y H:i:s')." Error load XML file on link ".$link."; \r\n");
				return false;
				}
}

function getDataUkr($link){

	require_once 'simple_html_dom.php';

	$mas = array();
	$data = @file_get_html($link);

	foreach($data->find('script,link,comment') as $tmp)$tmp->outertext = '';

	$html = $data->find('td.cell_c');
	$ic = count($html);
		if($ic != 0){
			//$mas = array();
			$ind_arr = 0;
			$mas[$ind_arr] = array();
			$i = 0;
   				foreach($html as $key=>$val){
					$val1 = $val->plaintext;
					settype($val1,'string');
						if(($i % 4) == 0){
				    	  $ind_arr++;
				    	  $mas[$ind_arr] = array();
			          	}
						$mas[$ind_arr][0] = "";
						$mas[$ind_arr][] = $val1;

					$i++;
				}
	 	}else{
			//$smarty->assign('error_message', E_01);                // доработать вывод сообщения об ошибке
			}

	$html = $data->find('td.cell');
	$ind_arr = 0;
	$buf ;

   	foreach($html as $key=>$val){
		$val1 = $val->plaintext;
		$buf = $mas[$ind_arr+1][4];
		$mas[$ind_arr+1][4] = $val1;
		$mas[$ind_arr+1][5] = $buf;
		$mas[$ind_arr] = $mas[$ind_arr +1];
		unset($mas[$ind_arr +1]);
		$ind_arr++;

	}

	$data->clear(); // подчищаем за собой
	unset($data);

	return $mas;
}

function getDataPol($link){

	$mas = array();

    if($xmlobj = LoadXML($link)){
		$data = LoadXML($link);
		$mas_buf = array();
		$ind_arr = 0;

		foreach($data[0]->children() as $a=>$b){
		   if( count($b) < 2){
			continue;
		   }else{
				 $mas[$ind_arr] = array();
				 $mas_buf[$ind_arr] = array();
				 $mas[$ind_arr][0] = "";
				 $mas[$ind_arr][1] = "";
				 $mas_buf[$ind_arr][0] = "";
				 $mas_buf[$ind_arr][1] = "";

					foreach($b->children() as $c=>$d){

						settype($d,'string');
						$mas_buf[$ind_arr][] = $d;
	    			}

			    $mas[$ind_arr][2] = $mas_buf[$ind_arr][4];
			    $mas[$ind_arr][3] = $mas_buf[$ind_arr][3];
			    $mas[$ind_arr][4] = $mas_buf[$ind_arr][2];
			    $mas[$ind_arr][5] = $mas_buf[$ind_arr][5];

				$ind_arr++;

				}
	 	}
	}else{
			//$smarty->assign('error_message', E_01);                          // доработать вывод сообщения об ошибке
		}
  return $mas;
}

function getDataLat($link){

	$mas = array();

	if($xmlobj = LoadXML($link)){
		$data =  LoadXML($link);
		$mas = array();
		$ind_arr = 0;
		$ind = array();

		foreach($data[0]->children() as $a=>$b){
   			foreach($b->children() as $c=>$d){
				$mas[$ind_arr] = array();
				$mas[$ind_arr][0]="";
			    $mas[$ind_arr][1]="";
		        $mas[$ind_arr][4]="";
		        $i = 2;

				foreach($d->children() as $e=>$f){
			        if($i == 4) $i++;
					settype($e,'string');
					settype($f,'string');
					$mas[$ind_arr][$i] = $f;
					$i++;
				}

				$ind_arr++;
    		}


 		}
  	}else{
		//$smarty->assign('error_message', E_01);                          // доработать вывод сообщения об ошибке
		}

  return $mas;
}

function getDataLit($link){

	$mas = array();
	$mas_buf = array();

	$f = @fopen($link, "rt");
 	if($f){
		for ($i=0; $data=@fgetcsv($f,1000,","); $i++) {
			$num = count($data);
			$mas[$i] = array();
        	$mas_buf[$i] = array();
			$mas[$i][0] = "";
        	$mas_buf[$i][0] = "";
			$mas[$i][1] = "";
        	$mas_buf[$i][1] = "";

  			for ($c=0; $c<$num; $c++){

    			$mas_buf[$i][$c+2] = $data[$c];

    		}

	    	$mas[$i][2] = $mas_buf[$i][3];
	        $mas[$i][3] = $mas_buf[$i][4];
	        $mas[$i][4] = $mas_buf[$i][2];
	        $mas[$i][5] = $mas_buf[$i][5];

		}
		fclose($f);
	}else{
		//$smarty->assign('error_message', E_01);                          // доработать вывод сообщения об ошибке
		}

 return $mas;
}

function getDataRus($link){

	$mas = array();
    if($xmlobj = LoadXML($link)){
		$data = LoadXML($link);
		$ind_arr = 0;
		$ind = array();

		foreach($data[0]->children() as $a=>$b){

	 		foreach($b->attributes() as $nm => $rs){

	 	    	$ind = $rs;
			}

	 		settype($ind[0],'string');
			$mas[$ind_arr] = array();
			$mas[$ind_arr][] = $ind[0];

			foreach($b->children() as $c=>$d){

				settype($d,'string');
				$mas[$ind_arr][] = $d;
		    }

			$ind_arr++;
 		}

	}else{
		//$smarty->assign('error_message', E_01);                          // доработать вывод сообщения об ошибке
		}

 return $mas;
}

function getDataBel($link){

	$mas = array();

	if($xmlobj = LoadXML($link)){
		$data =  LoadXML($link);
		$mas = array();
		$ind_arr = 0;
		$ind = array();

		//$dater = $data->attributes();

		foreach($data[0]->children() as $a=>$b){

	 		foreach($b->attributes() as $nm => $rs){

	 	    	$ind = $rs;

			}

	 		settype($ind[0],'integer');
			$mas[$ind_arr] = array();
			$mas[$ind_arr][] = $ind[0];

			foreach($b->children() as $c=>$d){

				settype($d,'string');
				$mas[$ind_arr][] = $d;
    		}

			$ind_arr++;
 		}

	}else{
		//$smarty->assign('error_message', E_01);                          // доработать вывод сообщения об ошибке
		}

  return $mas;

}



?>
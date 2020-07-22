<?php 
error_reporting(0);
function status($url,$code = null,$filetxt = null){
	if($filetxt != null){
		$file = fopen($filetxt, "r");
	}else{
		$file = fopen("dir.txt", "r");
	}
	while(!feof($file)){
		$path = fgets($file);
		$header = get_headers("http://".$url."/".trim($path)."/");
		$response = explode(" ", $header[0]);
		if($response[1] != "404"){
			if($code == null){
				echo "\e[32mFound($response[1]): " . $url ."/". $path."\e[39m\n";
			}else{
				if(trim($response[1]) == $code){
					echo "\e[32mFound($response[1]): " . $url ."/". $path."\e[39m\n";
				}
			}
		}
	}
	fclose($file);
}


?>
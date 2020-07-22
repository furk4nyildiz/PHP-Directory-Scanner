<?php
echo "
\t  ____ ____ _  _ ____ ____ _  _ ___ ____ ____   ____ ____ ____ 
\t  [__  |__| |\ | |    |__| |_/   |  |__| |__/   [__  |___ |    
\t  ___] |  | | \| |___ |  | | \_  |  |  | |  \   ___] |___ |___ 
\n";

$str = "\t\t\e[31mGithub /furk4nyildiz - /yunemse48 - /burakyusuf\e[39m\n\n";

$dizi = explode(" ", $str);
foreach ($dizi as $d) {
	$d = $d . " ";
	for ($i=0; $i < strlen($d) ; $i++) { 
		echo $d[$i];
		usleep(60000);
	}
}

if(strlen(array_search("-h", $argv)) != null){
$str1 = "
Example : php find.php -d google.com 
Example : php find.php -d google.com -s all 
Example : php find.php -d google.com -s 302 
Example : php find.php -d google.com -s 200 -w WORDLIST 
\t-h \t help
\t-w \t wordlist
\t-s \t http status code
\t-d \t domain\n";

$dizi1 = explode(" ", $str1);
foreach ($dizi1 as $d) {
	$d = $d . " ";
	for ($i=0; $i < strlen($d) ; $i++) { 
		echo $d[$i];
		usleep(10000);
	}
}
exit;
}

include 'op.php';
if(trim($argv[1]) =="-d"){
	if(trim($argv[2] != null)){
		if(trim($argv[3]) =="-s"){
			echo "Starting... \n";
			if(trim($argv[4] != null)){
				if(trim($argv[4] == "all")){
					if(trim($argv[5]) != null && trim($argv[5]) == "-w"){
						status($argv[2],null,$filetxt = $argv[6]);
						echo "\n";
					}else{
						status($argv[2]);
						echo "\n";
					}
				}else{
					if(is_numeric($argv[4])){
						if(trim($argv[5]) != null && trim($argv[5]) == "-w"){
							status($argv[2],$argv[4],$filetxt = $argv[6]);
							echo "\n";
						}else{
							status($argv[2],$argv[4]);
							echo "\n";
						}
					}else{
						echo "\e[91m HTTP Status Code Is Invalid. \e[39m\n";
						exit;
					}
				}
			}else{
				echo "\e[91m HTTP Status Code Is Invalid!\n";
				exit;
			}
		}else{
			echo "Starting... \n";
			status($argv[2],null,null);
			echo "\n";
		}
	}
}


echo "\e[39m";
?>

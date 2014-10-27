<?php
$file = fopen("file.txt", "r") or exit("Unable to open file!");
$file1 = fopen("write.txt","w")or exit("Unable to open file!");
while(!feof($file))
  {
	$str = fgets($file);
	if(!empty($str)) {
		$srting = "yes i do again $str";
        fwrite($file1,$srting);
	}
  }
fclose($file);
?>

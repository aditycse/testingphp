<?php
//$path="/home/user/Desktop/Android/Hdpi/100X100/1";
$path=$_REQUEST['path'];
$data=scandir($path);
//print_r($data);die;
$count=0;
$countImage=count($data);
echo $countImage-2 ." Found<br>";
for($i=2;$i<$countImage;$i++){
//    $val=explode("_",$data[$i]);
//    $name=explode(".",$val['2']);
//    $saveName=$name[0].".".$name[1];
//    rename($path."/".$data[$i],$path."/".$saveName);
    $s = $data[$i];
//    $pattern = '/([0-9]+\_[0-9]?[_]?)?/i';
//    $name = str_replace('.JPG', '', preg_replace($pattern, '', $s));
    $name=str_replace('_','',$s);
    rename($path . "/" . $data[$i], $path . "/" . $name);
    $count++;
}
echo "The name of ".$count." Images Changed";
die;
?>

<?php
$str = decbin(39);//100111
$count = substr_count($str,'1');
$strcount=strlen($str);
$arr = array();
//获取二进制的位置
for($i=0;$i<$count;$i++){
$pos = strpos($str,'1');//第一次位置
$str = substr($str,$pos+1);//新的str
if($i==0){
	$arr[] = $pos;
}else{
	$arr[] = (end($arr)+$pos+1);
}
	$newArr[] = pow(2,$strcount-end($arr)-1);
}
print_r($newArr);exit;
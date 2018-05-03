<?php 


//加密
 function encode32($num){
	 //32进制种子文件
	$seed = 'gdAcuEtmprfylwFzCnojiBsekhDqxavb';
	$res='';
	while ($num > 0 ) {
		$res = $seed[$num%32].$res;
		$num = floor($num/32);
	}

	//不够6位，前面补充0
	$res = str_pad($res,6,'0',STR_PAD_LEFT);

	return $res;
}


//解密
function decode32($bin){
	 //32进制种子文件
	$seed = 'gdAcuEtmprfylwFzCnojiBsekhDqxavb';

	//去除左边填充的数字0
	$bin = ltrim($bin,'0');
	$j = $len = strlen($bin);
	$res = 0;
	for($i=0;$i<$len;$i++){
		$num = strpos($seed, $bin{$i});
		$res += $num*pow(32, --$j);
	}

	return $res;
	
}

//加密
echo encode32(1256); //这时候获取加密后的6为字符串是 000dmp
//解密
echo decode32('000dmp'); //这时候获取解密后的数字是 1256
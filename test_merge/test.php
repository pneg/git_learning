<?php

$string = '{
    "appid":"1000258", 
    
     "limit":10,
    "page":1,
   "sign":"{{sign_value}}"
}';

$string = json_decode($string, true);

$input = addslashes ("%1$' or 1=1#" );
$b = sprintf ("AND b='%s'", $input );
$sql = sprintf ("SELECT * FROM t WHERE a='%s' $b ", 'admin' );
//对$input与$b进行了拼接
//$sql = sprintf ("SELECT * FROM t WHERE a='%s' AND b='%1$\' and 1=1#' ", 'admin' );
//很明显，这个句子里面的\是由addsashes为了转义单引号而加上的，使用%s与%1$\类匹配admin，那么admin只会出现在%s里，%1$\为空
echo  $sql ;

$sql="select * from user where username='%\' or 1=1 #';";
$user='admin';
echo sprintf($sql,$user);



$sting = "MAAC10 NMN 真正煙酰胺單核苷酸補充劑 (NMN 125 毫克膠囊)";

echo '=========';
 print_r(strlen($sting));
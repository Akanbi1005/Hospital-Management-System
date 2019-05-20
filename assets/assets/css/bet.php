<?php
/**
 * Created by PhpStorm.
 * User: Hollami
 * Date: 2/15/2019
 * Time: 12:31 PM
 */

$var1 = "2-2";
$var2 = "2-0";
$var3 = "0-1";
$var4 = "0-1";
$var5 = "4-4";

if ($var1&&$var2&&$var3 || $var3&&$var4&&$var5){
    echo "Congratulation you are a Winner";
}elseif ($var4&&$var3&&$var1 || $var5&&$var2&&$var1){
    echo "Congratulation you are a Winner";
}else{
    echo "Bet loss";
}
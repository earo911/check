<?php
require_once 'vendor/autoload.php';

use Earo911\Check\Check;

$isMail = Check::isEmail('abc@gmail.com');
if($isMail){
	echo 'It is a right mail address';
}else{
	echo 'It is a wrong mail address';
}
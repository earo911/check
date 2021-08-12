# check
PHP验证类



### 功能

* 验证email格式
* 验证网址
* 验证字符串中是否含有汉字
* 验证字符串中是否含有非法字符
* 验证邮证编码
* 验证身份证号码
* 验证IP地址
* 验证出版物的ISBN号
* 检查字符串是否为空
* 检查字符串长度
* 验证是否是微信浏览器
* 验证是否是支付宝浏览器
* 验证密码是否合规，字符串、数字至少包含两种



### 使用方法

```
<?php
require_once 'vendor/autoload.php';

use Earo911\Check\Check;

//check mail
$isMail = Check::isEmail('abc@gmail.com');
if($isMail){
	echo 'It is a right mail address';
}else{
	echo 'It is a wrong mail address';
}
```






## :+1: Php Super Globals varibale</br>
$_GET</br>
$_POST</br>
$_REQUEST </br>
$_SESSION</br>
A gula hossche super globa varibale In PHP.</br>

session_start()</br>
session_unset()</br>
session_destroy()</br>

$_session : session hossche akta super global variable..amara jodi session create na kori tahole ai session jakhe jakhe use kore hoyache shei page guli te jaite debo na.
session computer data store na kore server data store kore.. session prothi ti user janno unique number dei...r ai dei dara identified kore hoi.

:heart: :heart: :heart: :heart: :heart: :heart: PHP FILE :heart: :heart: :heart: :heart: :heart: :heart:<br>
## :+1: **PHP FILE**<br>
স্ট্রিং গুলি কে array তে কনভার্ট করার জন্য নিচে এই ফাঙ্কশন ব্যবহার করা হয়  <br>
**Syntax<br>**
:running: **explode(" ",$newArray((arrayname))** <br><br>
array গুলি কে স্ট্রিং কনভার্ট করার জন্য নিচে এই ফাঙ্কশন ব্যাবহার করা হয় <br>
**Syntax**<br>
:running: **implode(" ",$newArray((arrayname))**<br><br>
Array গুলি কে ইনডেক্সিং করার জন্য নিচে এই ফাঙ্কশন ব্যবহার করা হয় <br> 
**Syntax**<br>
:running: **array_slice($newArray,0,5)**<br>
0 থেকে শুরু করে ৪ পযন্ত ৪ object দেখাবে। <br>
সাধারণ একটা custom function তৈরি করলাম explode ও implode নিয়ে <br>
```php 
<?php
$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";

function readMore($content, $limit){
	global $content;
	$exCon = explode(" ", $content);
	$shortCon = array_slice($exCon,0,$limit);
	$content = implode(" ", $shortCon);
	return $content.".....";
}
echo readMore($content, 5);
?>
 

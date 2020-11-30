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
সাধারণ একটা custom function তৈরি করলাম explode ও implode ফাঙ্কশন নিয়ে <br>
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
```

### :smile:হিসেব করার জন্য আপনাকে কিছু বিষয় সম্পর্কে ধারনা রাখতে হবে।
- ১ জিবি=১০২৪ এমবি।
- ১ বাইট = ৮ বিট।
- ১ কিলোবাইট(kb) = ১০২৪ বাইট।
- ১ মেগাবাইট(mb) = ১০২৪ কিলোবাইট(kb)।
- ১ (গিগাবাইট) জিবি = ১০২৪ মেগাবাইট(mb)।

### :smile:কিভাবে ফাইল আপলোড করে হয় ফাইল সাইজ,ফাইল এক্সটেনশন চেক করতে হয় তা জানবো। <br>
প্রথমত ইনপুট ফাইল নিব এই ইনপুট ফাইলকে নির্দিষ্ট একটি ফোল্ডার রাখবো।এর জন্য আমাকে php function ব্যাবহার করবো <br>
**Syntax**<br>
:running: **move_uploaded_file(tmp_name, folder_name)**<br><br>
move_uploaded_file() ফাঙ্কশন টি ব্যাবহার করে নতুন একটা ফাইলে তৈরি করে সেখানে ইনপুট ফাইল টি জমা করব ।<br>
ফাইলের এক্সটেনশন চেক করার জন্য নিচে এই ফাঙ্কশন টি ব্যাবহার করে হয় <br>
**Syntax**<br>
:running: **pathinfo("/documents/gfg.txt", PATHINFO_EXTENSION)** <br>
এই ফাঙ্কশন ব্যাবহার করলে শুধু মাত্র ফাইলে এক্সটেনশন পাবো। <br>  









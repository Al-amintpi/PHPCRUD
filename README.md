## :+1: Php Super Globals varibale</br>
:white_check_mark:$_GET</br>
:white_check_mark:$_POST</br>
:white_check_mark:$_REQUEST </br>
:white_check_mark:$_SESSION</br>
:white_check_mark:$FILES<br>
এই গুলি হচ্ছে php সুপার গ্লোবাল ভ্যারিয়েবল </br>
session_start()</br>
session_unset()</br>
session_destroy()</br>
**SESSION** হচ্ছে একটি সুপার গ্লোবাল ভ্যারিয়েবল। আমরা যেখানে **SESSION** তৈরি করি **SESSION** সেই পেজে সফল ভাবে তৈরি না হয়ে প্রযন্ত অন্য সকল পেজে আথৎ যে পেজ গুলিতে **SESSION** ইমপোর্ট করে হয়েছে সেই পেজ গুলি তে পাবে না। বাংলা কথাই বলতে গেলে পেজ গুলি কে প্রবেশ করতে দেয় দিবে না।  session মেইন পেজ তৈরি হলে অন্যনো পেজ পাবে। session কম্পিউটার ডাটা স্টোরে করে না, **SESSION** সার্ভার ডাটা স্টোরে করে। **SESSION** প্রতিটি ইউসার কে **unique number** দেয় ,আর এই নাম্বার দ্বারা ইউসার গুলি কে **identified** করে হয় .<br><br>
:heart: :heart: :heart: :heart: :heart: :heart: PHP FILE :heart: :heart: :heart: :heart: :heart: :heart: <br>
## :+1: **PHP FILE**<br>
স্ট্রিং গুলি কে array তে কনভার্ট করার জন্য নিচে এই ফাঙ্কশন ব্যবহার করা হয় <br>
**Syntax**<br>
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
:running: **move_uploaded_file(tmp_name(file_name), folder_name)**<br>
move_uploaded_file() ফাঙ্কশন টি ব্যাবহার করে নতুন একটা ফাইলে তৈরি করে সেখানে ইনপুট ফাইল টি জমা করব ।<br><br>
ফাইলের এক্সটেনশন চেক করার জন্য নিচে এই ফাঙ্কশন টি ব্যাবহার করে হয় <br>
**Syntax**<br>
:running: **pathinfo("/documents/gfg.txt", PATHINFO_EXTENSION)** <br>
এই ফাঙ্কশন ব্যাবহার করলে শুধু মাত্র ফাইলে এক্সটেনশন পাবো। <br>
একটি ফাইলের নাম যে ভাবে পরিবতণ করবো। .যদি ফাইলের নাম পরিবতণ না করি তাহলে ফাইল গুলি replace হয়। তার জন্য আমাদেরকে ফাইল নতুন নাম বানাই নিবো। নিচের স্ট্রাকচার ফ্লো করার মাধমে করতে পারি <br>
**rand(100,10000).".".এক্সটেনশন;**<br>
**time().".".এক্সটেনশন;**<br>
**MD5(time()).".".এক্সটেনশন;**<br>
উপরের ফাঙ্কশন গুলি দিয়ে ফাইলের নাম পরিবতণ করানো যাই.<br>
```php
<?php

if(isset($_POST['upload_photo'])){
	$photo = $_FILES['profile'];
	$photo_name = $_FILES['profile']['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];
	$size = $_FILES['profile']['size'];
	print_r($photo);
	$extension = pathinfo($photo_name, PATHINFO_EXTENSION);

	if ($extension !='png' and $extension !='PNG' AND $extension !='JPG' AND $extension !='jpg' and $extension !='jpeg' and $extension !='jpeg' and $extension !='gif' and $extension !='GIF') {
		 echo("<p style='color:red'> Please Right file type </p>");
	}else if($size >= 1048576){
			echo("<p style='color:red'>File too large. File must be less than 1 megabytes </p>");
	}
	else{
		$new_name = time().".".$extension;
		$move = move_uploaded_file($tmp_name, 'images/'.$new_name);
		if($move == true){
			echo "uploaded successfully";
		}
	}

}
 
?>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="profile"><br><br>
	<input type="submit" name="upload_photo">
</form>
```










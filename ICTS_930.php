<?php
ob_start();
$admin = '6920192910'; //ايدي
$Channel = file_get_contents("chanel.txt");
$adsk = file_get_contents("ads.txt");
if($adsk==null){
	$adsk="adsi";
	}
$API_KEY = "7445056416:AAHBTrhiFBIaWgh4UqTLZu8G75t9JRBmim4"; // توكن
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){$JJJ22J = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$JJJ22J";
$JJJ22Jjson = file_get_contents($url); return json_decode($JJJ22Jjson);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;

$JJJ22J = file_get_contents("JJJ22J.txt");
$JJJ22J0 = file_get_contents("JJJ22J0.txt");
$JJJ22J1= file_get_contents("JJJ22J1.txt");
$JJJ22J5 = file_get_contents("JJJ22J2.txt");
$JJJ22J6 = file_get_contents("JJJ22J3.txt");
$JJJ22J20 = json_decode(file_get_contents('php://input'));
$JJJ22J18 = $update->message;
$chat_id = $JJJ22J18->chat->id;
$text = $JJJ22J18->text;
$data = $JJJ22J20->callback_query->data;
$JJJ22J12 = $JJJ22J20->callback_query->message->chat->id;
$JJJ22J14 =  $JJJ22J20->callback_query->message->message_id;
$JJJ22J15 = $JJJ22J18->from->first_name;
$JJJ22J16 = $JJJ22J18->from->username;
$JJJ22J11 = $JJJ22J18->from->id;
$nms = file_get_contents("namesuper.txt");
$urlsuper = file_get_contents("urlsuper.txt");

if($nms == null){
	$nms = "سوبر ماركت الكبراء #1";
	}
	
	if($urlsuper == null){
	$urlsuper = "https://t.me/+rhXdlq2t07szNGQy";
	}
$JJJ22J2 = explode("\n",file_get_contents("JJJ22J4.txt"));
$JJJ22J3 = count($JJJ22J2)-1;
if ($JJJ22J18 && !in_array($JJJ22J11, $JJJ22J2)) {
    file_put_contents("JJJ22J4.txt", $JJJ22J11."\n",FILE_APPEND);
  }

if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$inbotuser = bot('getme',['bot'])->result->username;
$message_id = $up->message->message_id;
$data = $up->data;
}

if($text == '/start' && $chat_id == $admin){
    file_put_contents($chat_id,'');
    file_put_contents($chat_id,'');
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*
اهلا عزيز الادمن
*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'فتح اعلانات' ,'callback_data'=>"open"]],
[['text'=>'قفل اعلانات' ,'callback_data'=>"qufl"]],
[['text'=>'تعين معرف قناة الاعلانات' ,'callback_data'=>"setcha"]],
[['text'=>'تعين السوبر اسم ورابط' ,'callback_data'=>"superchng"]],
] 
   ])
    ]);
}

if($text == '/start'){
    file_put_contents($chat_id,'');
    file_put_contents($chat_id,'');
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"

💎|مرحبا بك ، [$name](tg://user?id=$from_id)

✅|في بوت المساعدة 
💯| اختر القسم الذي تحتاجه من الاسفل

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قسم الاعلانات' ,'callback_data'=>$adsk]],
[['text'=>'قسم الوساطه' ,'callback_data'=>"help"]],
[['text'=>'- التواصل مع الادارة .' ,'callback_data'=>"sendadmins"]],
] 
   ])
    ]);
}


if($data == 'open' && $chat_id == $admin){
	$adsk = file_get_contents("ads.txt");
if($adsk==null){
	$adsk="adsi";
	}
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- تم الفتح بنجاح ✅",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    for ($i=0; $i < count($JJJ22J2); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$JJJ22J2[$i],
      'text'=>"عزيزي تم فتح النشر يمكنك ارسال اعلانك 📣",
      'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- نشر اعلاني .' ,'callback_data'=>$adsk]],
]
        ])
    ]);
  }
    file_put_contents("ads.txt",'sendads');
}

if($data == 'qufl' && $chat_id == $admin){
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"تم القفل بنجاح",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    file_put_contents("ads.txt","adsi");
}
$SeroBotsget = file_get_contents($chat_id);

if($data == 'adsi'){
	if($adsk == "adsi") {
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"عزيزي :  [$name](tg://user?id=$from_id)
📣 النشر مقفول حاليا  
🔷 يمكنك ارسال طلب فتح النشر من اسفله",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'طلب فتح النشر' ,'callback_data'=>"sendtoad"]],
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);

}
}


if($data == 'sendtoad'){
	
	bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"
        *
تم ارسال طلب فتح النشر سيصلك اشعار عند فتح النشر 🧩

 يمكنك ايضا نشر اعلانك في المجموعة 🎪
 *
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$nms ,'url'=>$urlsuper]],
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"

طلب فتح اعلان جديد
[$name](tg://user?id=$from_id2)

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- فتح الاعلانات' ,'callback_data'=>"open"]],
] 
   ])
    ]);
}

if($data == 'setcha' && $chat_id == $admin){
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- قم بارسال معرف القناة",
        'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    file_put_contents($admin,'setch');
}
$SeroBotsget = file_get_contents($chat_id);
if($text and $SeroBotsget == 'setch'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم التعين ينجاح تأكد من رفع البوت مشرف بلقناة",
    ]);
    file_put_contents("chanel.txt",$text);
}


if($data == 'superchng' && $chat_id == $admin){
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- قم بارسال الاسم والرابط بالشكل هذا

اسم السوبر
رابط السوبر

مثال

`
سوبر ماركت الكبراء
https://t.me/+rhXdlq2t07szNGQy
`
",
        'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    file_put_contents($admin,'setsuper');
}
$setsuper = explode("\n",$text);
$SeroBotsget = file_get_contents($chat_id);
if($text and $SeroBotsget == 'setsuper'){
if($setsuper[0] !== null and $setsuper[1] !== null){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم التعين بنجاح
اسم السوبر : $setsuper[0]
رابط السوبر : $setsuper[1]
",
    ]);
    file_put_contents("namesuper.txt",$setsuper[0]);
    file_put_contents("urlsuper.txt",$setsuper[1]);
}
}

if($data == 'sendads'){
	if($adsk == "sendads") {
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- حسنا عزيزي قم بأرسال اعلانك الان .",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    file_put_contents($chat_id,'sendads');
}
}
$SeroBotsget = file_get_contents($chat_id);
if($text and $SeroBotsget == 'sendads'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم ارسال اعلانك لادمنية القناة انتظر الموافقة .",
    ]);
    file_put_contents($chat_id,'');
    file_put_contents("$chat_id.txt",$text);
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"- الاعلان . 
$text ",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- قبول .' ,'callback_data'=>"/Accept @$chat_id"],['text'=>'- رفض .' ,'callback_data'=>"/No @$chat_id"]],
        [['text'=>'- صاحب الاعلان .','url'=>"tg://user?id=$chat_id"]],
    ] 
   ])
    ]);
}
if(preg_match('/Accept @/', $data )) { 
    $ex = explode('/Accept @',$data)[1]; 
    $SeroBotsads = file_get_contents("$ex.txt");
    bot('sendMessage',[
        'chat_id'=>"@$Channel",
        'text'=>"$SeroBotsads",
    ]);
    bot('sendMessage',[
        'chat_id'=>$ex,
        'text'=>"- تم قبول + نشر الاعلان .",
    ]);
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- تم قبول + نشر الاعلان .",
    ]);
}
if(preg_match('/No @/', $data )) { 
    $ex = explode('/No @',$data)[1]; 
    bot('sendMessage',[
        'chat_id'=>$ex,
        'text'=>"- تم رفض الاعلان .",
    ]);
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- تم رفض الاعلان .",
    ]);
}
if($data == 'sendadmins'){
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- حسنا عزيزي ارسل رسالتك وسيتم ارسالها الى ادمنية القناة .",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    file_put_contents($chat_id,'sendadmins');
}
$SeroBotsgett = file_get_contents($chat_id);
if($text and $SeroBotsgett == 'sendadmins'){
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"- الرسالة هي => $text",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",
        'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رد .' ,'callback_data'=>"/Replay @$chat_id"],['text'=>'- صاحب الرسالة .','url'=>"tg://user?id=$chat_id"]],
]
        ])
    ]);
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم ارسال رسالتك الى الادمنية انتظر الرد .",
    ]);
    file_put_contents($chat_id,'');
}
if(preg_match('/Replay @/', $data )) { 
    $ex = explode('/Replay @',$data)[1]; 
    file_put_contents('SeroBotssendd','sendmess');
    file_put_contents('SeroBotsid',$ex);
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"- حسنا عزيزي الادمن قم بأرسال الرد الان .",
    ]);
}
$SeroBotsgt = file_get_contents('SeroBotssendd');
$SeroBotsidd = file_get_contents('SeroBotsid');
if($text and $chat_id == $admin and $SeroBotsgt == 'sendmess'){
    bot('sendMessage',[
        'chat_id'=>$SeroBotsidd,
        'text'=>$text,
    ]);
    file_put_contents('SeroBotssendd','');
    file_put_contents('SeroBotsid','');
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"- تم ارسال الرد بنجاح .",
    ]);
}
if($data == 'help'){
    bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id2,
        'text'=>"
💎|مرحباً بك ، [$name](tg://user?id=$from_id)

✅|في قسم الوساطة فقط قم بانشاء مجموعة وارسل رابط المجموعة هنا
",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'- رجوع .' ,'callback_data'=>"Backk"]],
]
        ])
    ]);
    file_put_contents($chat_id,'wasit');
}

if($text and $SeroBotsgett == 'wasit'){
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"
        رابط سوبر جديد مرسل
        $text
        ",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",
    ]);
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم ارسال رابطك الى الوسطاء سيأتي وسيط في اقرب وقت  ✅
",
    ]);
    file_put_contents($chat_id,'');
}

if($data == 'Backk'){
    file_put_contents($chat_id,'');
    file_put_contents($chat_id,'');
    bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
'text'=>"

💎|مرحبا بك ، [$name](tg://user?id=$from_id)

✅|في بوت المساعدة 
💯| اختر القسم الذي تحتاجه من الاسفل

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قسم الاعلانات' ,'callback_data'=>$adsk]],
[['text'=>'قسم الوساطه' ,'callback_data'=>"help"]],
[['text'=>'- التواصل مع الادارة .' ,'callback_data'=>"sendadmins"]],
] 
   ])
    ]);
}
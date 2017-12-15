<?php
/*
Code by :- #Victor - #Tshake
Ch :- @TshAkETeam #1
*/
ob_start();
$API_KEY = '300550289:AAGC4qUOK1GPCcpkLLPqIT4eECO5jOwC-Hk'; #توكن البوت
$sudo = array(141419469,141419469,141419469); #ايدي المطورين
$bot_id = 300550289; #ايدي البوت
$botuser = '@Bestlistabot'; #معرف البوت
$chname = "- زوامل انصار الله ⚜️ -";
$churl ="https://t.me/zawamlansarallah";
$photo = "https://a.top4top.net/p_671h2vl11.jpg";
//////////////////////
$awmr = array("/done","/start","/mark","/list");
$warnch = file_get_contents("warnch.txt");
$listchsh = "t.me/zawamlansarallah";
$listbtntext = "- يمكنك ارسال زر اخر 🔢،
- عنده الانتهاء 🔽،";
$posttext = "- تم النشر ✅،
- لحذف الرساله من القنوات 🔽،";
$listtext = "- الان يمكنك ارسال ازرار اللسته كمثال 🔽،
text = link
text = link - text = link";
$waspmedia = "- الان يمكنك ارسال الوصف 📄،
- يجب ان يكون اقل من ٢٠٠ حرف 🔡،";
$addchtext = "- تم اضافه القناة الى الدعم ✅،
- يرجئ رفع البوت ادمن في القناة 🔰،";
$addchtext1 = "- القناة مضيوفه الى الدعم مسبقا ❎ ،";
$postcodetext = "- لنشر الكود الخاص بالسته 🔼،";
$postinlintext = "- لنشر اللسته 🔱،";
$posttshaketest = "- All rights reserved to channel Tshake,";
$warnchtext = "- القنوات المخالفه هيه 🔽،";
$delchtext = "- القناة محذوفه من الدعم مسبقا ❎ ،";
$delchtext1 = "- تم حذف القناة من الدعم ✅ ،";
//////////////////////
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
if (!file_exists("codes.php")) {
  file_put_contents("codes.php", '<?php
  $v = 1;');}
//////////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$id = $message->from->id;
$messid = $message->message_id;
$type = $update->message->chat->type;
$from_id = $message->from->id;
$name = $message->from->first_name;
if($text){mkdir("json");mkdir("userls");mkdir("userls/$from_id");}
$p3 = $update->message->photo[3]->file_id;
$p2 = $update->message->photo[2]->file_id;
$p1 = $update->message->photo[1]->file_id;
$p0 = $update->message->photo[0]->file_id;
$st = $update->message->sticker->file_id;
$vd = $update->message->video->file_id;
$vo = $update->message->voice->file_id;
$fi = $update->message->document->file_id;
$mu = $update->message->audio->file_id;
$str = str_shuffle('tshakevictordevil20');
$md5 = md5($str);
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$inline = $update->inline_query->query;
$cq = $update->callback_query;
$idc = $cq->from->id;
$stepk = file_get_contents("userls/$from_id/step.txt");
$code = file_get_contents("userls/$from_id/code.txt");
$stcod = file_get_contents("userls/$from_id/stecode.txt");
$stepsend = file_get_contents("userls/$from_id/stepsend.txt");
$r = rand(10000,99999);
include "codes.php";
$al= explode("\n", $text);$la0 = $al[0];$la1 = $al[1];$la2 = $al[2];$la3 = $al[3];$la4 = $al[4];$la5 = $al[5];$la6 = $al[6];$la7 = $al[7];$la8 = $al[8];$la9 = $al[9];$la10 = $al[10];$la11 = $al[11];$la12 = $al[12];$la13 = $al[13];$la14 = $al[14];$la15 = $al[15];$la16 = $al[16];$la17 = $al[17];$la18 = $al[18];$la19 = $al[19];$la20 = $al[20];$la21 = $al[21];$la22 = $al[22];$la23 = $al[23];$la24 = $al[24];$la25 = $al[25];$la26 = $al[26];$la27 = $al[27];$la28 = $al[28];$la29 = $al[29];$la30 = $al[30];
$repl = file_get_contents('warnch.txt');
if($text == '/ochw' && in_array($from_id,$sudo) and $repl !== 'on' ){
file_put_contents('warnch.txt','on');
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- تم تفعيل ارسال المخالفات عنده النشر،",'reply_to_message_id'=>$messid,]);}
if($text == '/ochw' && in_array($from_id,$sudo) and $repl == 'on'){
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- ارسال المخالفات عنده النشر مفعله،",'reply_to_message_id'=>$messid,]);}
if($text == '/cchw'  && in_array($from_id,$sudo) and $repl == 'on'){
file_put_contents("warnch.txt",'off');
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- تم تعطيل ارسال المخالفات عنده النشر،",'reply_to_message_id'=>$messid,]);}
if($text == '/cchw' && in_array($from_id,$sudo) and $repl == 'off'){
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- ارسال المخالفات عنده النشر معطله،",'reply_to_message_id'=>$messid,]);}
if($inline && preg_match('/(mkl_)(.*)/',$inline)){
$st1 = str_replace(array("kl","_"),'',$inline);
$st2 = str_replace(array("m","l_"),'',$inline);
$st3 = str_replace(array("mk","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type'=>'photo',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'photo_file_id'=>$$st1,
'caption'=>$$st2,
'reply_markup'=>['inline_keyboard'=>$$st3]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
//////////
if($inline && preg_match('/(sl_)(.*)/',$inline)){
$st1 = str_replace(array("l","_"),'',$inline);
$st2 = str_replace(array("s","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type'=>'sticker',
'id'=>base64_encode(rand(5,555)),
'sticker_file_id'=>$$st1,
'reply_markup'=>['inline_keyboard'=>$$st2]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
//////
if($inline && preg_match('/(kl)(.*)$/',$inline)){
$st1 = str_replace("l_",'',$inline);
$st2 = str_replace(array("k","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
 'cache_time'=>1,
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'input_message_content'=>['parse_mode'=>'markdown','message_text'=>$$st1,'disable_web_page_preview'=>true],           'reply_markup'=>['inline_keyboard'=>$$st2]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
///////////
if($inline && preg_match('/(vkl_)(.*)/',$inline)){
$st1 = str_replace(array("kl","_"),'',$inline);
$st2 = str_replace(array("v","l_"),'',$inline);
$st3 = str_replace(array("vk","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,
'results'=>json_encode([[
'type'=>'voice',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'voice_file_id'=>$$st1,
'caption'=>$$st2,
'reply_markup'=>['inline_keyboard'=>$$st3]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
//////////
if($inline && preg_match('/(dkl)(.*)/',$inline)){
$st1 = str_replace(array("k","l_"),'',$inline);
$st2 = str_replace(array("d","l_"),'',$inline);
$st3 = str_replace(array("dk","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type'=>'video',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'video_file_id'=>$$st1,
'caption'=>$$st2,
'reply_markup'=>['inline_keyboard'=>$$st3]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
if($inline && preg_match('/(ukl_)(.*)/',$inline)){
$st1 = str_replace(array("k","l_"),'',$inline);
$st2 = str_replace(array("u","l_"),'',$inline);
$st3 = str_replace(array("uk","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type'=>'audio',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'audio_file_id'=>$$st1,
'caption'=>$$st2,
'reply_markup'=>['inline_keyboard'=>$$st3]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
if($inline && preg_match('/(fkl_)(.*)/',$inline)){
$st1 = str_replace(array("kl","_"),'',$inline);
$st2 = str_replace(array("f","l_"),'',$inline);
$st3 = str_replace(array("fk","_"),'',$inline);
bot('answerInlineQuery',[
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type'=>'document',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'document_file_id'=>$$st1,
'caption'=>$$st2,
'reply_markup'=>['inline_keyboard'=>$$st3]],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}
if($inline && preg_match("/(k_)(.*)$/",$inline)){
$st1 = str_replace("_",'',$inline);
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"$postinlintext",
'input_message_content'=>['parse_mode'=>'markdown','message_text'=>$$st1,'disable_web_page_preview'=>true],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$postcodetext",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "$inline"],],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title' => "$posttshaketest",
'thumb_url'=>"$photo",
'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "- جميع الحقوق محفوضه لقناه ،
ـ [TshAkETeaM](t.me/zawamlansarallah) ،",'disable_web_page_preview'=>true],]])]);}

/////////////////////
if((preg_match('/(")/', $text) or preg_match("/(')/", $text))){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"- عذرا صديقي ❗️،
- لا يمكنك استخدام [ ' ] في النص،
- لانها تستخدم في البرمجه،
- ولا تستخدم في الجمل :)."
]);
file_put_contents("userls/$from_id/step.txt","nono");
}
if(preg_match('/(addch)/',$data)){
file_put_contents("userls/$idc/addch.txt","on");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- يمكنك الان ارسال 🔽؛
- ايدي القناة 🆔؛
- معرف القناة ✳️؛
- توجيه من القناة ↪️؛
- عنده الانتهاء اضغط 🔽؛",
'parse_mode'=>'html',
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if($data == "delallch"){
$open = file_get_contents("idch.txt");
$ste = str_replace('', $open);
file_put_contents("idch.txt", $ste);
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- تم حذف جميع القنوات المضافه في الدعم ✅ -",
'parse_mode'=>'HTML',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
$addchs = file_get_contents("userls/$from_id/addch.txt");
$delchs = file_get_contents("userls/$from_id/delch.txt");
$idch = file_get_contents("idch.txt");
$idchll = explode("\n",$idch);
if($text && $addchs == "on" && in_array($from_id, $sudo)){
if($text && preg_match('/(-)/',$text)&& in_array($text, $idchll)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$addchtext1",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]); }
elseif($text && preg_match('/(-)/',$text)&& !in_array($text, $idchll)){
 $add_gpus .= $text."\n";
file_put_contents("idch.txt", "\n" . $add_gpus, FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$addchtext",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
$getidch = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"); 
$jsidch = json_decode($getidch);
$residch = $jsidch->result; 
$idadch = $residch->id; 
if($text && preg_match('/(@)/',$text)&& in_array($idadch, $idchll)) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$addchtext1",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
elseif($text && preg_match('/(@)/',$text) && !in_array($idadch, $idchll)) {
$add_gpus .= $idadch."\n";
file_put_contents("idch.txt", "\n" . $add_gpus, FILE_APPEND);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$addchtext",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
$fwad = $update->message->forward_from_chat->id;
if($fwad && in_array($fwad, $idchll)){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$addchtext1",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if($fwad && !in_array($fwad, $idchll)){
$add_gpus .= $fwad."\n";
file_put_contents("idch.txt", "\n" . $add_gpus, FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$addchtext",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}}
if(preg_match('/(delch)/',$data)){
file_put_contents("userls/$idc/delch.txt","on");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- يمكنك الان ارسال 🔽؛
- ايدي القناة 🆔؛
- معرف القناة ✳️؛
- توجيه من القناة ↪️؛ لحذف القناة من الدعم؛
- عنده الانتهاء اضغط 🔽؛",
'parse_mode'=>'html',
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if($text && $delchs == "on" && in_array($from_id, $sudo)){
if($text && preg_match('/(-)/',$text)&& !in_array($text, $idchll)) {

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$delchtext",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
elseif($text && preg_match('/(-)/',$text)&& in_array($text, $idchll)){
$open = file_get_contents("idch.txt");
$ste = str_replace($text,'', $open);
file_put_contents("idch.txt", $ste);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$delchtext1",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
$getidchr = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"); 
$jsidchr = json_decode($getidchr);
$residchr = $jsidchr->result; 
$idadchr = $residchr->id;
if($text && preg_match('/(@)/',$text) && in_array($text, $idchll)) {
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$delchtext",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if($text && preg_match('/(@)/',$text) && !in_array($text, $idchll)) {
$open = file_get_contents("idch.txt");
$ste = str_replace($idadchr, '', $open);
file_put_contents("idch.txt", $ste);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$delchtext1",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if($fwad && !in_array($fwad, $idchll)){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$delchtext",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);}
if($fwad && in_array($fwad, $idchll)){
$open = file_get_contents("idch.txt");
$ste = str_replace($fwad,'', $open);
file_put_contents("idch.txt", $ste);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$delchtext1",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);}}
$step4 = file_get_contents("userls/$from_id/sendk.txt");
if(preg_match('/(sendc)/',$data)){
file_put_contents("userls/$idc/code.txt","$md5");
file_put_contents("userls/$idc/sendk.txt","sendlista");

bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- الان ارسل الكود الذي تريد ارساله الى القنوات المضافه ✳ -",
'parse_mode'=>'html',
'reply_to_message_id'=>$messid,'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if($step4 == "sendlista"){
$al= explode(" ", $text);
$la0 = $al[0];
$la1 = $al[1];
$la2 = $al[2];
$la3 = $al[3];
if(preg_match("/^(kl_)(.*)$/",$text) && in_array($from_id, $sudo)) {
$st1 = str_replace("l_",'',$text);
$st2 = str_replace(array("k","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendMessage?chat_id=".$idchl[$c]."&parse_mode=markdown&disable_web_page_preview=true&text=".urlencode($$st1)."&reply_markup=".json_encode(["inline_keyboard"=>$$st2]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(vkl_)(.*)$/",$text) &&  in_array($from_id, $sudo)) {
$st1 = str_replace(array("kl","_"),'',$text);
$st2 = str_replace(array("v","l_"),'',$text);
$st3 = str_replace(array("vk","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendvoice?chat_id=".$idchl[$c]."&voice=".$$st1."&caption=".urlencode($$st2)."&reply_markup=".json_encode(["inline_keyboard"=>$$st3]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(dkl_)(.*)$/",$text) && in_array($from_id, $sudo)) {
$st1 = str_replace(array("k","l_"),'',$text);
$st2 = str_replace(array("d","l_"),'',$text);
$st3 = str_replace(array("dk","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendvideo?chat_id=".$idchl[$c]."&video=".$$st1."&caption=".urlencode($$st2)."&reply_markup=".json_encode(["inline_keyboard"=>$$st3]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(ukl_)(.*)$/",$text) && in_array($from_id, $sudo)) {
    $st1 = str_replace(array("k","l_"),'',$text);
$st2 = str_replace(array("u","l_"),'',$text);
$st3 = str_replace(array("uk","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendAudio?chat_id=".$idchl[$c]."&audio=".$$st1."&caption=".urlencode($$st2)."&reply_markup=".json_encode(["inline_keyboard"=>$$st3]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(fkl_)(.*)$/",$text) && in_array($from_id, $sudo)) {
    $st1 = str_replace(array("kl","_"),'',$text);
$st2 = str_replace(array("f","l_"),'',$text);
$st3 = str_replace(array("fk","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."SendDocument?chat_id=".$idchl[$c]."&document=".$$st1."&caption=".urlencode($$st2)."&reply_markup=".json_encode(["inline_keyboard"=>$$st3]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(k_)(.*)$/",$text) && in_array($from_id, $sudo)) {
    $st1 = str_replace("_",'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendMessage?chat_id=".$idchl[$c]."&parse_mode=markdown&disable_web_page_preview=true&text=".urlencode($$st1);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}
if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(mkl_)(.*)$/",$text) && in_array($from_id, $sudo)) {
    $st1 = str_replace(array("kl","_"),'',$text);
$st2 = str_replace(array("m","l_"),'',$text);
$st3 = str_replace(array("mk","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendphoto?chat_id=".$idchl[$c]."&photo=".$$st1."&caption=".urlencode($$st2)."&reply_markup=".json_encode(["inline_keyboard"=>$$st3]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}
if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}
if(preg_match("/^(sl_)(.*)$/",$text) && in_array($from_id, $sudo)) {
    $st1 = str_replace(array("l","_"),'',$text);
$st2 = str_replace(array("s","_"),'',$text);
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."SendSticker?chat_id=".$idchl[$c]."&sticker=".$$st1."&reply_markup=".json_encode(["inline_keyboard"=>$$st2]);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}
if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]]])]);
file_put_contents("userls/$from_id/sendk.txt","nono");}}
if($data == "fwds"&& in_array($idc, $sudo)) {
file_put_contents("userls/$idc/code.txt","$md5");
file_put_contents("userls/$idc/sendk.txt","fortoall");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- الان ارسل الكليشه التي تريد توجيها الى القنوات المضافه ✳️ -",
'reply_to_message_id'=>$messid,
'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);}

elseif($step4 == 'fortoall' && in_array($from_id, $sudo)) {
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($u=0;$u<count($idchl); $u++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."forwardMessage?chat_id=".$idchl[$u]."&from_chat_id=".$chat_id."&message_id=".$messid."";
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);file_put_contents("userls/$from_id/sendk.txt","none");}

if ($data == 'klss') {
file_put_contents("userls/$idc/code.txt","$md5");
file_put_contents("userls/$idc/sendk.txt","sendallm");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- الان ارسل الكليشه التي تريد ارسالها الى القنوات المضافه ✳️ -",
'parse_mode'=>'html',
'reply_to_message_id'=>$messid,'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);}
elseif($step4 == 'sendallm' && in_array($from_id, $sudo)) {
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendMessage?chat_id=".$idchl[$c]."&disable_web_page_preview=true&text=".urlencode($text);
$se = file_get_contents($url); 
$messageResponse = json_decode($se, true);
$lastMessages[] = $messageResponse;
file_put_contents("json/$code.json","");
file_put_contents("json/$code.json", json_encode($lastMessages));}if($warnch == 'on'){
$chid = file_get_contents('idch.txt');
$idch = explode("\n", $chid);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$warnchtext",'parse_mode'=>'MarkDown','reply_to_message_id'=>$messid,]);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url); $res = $js->result->status;
if($res !== 'administrator'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$idch[$c],]);}}}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$code",
'reply_to_message_id'=>$messid,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$posttext",
'reply_to_message_id'=>$messid,
'reply_markup'=>json_encode(["inline_keyboard"=>[
[['text'=>'- اضغط هنا ⏺،','callback_data'=>"$code co"]]
]])]);file_put_contents("userls/$from_id/sendk.txt","none");}
if(preg_match('/( co)/',$data)){
$ex = explode(" co",$data);
$lastMessagesDump = file_get_contents("json/$ex[0].json");
$lastMessages = json_decode($lastMessagesDump, true);
foreach ($lastMessages as $Message) {
$messageChatId = $Message['result']['chat']['id'];
$messageId = $Message['result']['message_id'];
bot('deletemessage',[
'chat_id' => $messageChatId,
'message_id' =>$messageId,]);
echo (5);}
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- تم حذف الرساله من القنوات ✅،",]);
sleep(1);unlink("json/$ex[0].json");}
//////////////////////
if(preg_match('/(list)/',$data)){
file_put_contents("userls/$idc/code.txt","$r$idc");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- الان يمكنك ارسال احد الميديا 🔢،
- صوره ، فديو ، بصمه ، ملف ،
- صوره متحركه , mp3 ، 
- ويمكنك ارسال نص .",
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);
file_put_contents("userls/$idc/step.txt","newlist");
}
if($stepk == "newlist" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
if($text){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";'
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,
'disable_web_page_preview'=>true,'parse_mode'=>"markdown",]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlisttext");}
elseif($message->photo){
if($p3){
file_put_contents("codes.php",
'$m'.$code.' = "'.$p3.'";'
,FILE_APPEND);}
elseif ($p2){
file_put_contents("codes.php",
'$m'.$code.' = "'.$p2.'";'
,FILE_APPEND);}
elseif ($p1){
file_put_contents("codes.php",
'$m'.$code.' = "'.$p1.'";'
,FILE_APPEND);}
elseif ($p0){
file_put_contents("codes.php",
'$m'.$code.' = "'.$p0.'";'
,FILE_APPEND);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$waspmedia",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","headp");}
elseif($message->sticker){
 if($st){
file_put_contents("codes.php",
'$s'.$code.' = "'.$st.'";'
,FILE_APPEND);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlists");}
elseif($message->document){
 if($fi){
file_put_contents("codes.php",
'$f'.$code.' = "'.$fi.'";'
,FILE_APPEND);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$waspmedia",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","headf");}
elseif($message->voice){
 if($vo){
file_put_contents("codes.php",
'$v'.$code.' = "'.$vo.'";'
,FILE_APPEND);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$waspmedia",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","headv");}
elseif($message->video){
 if($vd){
file_put_contents("codes.php",
'$d'.$code.' = "'.$vd.'";'
,FILE_APPEND);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$waspmedia",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","headd");}
elseif($message->audio){
 if($mu){
file_put_contents("codes.php",
'$u'.$code.' = "'.$mu.'";'
,FILE_APPEND);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$waspmedia",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","headu");}}
if($text && $stepk == "headp" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";'
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlistp");}
if($text && $stepk == "headf" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";'
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlistf");}
if($text && $stepk == "headv" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";'
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlistv");}
if($text && $stepk == "headd" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";'
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlistd");}
if($text && $stepk == "headu" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false && (in_array($text,$awmr))==false){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";'
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$listtext",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,]);
file_put_contents("userls/$from_id/step.txt","stlist");
file_put_contents("userls/$from_id/stecode.txt","stlistu");}
$listbtn = file_get_contents("userls/$idc/list.txt");
if($stepk == "stlist" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
    $al= explode("\n", $text);
for($i=0;$i<count($al);$i++){ 
if(preg_match("/( = )/",$al[$i]) && ! preg_match("/( - )/",$al[$i])){
$ex= explode(" = ", $al[$i]);
file_put_contents("userls/$from_id/list.txt",'
[["text"=>"'.$ex[0].'", "url"=>"'.$ex[1].'"]],',FILE_APPEND);}
$count = substr_count($al[$i],'-');
if(preg_match("/( = )/",$al[$i]) && preg_match("/( - )/",$al[$i])){
    $ex1 = str_replace(array("=","-"),"",$al[$i]);
$ex = explode("  ",$ex1);
if($count == 1){
file_put_contents("userls/$from_id/list.txt",'
[["text"=>"'.$ex[0].'", "url"=>"'.$ex[1].'"],["text"=>"'.$ex[2].'", "url"=>"'.$ex[3].'"]],',FILE_APPEND);}
if($count == 2){
file_put_contents("userls/$from_id/list.txt",'
[["text"=>"'.$ex[0].'", "url"=>"'.$ex[1].'"],["text"=>"'.$ex[2].'", "url"=>"'.$ex[3].'"],["text"=>"'.$ex[4].'", "url"=>"'.$ex[5].'"]],',FILE_APPEND);}
if($count == 3){
file_put_contents("userls/$from_id/list.txt",'
[["text"=>"'.$ex[0].'", "url"=>"'.$ex[1].'"],["text"=>"'.$ex[2].'", "url"=>"'.$ex[3].'"],["text"=>"'.$ex[4].'", "url"=>"'.$ex[5].'"],["text"=>"'.$ex[6].'", "url"=>"'.$ex[7].'"]],',FILE_APPEND);}
if($count == 4){
file_put_contents("userls/$from_id/list.txt",'
[["text"=>"'.$ex[0].'", "url"=>"'.$ex[1].'"],["text"=>"'.$ex[2].'", "url"=>"'.$ex[3].'"],["text"=>"'.$ex[4].'", "url"=>"'.$ex[5].'"],["text"=>"'.$ex[6].'", "url"=>"'.$ex[7].'"],["text"=>"'.$ex[8].'", "url"=>"'.$ex[9].'"]],',FILE_APPEND);
}
if($count == 5){
file_put_contents("userls/$from_id/list.txt",'
[["text"=>"'.$ex[0].'", "url"=>"'.$ex[1].'"],["text"=>"'.$ex[2].'", "url"=>"'.$ex[3].'"],["text"=>"'.$ex[4].'", "url"=>"'.$ex[5].'"],["text"=>"'.$ex[6].'", "url"=>"'.$ex[7].'"],["text"=>"'.$ex[8].'", "url"=>"'.$ex[9].'"],["text"=>"'.$ex[10].'", "url"=>"'.$ex[11].'"]],',FILE_APPEND);}
}}
    $listbtn = file_get_contents("userls/$from_id/list.txt");
    $code = file_get_contents("userls/$from_id/code.txt");
file_put_contents('codes.php','

$l'.$code.' = (['.$listbtn.']);',FILE_APPEND);
if($stcod !== "stlistp" && $stcod !== "stlists" && $stcod !== "stlistf" && $stcod !== "stlistv" && $stcod !== "stlistd"  && $stcod !== "stlistu"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser kl_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid, 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])
]);}
if($stcod == "stlistp"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser mkl_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])
]);}
if($stcod == "stlists"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser sl_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])
]);}
if($stcod == "stlistf"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser fkl_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])]);}
if($stcod == "stlistv"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser vkl_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])]);}
if($stcod == "stlistd"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser dkl_$code",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])]);
}
if($stcod == "stlistu"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"`$botuser ukl_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])]);
}
file_put_contents("userls/$from_id/list.txt",'');
file_put_contents("userls/$from_id/stecode.txt","nono");
file_put_contents("userls/$from_id/step.txt","nono");}
if(preg_match('/(lnk)/',$data)){
file_put_contents("userls/$idc/code.txt","$r$idc");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- الان ارسل النك ❇️،
- [كيفيه عمل مارك]($listchsh) ⚜،",'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);file_put_contents("userls/$idc/step.txt","mark");}
if($text && $stepk == "mark" && (preg_match("/(')/", $text) or preg_match('/(")/', $text))==false && (in_array($text,$awmr))==false){
file_put_contents("codes.php",
'$k'.$code.' = "'.$text.'";' 
,FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"`$botuser k_$code`",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- صنع كود جديد ⚜️،", "callback_data"=>"newcode"]],]])]);file_put_contents("userls/$from_id/step.txt","nono");}
$idpp= file_get_contents("userls/ides.txt");
if ($text == "/id" && in_array($from_id, $sudo)) {
file_put_contents("userls/ides.txt","idch");
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"- الان يمكنك عمل توجيه من القناة ↪️،",
'reply_to_message_id'=>$messid,]);}
elseif($update->message->forward_from_chat->id && $idpp == 'idch') {
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>$update->message->forward_from_chat->id,'parse_mode'=>'markdown','reply_to_message_id'=>$messid,]);file_put_contents("userls/ides.txt","nono");}
$strid = str_replace("/id ","$strid",$text);
if($text=="/id $strid"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$strid"); 
$js = json_decode($get);
$res = $js->result;$id = $res->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$id",
'reply_to_message_id'=>$messid,]);}
$strus = str_replace("/user ","$strus",$text);
if($text=="/user $strus"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$strus"); 
$js = json_decode($get);
$res = $js->result;$user = $res->username;$titl = $res->title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- $titl 
- @$user",
'reply_to_message_id'=>$messid,]); }
$strlf = str_replace("/leave ","$strlf",$text);
if($text=="/leave $strlf"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$strlf"); 
$js = json_decode($get);
$res = $js->result;$id = $res->id; 
bot('leaveChat',[
'chat_id'=>$id,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- تم المغادره ✅،",
'reply_to_message_id'=>$messid,]);}
//////////////////////
if(preg_match('/(ccha)/',$data)){
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- القنوات المخالفه هيه 🔽،",]);
$chid = file_get_contents("idch.txt");
$idch = explode("\n", $chid);
for($c=0;$c<count($idch); $c++){
$url = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$idch[$c]."&user_id=$bot_id");
$js = json_decode($url);
$res = $js->result->status;
if($res !== "administrator"){
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>$idch[$c],
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$messid,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}}}
if($la0=="/del"){   
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$la1"); 
$js = json_decode($get);
$res = $js->result; 
$id = $res->id; 
$lastMessagesDump = file_get_contents("json/$la2.json");
$lastMessages = json_decode($lastMessagesDump, true);
foreach ($lastMessages as $Message) {
$messageChatId = $Message['result']['chat']['id'];
$messageId = $Message['result']['message_id'];
bot('deletemessage',[
'chat_id'=>$id,
'message_id'=>$messageId,]);
echo (5);}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- تم حذف الرساله من القناه ✅،",
'reply_to_message_id'=>$messid,]);}
if($text == "/start" && in_array($from_id, $sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- اهلا بك عزيزي المطور 🔱،",
'reply_to_message_id'=>$message->message_id,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- اضافه قنوات ❇️،", "callback_data"=>"addch"],["text"=>"️- حذف قنوات ✳️،", "callback_data"=>"delch"]],
[["text"=>"- القنوات 📃،", "callback_data"=>"allch"],["text"=>"- المخالفات ⚠️،", "callback_data"=>"ccha"]],
[["text"=>"- حذف جميع القنوات 📃،", "callback_data"=>"delallch"]],
[["text"=>"- نشر كود #️⃣،", "callback_data"=>"sendc"],["text"=>"- صنع كود ⚜️،", "callback_data"=>"newcods"]],
[["text"=>"- نشر توجيه ↪️؛", "callback_data"=>"fwds"],["text"=>"- نشر كليشه 📃؛", "callback_data"=>"klss"]],
[["text"=>"- اوامر اخرئ 🔰،", "callback_data"=>"awahr"]],
    ]])]);}
if(preg_match('/(back)/',$data) && in_array($idc, $sudo)){
file_put_contents("userls/$idc/addch.txt","off");
file_put_contents("userls/$idc/delch.txt","off");
file_put_contents("userls/$idc/sendk.txt","off");
file_put_contents("userls/$idc/step.txt","off");
file_put_contents("userls/$idc/sendk.txt","off");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي المطور 🔱،",
'reply_to_message_id'=>$message->message_id,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"- اضافه قنوات ❇️،", "callback_data"=>"addch"],["text"=>"️- حذف قنوات ✳️،", "callback_data"=>"delch"]],
[["text"=>"- القنوات 📃،", "callback_data"=>"allch"],["text"=>"- المخالفات ⚠️،", "callback_data"=>"ccha"]],
[["text"=>"- حذف جميع القنوات 📃،", "callback_data"=>"delallch"]],
[["text"=>"- نشر كود #️⃣،", "callback_data"=>"sendc"],["text"=>"- صنع كود ⚜️،", "callback_data"=>"newcods"]],
[["text"=>"- نشر توجيه ↪️؛", "callback_data"=>"fwds"],["text"=>"- نشر كليشه 📃؛", "callback_data"=>"klss"]],
[["text"=>"- اوامر اخرئ 🔰،", "callback_data"=>"awahr"]],
    ]])]);}
if($data == "allch"){
$idchi = file_get_contents("idch.txt");
$idchl = explode("\n", $idchi);
for($c=0;$c<count($idchl); $c++){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$idchl[$c]");$js = json_decode($get);$res = $js->result;$user = $res->username;$titl = $res->title;
$cont = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$idchl[$c]"));$co = $cont->result;
file_put_contents("allch.txt","
[$titl](t.me/$user) - $co",FILE_APPEND);} 
$ac = file_get_contents("allch.txt");
$st = str_replace("[](t.me/) -","",$ac);
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>$st,
'disable_web_page_preview'=>true,
'parse_mode'=>'markdown','reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])
]);file_put_contents("allch.txt"," ");}
if($text == "/start" && !in_array($from_id, $sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- اهلا بك يا ؛ $name
- اختر ما تريد 🔽،",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[["text"=>"️- لنك؛", "callback_data"=>"lnk"],["text"=>"️- لسته؛", "callback_data"=>"list"]],[["text"=>"$chname", "url"=>"$churl"]],]])]);}
if(preg_match('/(back)/',$data) && !in_array($idc, $sudo)){file_put_contents("userls/$idc/step.txt","off");
file_put_contents("userls/$idc/step.txt","off");
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اختر ما تريد 🔽،",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[["text"=>"️- لنك؛", "callback_data"=>"lnk"],["text"=>"️- لسته؛", "callback_data"=>"list"]],[["text"=>"$chname", "url"=>"$churl"]],]])]);}
if(preg_match('/(newcods)/',$data)){
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اختر ما تريد 🔽،",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[["text"=>"️- لنك؛", "callback_data"=>"lnk"],["text"=>"️- لسته؛", "callback_data"=>"list"]],[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
if(preg_match('/(newcode)/',$data)){
bot('sendmessage',[
'chat_id'=>$chat_id2,
'text'=>"- اختر ما تريد 🔽،",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[["text"=>"️- لنك؛", "callback_data"=>"lnk"],["text"=>"️- لسته؛", "callback_data"=>"list"]],[["text"=>"$chname", "url"=>"$churl"]],]])]);}
if(preg_match('/(awahr)/',$data)){
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- لمغادره البوت من قناة معينه ،
- /leave + معرف القناة ،
ֆ - - - - - - - - - - - ֆ
- لمعرفه معرف القناة ↙️ ،
- /user + ايدي القناة ،
ֆ - - - - - - - - - - - ֆ
- لمعرفه ايدي القناة بالتوجيه ↙️ ،
- /id ،
ֆ - - - - - - - - - - - ֆ
- لمعرفه ايدي القناة بالايدي ↙️ ،
- /id + معرف القناة ،
ֆ - - - - - - - - - - - ֆ
- تفعيل وتعطيل المخالفه عنده النشر ↙️،
- /ochw ، لتفعيل 

- /cchw ، لتعطيل
ֆ - - - - - - - - - - - ֆ
- لحذف رساله من قناة معينه 🔽،
- /del
- معرف القناة ،
- الكود ،',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- رجوع ◀️؛", "callback_data"=>"back"]],]])]);}
/*
Code by :- #Victor - #Tshake
Ch :- @TshAkETeam #1
*/
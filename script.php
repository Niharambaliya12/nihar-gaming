 

<?php

error_reporting(0);
//echo "<meta http-equiv='refresh' content=5;' />"; 
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
 for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function RandomNumber1($length) {
    $characters = '789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$n = array('Binit Kumar ','Raaghu Singh','Sumit Singh','Nitin Rajput','Rishab Verma','Komal Chauhan','Ravi Sharma','Riya Rani','Deepak Pal','Shashi Singh','Ravikant Ghalot ','Smitha Rani','Gowri Rani','Arun Kumar','Arpitha Rani','Anuska Rani','Pooja Rani','Mohit Sharma','Nitin Kumar','Rajpal sharma','Rahul Pal','Abhishek Singh','Kavya Kumari','Kavitha Rani','Savitha Sharma','Sachin Singh','Manohar gurjar','Ajay Mehra','Anurag Chauhan','Madhu Rani','Kushal Saini','Anil Kumar','Askash Kumar','Yogesh Saini','Vidya Sagar','Rajesh rana','Sagar Singh','Madhan Pal','Vishal saha','Ramya','Riyanth','Ravishankar','Radha rani','');
$fname = $n[mt_rand(0,count($n))];
$pass = generateRandomString(16);
$no = RandomNumber(4);
$noy = RandomNumber(9);
$imei = RandomNumber(15);
$noo= RandomNumber1(3);

$nit=RandomNumber(2);
$mb = (rand(6,9));

//$mob="$mb$noy";
$mob= $_GET['mob'];
$refer=$_GET['refer'];
$otp= $_GET['otp'];
$mobi= $_GET['mobi'];




$url2='https:\/\/a.nel.cloudflare.com\/report\/v3?s=QzP0zb7aH772Yplb%2B8J9y6yWHuEJ2QMGxJQMsderbJOKcpghilsmyjC7DbPw7g3TnTooavAIAip6xFNkRWkUx8OkiaYGfDZe9NiZuSuzaKPx%2F3X38BKRVLjP%2B5yZCpwci7AvEnV6NEht%2FQ%3D%3D/';

$data1="contact=$mob&code=$otp";


$headers2[]='Content-length:151 '.strlen($data1).'';
$headers2[]='Content-Type: application/x-www-form-urlencoded';
$headers2[]='Accept: application/json';
$headers2[]='User-Agent: Dalvik/2.1.0';

$headers2[]='Host: teenpattijoy.peiwor.com';
$headers2[]='Connection: Keep-Alive';	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url2);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers2);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
	$output2= curl_exec ($ch);
	$json2=json_decode($output2,true);
	curl_close ($ch);
$msg=$json2['is_verified'];

if ($msg == 1){echo "<div class='success'><center>
<font color='red' size='4'> Otp verify sucessfuly. </font></div></center>";}
if ($msg == 0){echo "<div class='success'><center>
<font color='red' size='4'> Wrong otp. </font></div></center>";}
//echo "<center><font color='#A400FF' size='5px'><b></b></font><br/><font color='red' size='5px'>$output2</font></center>";
if($msg == 1){
$url22='https:\/\/a.nel.cloudflare.com\/report\/v3?s=QzP0zb7aH772Yplb%2B8J9y6yWHuEJ2QMGxJQMsderbJOKcpghilsmyjC7DbPw7g3TnTooavAIAip6xFNkRWkUx8OkiaYGfDZe9NiZuSuzaKPx%2F3X38BKRVLjP%2B5yZCpwci7AvEnV6NEht%2FQ%3D%3D/';

$data12='{"_id":1,"app_version":"338","client_id":"bQMkMnewWzP6y6RSDruoCy8n00Fit1606Et3gZMy","client_secret":"L9haAqx5E99xW5c6N0YS3NUlG8PRdlaGnPK8aa65GGlNzAimpFaIDbYrWsYnYL8IssNjKfoO8nAhnWsoA9YoXBRetBs8JAmTNnmFM74vF98hZMSyoLcq8MH1xOCWsjki","fcm_registration_id":"e1nYORxTk-0:APA91bGTPwpZYR8JLc74YQNG-T9z3RMnmWX8vCqxdM2bNa4RKaQQRVUao9K617xVDlKiMC5DnRziMfOl1HIdflwYN-CfJzpBgXmcOQzvPfhp7BdNP5exCii53b1BjJ7z-hToaBvShMT7","gcm_registration_id":"e1nYORxTk-0:APA91bGTPwpZYR8JLc74YQNG-T9z3RMnmWX8vCqxdM2bNa4RKaQQRVUao9K617xVDlKiMC5DnRziMfOl1HIdflwYN-CfJzpBgXmcOQzvPfhp7BdNP5exCii53b1BjJ7z-hToaBvShMT7","isSync":false,"is_otp_verified":true,"otp":"","register_mode":"register","utm_params":"utm_source=(not%20set)&utm_medium=(not%20set)","active_job":-1,"age":0,"alert_experience":"","alert_qualification":"","alert_sector":"","alert_still_working":"","city":"","device_id":"'.$pass.'","disable_job":-1,"displayCity":"","experience_level":"","full_name":"'.$fname.'","gender":"","google_advertising_id":"","id":-1,"imei":"'.$imei.'","language":"english","languages_known":[],"location":"","location_clean":"","mac_address":"02:00:00:00:00:'.$nit.'","mobile_no":"'.$mob.'","network_operator":"","past_experiences":[],"preferred_sectors":[],"profile_pic":"","profile_title":"","qualification_type":"","qualifications":{"college_name":null,"courses":[],"id":0,"display_name":null},"referral_code":"'.$refer.'","resume_link":"","experiences":[],"speaking_english_level":0,"state":1,"things_about_user":"","total_job":-1,"urgently_looking_job":false,"user_defined_interests":[]}';


$headers22[]='Content-length: '.strlen($data12).'';
$headers22[]='Content-Type: application/json; charset=UTF-8';
$headers22[]='Accept: application/json';
$headers22[]='User-Agent: okhttp/3.12.0';

$headers22[]='Host: api2.workindia.in';
$headers22[]='Connection: Keep-Alive';	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url22);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data12);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers22);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
	$output22= curl_exec ($ch);
	$json22=json_decode($output22,true);
	curl_close ($ch);

$bc=$json22['candidate']['id'];
$b99=$json22['error'];

echo "<center><font color='#A400FF' size='5px'><b></b></font><br/><font color='red' size='5px'>user id $bc</font></center>";
echo "<center><font color='#A400FF' size='5px'><b></b></font><br/><font color='red' size='5px'>$b99</font></center>";

}


?>
ent-length: '.strlen($data12).'';
$headers22[]='Content-Type: application/json; charset=UTF-8';
$headers22[]='Accept: application/json';
$headers22[]='User-Agent: Dalvik/2.1.0';

$headers22[]='Host: teenpattijoy.peiwor.com';
$headers22[]='Connection: Keep-Alive';	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url22);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data12);
	curl_setopt
<?php
$mobile="9182772132";
$message="test message";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7702515812&Password=Hound@311&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=madisXKuyn7Dzg5jVkOrBAW"),true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>
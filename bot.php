<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:ncIwXPyhNi4cEWL';

$access_token = 'TuPeAEFb91uGz4kPxjnMeZ6QaAGrLK05ZQcO5P1zdTNr3bYhATznR5S9ef2Xr/7uNFmngRzqMu+xPUsXw3u53QOwzy2SP+RsQsMVxP6G7VxEff/5I7k0t+SrazH97wQpwxIblRSY7FLpoTkwY0l5hQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
//$content = iconv(mb_detect_encoding($content, mb_detect_order(), true), "UTF-8", $content);
//$content = mb_convert_encoding($content, 'UTF-8');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when Follow me.
		if (($event['type'] == 'follow') or ($event['type'] == 'join')) {
			// Get user follow or join me
			$touserid = $event['source']['userId'];
			// Gen Text Reply
			$gentext = "ขอบคุณที่ติดตามเรา เราขอตรวจสอบสักครู่ก่อนอนุญาตให้ Bot ตอบสนองคุณ";
			// Get Replytoken
			$replyToken = $event['replyToken'];
			//Make a POST Request to Messaging API to reply to follower
			$messages = [
				'type' => 'text',
				'text' => $gentext
			];
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
			
			// Find User Data
			$url = 'https://api.line.me/v2/bot/profile/'.$touserid;
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);
			//echo $result . "\r\n";
			$events = json_decode($result, true);
			// Make Push Messageing
			$displayName = $events['displayName'];
			$userId = $events['userId'];
			$text = $displayName."\n".$userId;
			$messages = [
				'type' => 'text',
				'text' => $text
				//.'\nRequest '.$reqtext
			];
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'Uf95ee3607bc3d6696b2116de202f97d3',
				'messages' => [$messages]
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
			
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$touserid = $event['source']['userId'];
			$text = $event['message']['text'];
			//$text = mb_convert_encoding($text, "UTF-8");
			//$text = utf8_encode($text);
			$reqtext = $text;
			$text = trim($text);
			$text = strtolower($text);
			$lentext = strlen($text);
			$cut2headtext = substr($text,0,2);
			
			// Equipment Select tx, ln, sp
			switch ($cut2headtext) {
				case "tx":					
					$cut3midtext = substr($text,3,3);		
					$cut3midtext = trim($cut3midtext);
					if ($lentext > 9) {
						$cut3lastext = substr($text,7,3);
						$cut3lastext = trim($cut3lastext);
					} elseif (strlen($cut3midtext) <3) {
						$cut3lastext = substr($text,6,3);
						$cut3lastext = trim($cut3lastext);					
					} else {
						$cut3lastext = substr($text,7,3);
						$cut3lastext = trim($cut3lastext);
					}
					// Find txt data name
					$dataname = "Tx/".$cut3midtext.$cut3lastext.".txt";
					$gentext = file_get_contents($dataname);
					$lengentext = strlen($gentext);
					if ($lengentext < 1) {
						$gentext = "ไม่มีข้อมูลหม้อแปลงที่ร้องขอ ขอภัยครับ";
					}
					$tempsend = "text";
					break;
				case "ln":
					$gentext = "Line";
					$originalContentUrl = "https://pacific-scrubland-67443.herokuapp.com/ln/originln.jpg";
					//$previewImageUrl = "https://pacific-scrubland-67443.herokuapp.com/ln/previewln.jpg";
					$previewImageUrl = "https://pacific-scrubland-67443.herokuapp.com/ln/originln.jpg";
					$tempsend = "image";
					break;
				case "cn":
					$adminuser = file_get_contents("userId/admin.txt");
					if ($touserid == $adminuser) {
						$gentext = $adminuser;
					} else {
						$gentext = strpos($touserid,$adminuser);
						$gentext = $gentext."\nคุณไม่ใช่ Admin การใช้คำสั่งนี้ จะทำให้คุณถูก Block";
					}
					$tempsend = "text";
					break;
				default:
					$gentext = "ขออภัย ระบบไม่สามารถหาข้อมูลได้";
					$tempsend = "text";
			}
			//$text = $gentext."\n".$lengentext." By Pitak Mahaman";
			//$text = $gentext."\n".$lengentext." Solfware By Pitak Mahaman"."\n";
			//$text = "First Code : ".$cut2headtext."\n"."Second Code : ".$cut3midtext."\n".$lengentext." By Pitak Mahaman";
			
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back
			switch ($tempsend) {
				case "text" :
					$text = $gentext."\n".$lengentext." Solfware By Pitak Mahaman"."\n";
					$messages = [
						'type' => 'text',
						'text' => $text
					];
					break;
				case "image" :
					$messages = [
						'type' => 'image',
						'originalContentUrl' => $originalContentUrl ,
						'previewImageUrl' => $previewImageUrl
					];
					break;					
				default :
					$text = $gentext."\n".$lengentext." Solfware By Pitak Mahaman"."\n";
					$messages = [
						'type' => 'text',
						'text' => $text
					];					
			}
			//$messages = [
			//	'type' => 'text',
			//	'text' => "ส่งข้อความ++"
			//];
			//$images = [
			//	'type' => 'image',
			//	'originalContentUrl' => "https://pacific-scrubland-67443.herokuapp.com/ln/originln.jpg" ,
			//	'previewImageUrl' => "https://pacific-scrubland-67443.herokuapp.com/ln/originln.jpg"
			//];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
			
			// Find User Data
			$url = 'https://api.line.me/v2/bot/profile/'.$touserid;
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);
			//echo $result . "\r\n";
			$events = json_decode($result, true);
			// Make Push Messageing
			$displayName = $events['displayName'];
			$userId = $events['userId'];
			$text = $displayName."\n".$userId."\nส่งข้อมความ ".$reqtext;
			$messages = [
				'type' => 'text',
				'text' => $text
				//.'\nRequest '.$reqtext
			];
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'Uf95ee3607bc3d6696b2116de202f97d3',
				'messages' => [$messages]
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
                        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";

<?php
include 'headbot.php';
// Function Return message
function t1($tt1)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	return $messages;
}
function im1($originalContentUrl,$previewImageUrl)
{
	$messages = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl ,
		'previewImageUrl' => $previewImageUrl
		];
	return $messages;
}
// Function Return data
function im2($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2]
		];	
	return $data;
}
function im3($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3]
		];	
	return $data;
}
function im4($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$image4 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl4 ,
		'previewImageUrl' => $previewImageUrl4
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3,$image4]
		];	
	return $data;
}
function im5($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4,$originalContentUrl5,$previewImageUrl5)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$image4 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl4 ,
		'previewImageUrl' => $previewImageUrl4
		];
	$image5 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl5 ,
		'previewImageUrl' => $previewImageUrl5
		];	
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3,$image4,$image5]
		];	
	return $data;
}
function t1im2($replyToken,$tt1,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages,$image1,$image2]
		];	
	return $data;
}
// Function Return data
function data1($replyToken,$messages)
{
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages]
		];
	return $data;
}


function temp2imgcol($tt1)
{
	$col1_act = [
		'type' => 'postback',
		'label' => 'Power Flow',
		'data' => 'action=buy&itemid=111'	
		];
	$col1 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_1.jpg',
		'imageUrl' => 'https://pacific-scrubland-67443.herokuapp.com/ColMenu_1.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col1_act
		];
		
	$col2_act = [
		'type' => 'postback',
		'label' => 'Walk Around',
		'data' => 'action=buy&itemid=111'	
		];
	$col2 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_2.jpg',
		'imageUrl' => 'https://pacific-scrubland-67443.herokuapp.com/ColMenu_2.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col2_act
		];	
	$col3_act = [
		'type' => 'postback',
		'label' => 'Contigency',
		'data' => 'action=buy&itemid=111'	
		];
	$col3 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_3.jpg',
		'imageUrl' => 'https://pacific-scrubland-67443.herokuapp.com/ColMenu_3.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col3_act
		];		
	
	$col4_act = [
		'type' => 'postback',
		'label' => 'Record',
		'data' => 'action=buy&itemid=111'	
		];
	$col4 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_4.jpg',
		'imageUrl' => 'https://pacific-scrubland-67443.herokuapp.com/ColMenu_4.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col4_act
		];
	
	$col5_act = [
		'type' => 'postback',
		'label' => 'Record',
		'data' => 'action=buy&itemid=111'	
		];
	$col5 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_5.jpg',
		'imageUrl' => 'https://pacific-scrubland-67443.herokuapp.com/ColMenu_5.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col5_act
		];	
	
	$messages = [
		'type' => 'template',
		'altText' => 'MAC Share Menu',
		'template' => [
			'type' => 'image_carousel',
			'columns' => [$col1,$col2,$col3,$col4,$col5]
			]
		];
	return $messages;
}


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
		//Push Mail
		/*if (($event['headers']['Return-Path'] == 'pitak.m@egat.co.th') {
  			$text = "Mail Recieve";
			$messages = t1($text);
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
		}*/
		    
		// Reply only when Follow me.
		if (($event['type'] == 'follow') or ($event['type'] == 'join')) {
			// Get user follow or join me
			$touserid = $event['source']['userId'];
			$toroomid = $event['source']['roomId'];
			$togroupid = $event['source']['groupId'];
			// Gen Text Reply
			$gentext = "ขอบคุณที่ติดตามเรา";
			// Get Replytoken
			$replyToken = $event['replyToken'];
			//Make a POST Request to Messaging API to reply to follower
			$messages = t1($gentext);
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = data1($replyToken,$messages);
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
			
			// Find Group Data
			//$url = 'https://api.line.me/v2/bot/group/'.$togroupid;
			//$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			//$ch = curl_init($url);
			//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			//$result = curl_exec($ch);
			//curl_close($ch);
			//$events = json_decode($result, true);
			// Make Push Messageing
			//$displayName = $events['displayName'];
			//$groupId = $events['groupId'];
			//$text = $displayName." Group\n".$groupId;
			$text = "Group"."\n".$togroupid;
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
			
		// Reply only  message sent is in 'text' format, 'image' format
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
			
			// Equipment Select sb, tx, ln, sp			
			switch ($cut2headtext) {
				case "sb":
					$cut3midtext = substr($text,3,3);		
					$cut3midtext = trim($cut3midtext);
					$bsubname = false;
					$bcode = true;
					if (($cut3midtext == "bk") or ($cut3midtext == "bn") or ($cut3midtext == "bpl") or ($cut3midtext == "chw") or ($cut3midtext == "lpr") or ($cut3midtext == "lla") or ($cut3midtext == "nb") or ($cut3midtext == "nco") or ($cut3midtext == "nv") or ($cut3midtext == "on") or ($cut3midtext == "rps") or ($cut3midtext == "rs") or ($cut3midtext == "sb") or ($cut3midtext == "sno") or ($cut3midtext == "stb") or ($cut3midtext == "tpr")) {
						$bsubname = true;
						if (($cut3midtext == "lpr") or ($cut3midtext == "nb") or ($cut3midtext == "nv") or ($cut3midtext == "on") or ($cut3midtext == "stb")) {
							$bcode = false;
						}
					}
					/*if ($lentext > 9) {
						$cut3lastext = substr($text,7,3);
						$cut3lastext = trim($cut3lastext);
					} elseif (strlen($cut3midtext) <3) {
						$cut3lastext = substr($text,6,3);
						$cut3lastext = trim($cut3lastext);					
					} else {
						$cut3lastext = substr($text,7,3);
						$cut3lastext = trim($cut3lastext);
					}*/
					//if (($cut3midtext == "lpr") or ($cut3midtext == "nb") or ($cut3midtext == "nv") or ($cut3midtext == "on") or ($cut3midtext == "stb")) {
					//	$bcode = false;
					//}
					// Find txt data name
					if (($bsubname)) {
						if ($bcode) {
						//$gentext = "Switching & Single Line Diagram สฟ ".$cut3midtext;
						//$gentext = "Switching และ Single Line Diagram สฟ ";
							$originalContentUrl1 = $dataSubUrl.$cut3midtext."/swd.jpg";
							$previewImageUrl1 = $dataSubUrl.$cut3midtext."/swd.jpg";
							$originalContentUrl2 = $dataSubUrl.$cut3midtext."/sld.jpg";
							$previewImageUrl2 = $dataSubUrl.$cut3midtext."/sld.jpg";
							$originalContentUrl3 = $dataSubUrl.$cut3midtext."/con01.jpg";
							$previewImageUrl3 = $dataSubUrl.$cut3midtext."/con01.jpg";
							$originalContentUrl4 = $dataSubUrl.$cut3midtext."/sol01.jpg";
							$previewImageUrl4 = $dataSubUrl.$cut3midtext."/sol01.jpg";						
							$lengentext = "4 ภาพ";
							$tempsend = "im4";
						} else {
							$originalContentUrl1 = $dataSubUrl.$cut3midtext."/swd01.jpg";
							$previewImageUrl1 = $dataSubUrl.$cut3midtext."/swd01.jpg";
							$originalContentUrl2 = $dataSubUrl.$cut3midtext."/swd02.jpg";
							$previewImageUrl2 = $dataSubUrl.$cut3midtext."/swd02.jpg";							
							$originalContentUrl3 = $dataSubUrl.$cut3midtext."/sld.jpg";
							$previewImageUrl3 = $dataSubUrl.$cut3midtext."/sld.jpg";
							$originalContentUrl4 = $dataSubUrl.$cut3midtext."/con01.jpg";
							$previewImageUrl4 = $dataSubUrl.$cut3midtext."/con01.jpg";
							$originalContentUrl5 = $dataSubUrl.$cut3midtext."/sol01.jpg";
							$previewImageUrl5 = $dataSubUrl.$cut3midtext."/sol01.jpg";						
							$lengentext = "5 ภาพ";
							$tempsend = "im5";						
						}						
					} else {
						$gentext = "คำขอของท่านไม่ถูกต้อง";
						$tempsend = "t1";
					}
					//$gentext = "คำขอของท่านไม่ถูกต้อง";
					//$tempsend = "t1";
					break;
				case "pr":					
					$cut3midtext = substr($text,3,3);		
					$cut3midtext = trim($cut3midtext);
					$bpriEq = false;					
					if (($cut3midtext == "ln") or ($cut3midtext == "tx") or ($cut3midtext == "cb")) {
						$bpriEq = true;
					}					
					// Find txt data name
					if ($bpriEq) {
						switch ($cut3midtext) {
							case "ln":
								$originalContentUrl1 = $dataPrEqUrl."Line_Page_1.jpg";
								$previewImageUrl1 = $dataPrEqUrl."Line_Page_1.jpg";
								$originalContentUrl2 = $dataPrEqUrl."Line_Page_2.jpg";
								$previewImageUrl2 = $dataPrEqUrl."Line_Page_2.jpg";
								$lengentext = "2 ภาพ";
								$tempsend = "im2";
								break;
							case "tx":
								$originalContentUrl1 = $dataPrEqUrl."Tx_Page_1.jpg";
								$previewImageUrl1 = $dataPrEqUrl."Tx_Page_1.jpg";
								$originalContentUrl2 = $dataPrEqUrl."Tx_Page_2.jpg";
								$previewImageUrl2 = $dataPrEqUrl."Tx_Page_2.jpg";
								$originalContentUrl3 = $dataPrEqUrl."Tx_Page_3.jpg";
								$previewImageUrl3 = $dataPrEqUrl."Tx_Page_3.jpg";
								$lengentext = "3 ภาพ";
								$tempsend = "im3";
								break;
							case "cb":
								$originalContentUrl1 = $dataPrEqUrl."C_Page_1.jpg";
								$previewImageUrl1 = $dataPrEqUrl."C_Page_1.jpg";
								$originalContentUrl2 = $dataPrEqUrl."C_Page_2.jpg";
								$previewImageUrl2 = $dataPrEqUrl."C_Page_2.jpg";
								$originalContentUrl3 = $dataPrEqUrl."C_Page_3.jpg";
								$previewImageUrl3 = $dataPrEqUrl."C_Page_3.jpg";
								$lengentext = "3 ภาพ";
								$tempsend = "im3";
								break;																
							default :
								$gentext = "คำขอของท่านไม่ถูกต้อง";
								$tempsend = "t1";
						}
					} else {
						$gentext = "คำขอของท่านไม่ถูกต้อง";
						$tempsend = "t1";
					}
					break;
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
					$lengentext = strlen($gentext)." ตัวอักษร";
					if ($lengentext < 1) {
						$gentext = "ไม่มีข้อมูลหม้อแปลงที่ร้องขอ ขอภัยครับ";
					}
					$tempsend = "t1";
					break;
				case "pk":
					$originalContentUrl = $datapkUrl."01.jpg";
					$previewImageUrl = $datapkUrl."01.jpg";
					$lengentext = "1 ภาพ";
					$tempsend = "im1";
					break;				
				case "ln":
					$gentext = "Line";
					//$originalContentUrl = $originalUrl."ln/originln.jpg";
					//$previewImageUrl = "https://pacific-scrubland-67443.herokuapp.com/ln/previewln.jpg";
					//$previewImageUrl = $originalUrl."ln/originln.jpg";
					$originalContentUrl = $ecsURL;
					$previewImageUrl = $ecsPreviewURL;
					$lengentext = "1 ภาพ";
					$tempsend = "im1";
					//$tempsend = "t1im2";
					break;
				case "mc" :
					$tempsend = "template";
					break;
				case "cn":
					$adminuser = file_get_contents("userId/admin.txt");
					$ttouserid = trim($touserid);
					$tadminuser = trim($adminuser);
					//$gentext = strrpos($tadminuser,$ttouserid);
					if ($ttouserid == $tadminuser) {
						//$gentext = $tadminuser;
						//$gentext = $gentext."\n"."Thank you, Admin."."\n".$ttouserid."\n".$tadminuser;
						$gentext = "Thank you, Admin.";
						$cut3midtext = substr($text,3,3);		
						$cut3midtext = trim($cut3midtext);
						$gentext = $gentext."\n".$cut3midtext;
						$lengentext = strlen($gentext)." ตัวอักษร";
					} else {
						//$gentext = strpos($ttouserid,$tadminuser);
						$gentext = $gentext."\n"."คุณไม่ใช่ Admin การใช้คำสั่งนี้ จะทำให้คุณถูก Block"."\n".$ttouserid."\n".$tadminuser;
						$lengentext = strlen($gentext)." ตัวอักษร";
					}
					$tempsend = "t1";
					break;
				default:
					$gentext = "ขออภัย ระบบไม่สามารถหาข้อมูลได้";
					$lengentext = strlen($gentext)." ตัวอักษร";
					$tempsend = "t1";
			}
			//$text = $gentext."\n".$lengentext." By Pitak Mahaman";
			//$text = $gentext."\n".$lengentext." Solfware By Pitak Mahaman"."\n";
			//$text = "First Code : ".$cut2headtext."\n"."Second Code : ".$cut3midtext."\n".$lengentext." By Pitak Mahaman";
			
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back
			switch ($tempsend) {
				case "t1" :
					$text = $gentext."\nPlatform By Line Application";
					$messages = t1($text);
					$data = data1($replyToken,$messages);
					break;
				case "im1" :
					$messages = im1($originalContentUrl,$previewImageUrl);
					$data = data1($replyToken,$messages);
					break;	
				case "im2" :
					$data = im2($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2);
					break;	
				case "im3" :
					$data = im3($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3);
					break;	
				case "im4" :
					$data = im4($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4);
					break;	
				case "im5" :
					$data = im5($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4,$originalContentUrl5,$previewImageUrl5);
					break;						
				case "t1im2" :
					$text = $gentext."\nPlatform By Line Application";	
					//$messages = t1($text);	
					//$data = data1($replyToken,$messages);
					//$originalContentUrl1 = $originalContentUrl;
					//$originalContentUrl2 = $originalContentUrl;
					//$previewImageUrl1 = $previewImageUrl;
					//$previewImageUrl2 = $previewImageUrl;
					$data = t1im2($replyToken,$text,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2);
					break;
				case "template" :
					$text = "TestTest";
					$messages = temp2imgcol($text);
					$data = data1($replyToken,$messages);
					break;
				default :
					$text = $gentext."\n".$lengentext." Platform By Line Application";
					$messages = t1($text);	
					$data = data1($replyToken,$messages);
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
			//$data = data1($replyToken,$messages);
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
			$text = $displayName."\n".$userId."\nส่งข้อความRequestคือ\n".$reqtext."\nตอบกลับไป ".$lengentext;
			$messages = t1($text);
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

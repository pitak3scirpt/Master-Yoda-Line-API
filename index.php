<?php
echo "Hello LINE BOT <br>";
echo "ทดสอบ Test Tx BK TEXT <br>";
$buffer = file_get_contents("TxBK.txt");
$buffer = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $buffer);
echo $buffer;
?>

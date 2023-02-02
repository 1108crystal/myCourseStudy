<!--  -->
<h2>以GET來說，直接把參數填在URL即可</h2>
<?php
//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://data.ntpc.gov.tw/api/datasets/010e5b15-3823-4b20-b401-b1cf000550c5/json?size=100");
//設定AGENT
curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回
$result = curl_exec($ch);
//關閉連線
curl_close($ch);
echo "143241";
?>
<hr>

<!--  -->
<h2>若是要使用POST則必需開啟post參數</h2>
<?php
//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "http://220.128.133.15/s1110423/school/index.php");
//設定header
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded'));
//啟用POST
curl_setopt($ch, CURLOPT_POST, true);
//傳入POST參數
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( array( "name"=>"johnson") ));
//執行，並將結果存回
$result = curl_exec($ch);
//關閉連線
curl_close($ch);
?>

<!--  -->
<hr>
<h2>利用curl下載檔案：</h2>
<?php
//設定路徑
$path = "d:/test/work.doc";
$ch = curl_init();
//CURLOPT_RETURNTRANSFER為true的話，curl只會將結果傳回，並不會輸出在畫面上
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch , CURLOPT_URL , "http://220.128.133.15/s1110423/school.txt");

$result = curl_exec($ch);
curl_close($ch);

//利用file_put_contents將檔案的資料存到設定的路徑及檔案之中
file_put_contents($path, $result);

/*************
或者直接寫入檔案之中
*************/
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL , "http://220.128.133.15/s1110423/data.txt");
//開啟檔案
$fp = fopen("d:/test/a.txt", "w");
//CURLOPT_FILE設為開啟的檔案
curl_setopt($ch, CURLOPT_FILE, $fp);
//執行，直接寫入檔案
curl_exec($ch);
?>

<!--  -->
<hr>
<h2>顯示Header資訊(含目地端的資料)</h2>
<?php
$ch = curl_init();
//顯示Http Header資訊
curl_setopt($ch , CURLOPT_HEADER, true);
curl_setopt($ch , CURLOPT_URL , "http://220.128.133.15/s1110423/school/index.php");

$result = curl_exec($ch);
curl_close($ch);
?>
<!--  -->
<hr>
<h2>只顯示Header資訊</h2>
<?php
$ch = curl_init();
//顯示Http Header資訊
curl_setopt($ch , CURLOPT_HEADER, true);
//不要顯示目地端的資料
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch , CURLOPT_URL , "http://220.128.133.15/s1110423/school/index.php");

$result = curl_exec($ch);
curl_close($ch);
?>
<html>
 <head>
  <title>mission2-2</title>
  <meta charset="utf-8">
 </head>
<body bgcolor="white">
<font color="black">
<form method="POST"action="mission2-2.php">
  <hl>名前:</hl><input type="text" name="namae" value="名前">
<br>
  <hl>コメント:</hl><input type="text" name="comment" value="コメント">
<br>
<br>
 <input type="submit"name="btn" value="送信">
</form>


<?php
//送信された内容をテキストファイルに書き込む
      $filename="mission2-2_hyodo.txt"; //$filenameは$fnと一緒
      $fp=fopen($filename,'a');
      $data=file($filename);

for($i=0;$i<=count($data);$i++){ //投稿番号。配列の個数に+1
     $num=$i+1;
     }
  $today=date("Y年n月j日H時i分");
  $namae=$_POST["namae"];
  $comment=$_POST["comment"];
if(!empty($_POST["namae"])){
if(!empty($_POST["comment"])){
      $line=$num."<>".$namae."<>".$comment."<>".$today."<>"."\n"; // $lineは文字列
      fwrite($fp, $line);
      fclose($fp);

  $test="mission2-2_hyodo.txt";
  $data=file($test);
  $data=explode("<>",$data);
   foreach($data as $hyouji){ //$nakamiの配列数だけ繰り返し処理できる
   echo$hyouji."<br />";
   }
}
}
?>


<!- for($i=0;$i<=count($comment);$i++){実行する内容}->

 </body>
</html>
<html>
 <head>
  <title></title>
   <meta charset="utf-8">
 </head>
<body>
<form method="POST"action="mission_1-7_hyodo.php">
 <input type="text" name='namae' value="コメント">
 <input type="submit"name="btn" value="送信">
</form>

<?php
  $namae=$_POST['namae'];

//条件分岐:フォームに文字列が入力されていない時、書き出しされなくなる。
//条件分岐やループを使うときは、インデント（字下げ）を行う。
// explodeを使ってみる。改行コードを区切りとして分解。
  if(!empty($_POST['namae'])){
$namae=$_POST['namae'];
      $filename='mission_1-7_hyodo.txt';
      $fp=fopen($filename,'a+');
      fwrite($fp,$namae."\n");  // "\n"は改行文字。/（スラッシュの反対。）
      fclose($fp);
   $data=file_get_contents('mission_1-7_hyodo.txt');
   $data=explode("\n",$data);
   $cnt=count($data);
for($i=0;$i<$cnt;$i++)
{
echo($data[$i])."<br />";
}

}
?>
<!- forはあらかじめ指定された回数だけ処理を行う。 >
</body>
</html>
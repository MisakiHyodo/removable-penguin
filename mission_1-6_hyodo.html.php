<html>
 <head>
  <title>mission1-6</title>
  <meta charset="utf-8">
 </head>
<body>

<form method="POST"action="mission_1-6_hyodo.html.php">
 <input type="text" name='namae' value="コメント">
 <input type="submit"name="btn" value="送信">
</form>

<?php
  $namae=$_POST['namae'];

//条件分岐:フォームに文字列が入力されていない時、書き出しされなくなる。
//条件分岐やループを使うときは、インデント（字下げ）を行う。

  if(!empty($_POST['namae'])){
$namae=$_POST['namae'];
      $filename='mission_1-6_hyodo.txt';
      $fp=fopen($filename,'a');
      fwrite($fp,$namae."\n");  // "\n"は改行文字。/（スラッシュの反対。）
      fclose($fp);
}
?>


 </body>
</html>
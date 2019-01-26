<html>
 <head>
  <title>mission1-5</title>
  <meta charset="utf-8">
 </head>
<body>

<form method="POST"action="mission_1-5_hyodo.html.php">
 <input type="text" name='namae' value="コメント">
 <input type="submit"name="btn" value="送信">
</form>

<?php
  $today=date("Y年n月j日H時i分");
  $namae=$_POST['namae'];

//条件分岐:フォームに文字列が入力されていない時、書き出しされなくなる。
//条件分岐やループを使うときは、インデント（字下げ）を行う。

  if(!empty($_POST['namae'])){
// 欄が空でないとき
      if($namae=='完成！'){
      echo 'おめでとう！';
      $filename='mission_1-5_hyodo.txt';
      $fp = fopen($filename,'w');
      fwrite($fp,$namae);
      fclose($fp);
}
else{
$today=date("Y年n月j日H時i分");
$namae=$_POST['namae'];
      echo
      "ご入力ありがとうございます。<br>".
      $today."に".$namae."を受け付けました。";
      $filename='mission_1-5_hyodo.txt';
      $fp=fopen($filename,'w');
      fwrite($fp,$namae);
      fclose($fp);
     }
}
?>

<!- PHP Parse error: syntax error, unexpected '[', expecting ')' ->
<!- は、簡単に説明すると、 ")"付近（直前）のソースコードに、 ->
<!- 想定外の "["が存在することによって起こる構文エラーです。 ->
<!- 必要のない "["が記述されているか、 ->
<!- もしくは"］"が抜けているかが原因で発生します。->

<!- ファイルシステム関数→フォルダ・ファイルの情報を取得する、書き込みを行う。 ->
<!- スクリプトからテキストファイルに書き込みを行う際、開く(fopen)必要がある。 ->

 </body>
</html>
<html>
 <head>
  <title>mission1-4</title>
  <meta charset="utf-8">
 </head>
<body>

<form method="POST"action="mission_1-4_hyodo.html.php">
 <input type="text" name='namae' value="コメント">
 <input type="submit"name="btn" value="送信">
</form>

<?php
$today = date("Y年m月d日 H時i分");
$namae= $_POST['namae'];
echo
"ご入力ありがとうございます。<br>".
$today."に".$namae."を受け付けました。";
?>

 </body>

</html>
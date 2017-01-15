<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>アンケート</title>
</head>
<body>
<form method="post" action="questionnaire.php">
アンケート項目１<br><br>
<?php
$cake = array('aさん', 'bさん', 'cさん');
for ($i = 0; $i < count($cake); $i++) {
  print "<input type='radio' name='ans1' value='$i'>{$cake[$i]}<br>\n";
}
?>
<br>
<!-- <input type="submit" name="submit" value="投票">
</form>

<form method="post" action="questionnaire.php"> -->
アンケート項目２<br><br>
<?php
$cake = array('aさん', 'bさん', 'cさん');
for ($i = 0; $i < count($cake); $i++) {
  print "<input type='radio' name='ans2' value='$i'>{$cake[$i]}<br>\n";
}
?>
<br>
<input type="submit" name="submit" value="投票">
</form>

</body>
</html>

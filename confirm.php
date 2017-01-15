<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>アンケート</title>
</head>
<body>
アンケート項目１
<?php
$cake = array('aさん', 'bさん', 'cさん');
?>
</form>

<table border='1'>
<?php
$ed = file('data1.txt');
for ($i = 0; $i < count($cake); $i++) $ed[$i] = rtrim($ed[$i]);
if ($_POST['submit']) {
  $ed[$_POST['ans']]++;
  $fp = fopen('data1.txt', 'w');
  for ($i = 0; $i < count($cake); $i++) {
    fwrite($fp, $ed[$i] . "\n");
  }
  fclose($fp);
}
?>
<?php
for ($i = 0; $i < count($cake); $i++) {
  print "<tr>";
  print "<td>{$cake[$i]}</td>";
  print "<td><table><tr>";
  $w = $ed[$i] * 10;
  print "<td width='$w' bgcolor='green'> </td>";
  print "<td>{$ed[$i]} 票</td>";
  print "</tr></table></td>";
  print "</tr>\n";
}
?>
</table>
<br>
アンケート項目２
<table border='1'>
<?php
$ed = file('data2.txt');
for ($i = 0; $i < count($cake); $i++) $ed[$i] = rtrim($ed[$i]);
if ($_POST['submit']) {
  $ed[$_POST['ans']]++;
  $fp = fopen('data2.txt', 'w');
  for ($i = 0; $i < count($cake); $i++) {
    fwrite($fp, $ed[$i] . "\n");
  }
  fclose($fp);
}
?>
<?php
for ($i = 0; $i < count($cake); $i++) {
  print "<tr>";
  print "<td>{$cake[$i]}</td>";
  print "<td><table><tr>";
  $w = $ed[$i] * 10;
  print "<td width='$w' bgcolor='green'> </td>";
  print "<td>{$ed[$i]} 票</td>";
  print "</tr></table></td>";
  print "</tr>\n";
}
?>
</table>
</body>
</html>

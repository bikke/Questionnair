<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>アンケート終了</title>
  </head>
  <body>
    <?php
      print "<span>Thank you.</span>"
     ?>
    <?php
    $cake = array('aさん', 'bさん', 'cさん');
    ?>

    <?php
    $ed = file('data1.txt');
    for ($i = 0; $i < count($cake); $i++) $ed[$i] = rtrim($ed[$i]);
    if ($_POST['submit']) {
      $ed[$_POST['ans1']]++;
      $fp = fopen('data1.txt', 'w');
      for ($i = 0; $i < count($cake); $i++) {
        fwrite($fp, $ed[$i] . "\n");
      }
      fclose($fp);
    }
    ?>
    <?php
    $ed = file('data2.txt');
    for ($i = 0; $i < count($cake); $i++) $ed[$i] = rtrim($ed[$i]);
    if ($_POST['submit']) {
      $ed[$_POST['ans2']]++;
      $fp = fopen('data2.txt', 'w');
      for ($i = 0; $i < count($cake); $i++) {
        fwrite($fp, $ed[$i] . "\n");
      }
      fclose($fp);
    }
    ?>
  </body>
</html>

<?php

$result = rand(0,5);

if ($result == 0) {
  $result = "大吉";
} elseif ($result == 1) {
  $result = "中吉";
} elseif ($result == 2) {
  $result = "小吉";
} elseif ($result == 3) {
  $result = "吉";
} else {
  $result = "凶";
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>おみくじ</title>
</head>
<body>
  <main>
    <h1>結果は・・・</h2>
    <div class="result-box">
      <p><div class="result-word"><?php echo $result ?>です!</p>
    </div>
  </main>
</body>
</html>

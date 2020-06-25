<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <ul>
    <?php

    $files = scandir(__DIR__);
    foreach ($files as $file) {

      echo "<li><a href='$file'>$file</a></li>";
    }

    ?>

  </ul>
</body>

</html>
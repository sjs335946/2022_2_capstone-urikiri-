<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="manifest" href="/manifest.json">
    <script>
  if (typeof navigator.serviceWorker !== 'undefined') {
    navigator.serviceWorker.register('sw.js')
  }
  if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js')
        navigator.serviceWorker.ready.then(function(swRegistration) {
          return swRegistration.sync.register('sync')
        })
      }
</script>
</head>
<body>
<?php 
    date_default_timezone_set("Asia/Seoul");
    // $conn = mysqli_connect("localhost", "root" , "", "correction")or die("fail");
    $conn = mysqli_connect("localhost", "?" , "?", "?")or die("fail");
?>
</body>
</html>
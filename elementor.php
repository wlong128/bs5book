<?php
$page = '';
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bs5book-頭像上傳</title>
  <!-- Bootstrap 5.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- jquery 3.6.1 -->
  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <!-- w3-include-html -->
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <!-- bootstrap.bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- CSS 預設區 -->
  <link rel="stylesheet" href="css/default.css">
  <!-- CSS 自訂區 -->

  <style>
    body,
    html {
      height: 100%;
      background-color: #ffffff;
    }

    iframe {
      width: 100%;
      height: calc(100% - 80px);
    }
  </style>

</head>

<body>
  <div w3-include-html="include/header.html"></div>

  <iframe src="https://elementor.moto360.club/<?php echo $page ?>/" width="100%" frameborder="0" scrolling="auto"></iframe>

  <script>
    w3.includeHTML();
  </script>
</body>

</html>
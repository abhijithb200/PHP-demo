<?php
$heading = $_GET['name'];
$name = $_GET['heading'];
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $heading; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* CSS styles go here */
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      background-color: #f0f0f0;
    }
    h1 {
      color: #333;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <h1>Welcome to <?php echo $heading; ?>, <?php echo $name; ?>!</h1>
  <p>This is a sample webpage built using PHP and HTML.</p>
</body>
</html>

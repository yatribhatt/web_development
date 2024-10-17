<?php
if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form 2</title>
</head>
<body>

  <h2>Form 2: Displaying Details</h2>

  <p>Name: <?php echo $name; ?></p>
  <p>Age: <?php echo $age; ?></p>

</body>
</html>

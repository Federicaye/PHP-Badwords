<?php
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];
$cleanParagraph = str_replace($badWord, "Dolly", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $cleanParagraph ?></p>
</body>
</html>
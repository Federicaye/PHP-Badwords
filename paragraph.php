<?php
var_dump($_GET['paragraph']);
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];
$cleanParagraph = str_replace($badWord, "***", $paragraph);
$length = strlen($paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $paragraph ?> la lunghezza del paragrafo è <?php echo $length ?></p>
    <p> <?php echo $cleanParagraph ?></p>
    <p> <?php echo $length ?></p>
</body>
</html>
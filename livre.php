<?php
require_once 'functionarm.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$book1=new Book(111,"Learn PHP", "Williams J", "Informatique", "images/book1.png");
$book1->display();
?>  
</body>
</html>
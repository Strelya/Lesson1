<html>
<head>
    <title>PHP + DB + phpMyAdmin</title>
</head>

<body>
<?php
$dbh = new PDO('mysql:host=db;dbname=sandbox', 'root', 'qwerty7');

phpinfo();
?>
</body>
</html>
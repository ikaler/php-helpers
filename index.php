<?php
$list = [
    'linked_list' => 'Linked List',
    'singleton' => 'Singleton Pattern'
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Helpers</title>
</head>
<body style="font-family:sans-serif">
    <h1>PHP-Helpers</h1>
    <?php foreach ($list as $key => $value) { ?>
        <ul>
            <li>
            <h2><a href="./examples/<?php echo $key; ?>.php"><?php echo $value; ?></a></h2>
            </li>
        </ul>
    <?php } ?>
</body>
</html>
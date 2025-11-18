<?php

$vote = 4;

if ($vote === 6) {
    echo "sufficiente";
} elseif ($vote > 6) {
    echo "buono";
} elseif ($vote < 6) {
    echo "insufficiente";
}

?>

<!-- Template HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals Template Example</title>
</head>

<body>
    <?php if ($vote > 6): ?>
        <strong>Buono</strong>
    <?php elseif ($vote === 6): ?>
        <strong>Sufficiente</strong>
    <?php elseif ($vote < 6): ?>
        <strong>Insufficiente</strong>
    <?php endif; ?>

</body>

</html>
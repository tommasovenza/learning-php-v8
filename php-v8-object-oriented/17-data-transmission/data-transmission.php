<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET, $_POST, $_REQUEST</title>
</head>

<body>
    <h1>$_GET Printing from Query String</h1>
    <?php

    var_dump($_GET); // printing from queryString everything after ? and &

    ?>

    <h2>$_POST</h2>

    <form action="" method="post">
        <input type="text" name="name" id="name" class="form-control">
        <input type="text" name="surname" id="surname" class="form-control">
        <button type="submit">Submit</button>
    </form>

    <?php
    var_dump($_POST); // dumping from form
    ?>

    <h2>$_REQUEST</h2>

    <?php
    var_dump($_REQUEST); // dumping from form
    ?>
</body>

</html>
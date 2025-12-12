<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
</head>

<body>
    <!-- form -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file-upload" id="file-upload">
        <button type="submit">Upload File</button>
    </form>

    <?php
    // dumping $_files to see upload
    var_dump($_FILES);
    ?>
</body>

</html>
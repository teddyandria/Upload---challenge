<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error; ?></li>
        <?php endforeach ?>
    </ul>
    <form method="post" enctype="multipart/form-data">
        <label for="firstname">firstname :</label>
        <input type="text" name="firstname" id="firstname" />

        <label for="lastname">lastname :</label>
        <input type="text" name="lastname" id="lastname" />

        <label for="age">Age :</label>
        <input type="number" name="age" id="age" min="1" max="150" />

        <label for="imageUpload">Upload an profile image</label>
        <input type="file" name="avatar" id="imageUpload" />
        <button name="send">Send</button>
    </form>


</body>

</html>
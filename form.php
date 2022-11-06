<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $uploadDir = 'public/uploads/';

    $uploadFile = $uploadDir . basename($_FILES['avatar']['name']);

    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

    $authorizedExtensions = ['jpg', 'jpeg', 'png'];

    $maxFileSize = 1000000;

    if ((!in_array($extension, $authorizedExtensions))) {
        $errors[] = 'Veuillez sélectionner une image de type Jpg ou Jpeg ou Png !';
    }

    if (file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize) {
        $errors[] = "Votre fichier doit faire moins de 1M !";
    }

    move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile);
}


?>


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
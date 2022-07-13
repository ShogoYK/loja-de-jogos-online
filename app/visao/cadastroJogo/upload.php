<?php
$target_dir = "/public/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = true;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    echo "Esse arquivo ja existe!";
    $uploadOk = false;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Por favor, envie apenas arquivos .jpg, .png ou .jpeg";
    $uploadOk = false;
}

if ($uploadOk) {
    echo "Houve um erro com o envio do seu arquivo.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi enviado com sucesso.";
    } else {
        echo "Houve um erro com o envio do seu arquivo.";
    }
}

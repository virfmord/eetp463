<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica si el archivo ya existe
    if (file_exists($target_file)) {
        echo "El archivo ya existe.";
        $uploadOk = 0;
    }

    // Verifica el tamaño del archivo
    if ($_FILES["file"]["size"] > 500000) {
        echo "El archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permite ciertos formatos de archivo
    $allowed_types = array("jpg", "png", "jpeg", "gif", "pdf", "doc", "docx");
    if (!in_array($fileType, $allowed_types)) {
        echo "Solo se permiten archivos JPG, JPEG, PNG, GIF, PDF, DOC y DOCX.";
        $uploadOk = 0;
    }

    // Verifica si $uploadOk está en 0 debido a un error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "El archivo " . htmlspecialchars(basename($_FILES["file"]["name"])) . " ha sido subido.";
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
}
?>

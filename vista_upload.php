<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .upload-box {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 2px dashed #ccc;
            text-align: center;
        }
        .upload-box input[type="file"] {
            display: none;
        }
        .upload-box label {
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="upload-box">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file-upload">Seleccione un archivo</label>
            <input type="file" name="file" id="file-upload">
            <input type="submit" value="Subir">
        </form>
    </div>
    <script>
        document.getElementById('file-upload').addEventListener('change', function() {
            this.form.submit();
        });
    </script>
</body>
</html>

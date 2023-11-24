<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cerveza</title>
</head>
<body>
    <h1>Añadir Nueva Cerveza</h1>
    <form action="insert_cerveza.php" method="post" enctype="multipart/form-data">
        
        <label for="nombre">Nombre de la cerveza:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Introduce el nombre de la cerveza" required >

        <select id="tipo" name="tipo" required>
            <option value="Tostada">Tostada</option>
            <option value="Rubia">Rubia</option>
            <option value="De trigo">De trigo</option>
            <option value="Negra">Negra</option>
        </select>

        <label for="graduacion_alcoholica">Graduación alcohólica:</label>
        <input type="number" id="graduacion_alcoholica" name="graduacion_alcoholica" required min="0" required max="100">

        <label for="pais">País de procedencia:</label>
        <input type="text" id="pais" name="pais" required>

        <label for="precio">Precio de la cerveza :</label>
        <input type="text" id="precio" name="precio" required min="0">

        <label for="imagen">Subir imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*">

        <!-- para añadir un documento tipo pdf(accept) -->
        <label for="documento">Adjuntar documento (PDF o DOCX, máximo 5 MB):</label>
        <input type="file" id="documento" name="documento" accept=".pdf, .docx">
        <button type="submit">Añadir Cerveza</button>
    </form>
</body>
</html>
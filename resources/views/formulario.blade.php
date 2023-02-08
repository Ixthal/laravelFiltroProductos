<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="api/productos/new" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">
      
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price">

        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description"></input>
      
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock">
      
        <input type="submit" value="Submit">
      </form>       
</body>
</html>
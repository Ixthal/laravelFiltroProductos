<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #mostrar{
        margin-top: 12px;
    }
    .celdas{
        border: 1px solid black;
    }
</style>
<body>
    <form action="/api/productos/filter" method="post">
        <label for="stockFilter">Filtrar por stock:</label>
        <select id="stockFilter" name="stockFilter">
          <option value="greater">Mayor que 5</option>
          <option value="less">Menor que 5</option>
        </select>
        <input type="submit" value="Aplicar filtro" name="apply">
      </form> 
      
      @if (!empty($products))
      <div id="mostrar">
        <table class="celdas">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Stock</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product['id'] }}</td>
              <td>{{ $product['nombre'] }}</td>
              <td>{{ $product['precio'] }}</td>
              <td>{{ $product['stock'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
      
</body>
</html>
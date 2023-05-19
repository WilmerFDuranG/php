<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <form action="procesar.php" method="POST">
        <label>
            CC:
            <input type="number" name="document">
        </label>
        <br>
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
    
        <label>
            Email:
            <input type="email" name="email">
        </label>
        <br>
        <label>
            Movil:
            <input type="number" name="numero">
        </label>
        <br>
            <h2>Sexo:</h2>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>    
      
        <br>    

        <button type="submit">Registrar</button>

   </form>
</body>
</html>

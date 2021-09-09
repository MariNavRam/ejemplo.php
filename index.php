<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
<h1> Mi FORMULARIO</h1>
    
    
    <form method="POST">
     
           
             <label for="tarea">Nombre de la tarea</label><br>
             <input type="text" name="tarea">
              
              <br>
              
           
              <label for="name"><b>Carrera:</b></label>
              <select name="select">
                <option value="value1">Ing. en Informatica</option>
                <option value="value2" selected>Ing. en Computacion</option>
    </select>
    
   
    
        <br><br>
        <label for="start"><b>Género:</b></label>
        <br>
        <input type="radio" name="genero" value="1">Femenino
        <input type="radio" name="genero" value="2">Masculino
    
    <br>
    <br>
    
    <br><br>
    <label for="name"><b>Comentario:</b></label>
    <br>
    <textarea name="textarea" rows="10" cols="50">Escribe tu comentario aquí</textarea>
    <br><br>
   
    <input type="submit" value="Enviar">
    
    </form>
    <?php
         
     //    $tarea = $_POST['tarea'];
    //     echo $tarea . "<br>";

        foreach($_POST as $key -> $val)
        {
            echo "<li>$key: $val</li>";
        }
        

        
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        try {
          $conn = new PDO("mysql:host=$servername;dbname=ejemplo.php", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
       
    ?>
 
</body>
</html>
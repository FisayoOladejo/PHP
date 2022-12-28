<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <tittle></tittle>
</head>
<body>
    <!--class work#-->
    <form action ="site.php" Method="post"> <br>
    Appples: <input type="checkbox" name = "fruits[]" value="apples"><br>
    
    Mangoes: <input type="checkbox" name = "fruits[]" value="mangoes"><br>

    Banana: <input type="checkbox" name = "fruits[]" value="banana"><br>

    Pears: <input type="checkbox" name = "fruits[]" value="pears"><br>

    <input type="submit">
    </form>
    
    <br>

    <?php 
      $fruits = $_POST["fruits"];

      echo count($fruits); echo "fruits where selected"
      
    ?>
   
    
</body>
</html>
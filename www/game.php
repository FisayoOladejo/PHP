<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <tittle></tittle>
</head>
<body>
    <!--game#-->
    <form action ="site.php" Method="get"> <br>
    Color: <br> <input type="text" name="color"> <br>

    Plural Noun <br> <input type="text" name="Pluralnoun"> <br>
    
    Celebrity: <br> <input type="text" name="celebrity"> <br>
    <input type="submit">
    </form>
    
    <br>

    <?php 
        //creating a variales for the values 

        $color = $_GET["color"];
        $Pluralnoun = $_GET["Pluralnoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>"; 
        echo "$Pluralnoun are blue <br>";
        echo "I love $celebrity <br>"
    ?>
   
    
</body>
</html>

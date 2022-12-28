<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <tittle></tittle>
</head>
<body>
    <!--A website that get student grade#-->

    <form action ="site.php" Method="post"> <br>
    Students: <br> <input type="text" name = "student"><br>

    <input type="submit">
    </form>
   
    <br>

    <?php 
     //Associate array in which the key is map to valu "name and value"
      $grades = array("Fisayo"=>"A+", "Tayo"=>"A", "Kemi"=>"B+", "Gold"=>"B+", "Mike"=>"C");

     //here I am getting input from users and pass it to my associate arrray to provide student grade
     echo "Your grade is"; echo $grades[$_POST["student"]];
      
      
    ?>
   
    
</body>
</html>

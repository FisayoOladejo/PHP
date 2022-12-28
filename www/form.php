<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <tittle></tittle>
</head>
<body>
    <!--aceepting users input with HTML and pass it to php#-->
    <form action ="site.php" Method="get"> <br>
    Name: <br> <input type="text" name="user"> <br>

    Age <br> <input type="number" name="age"> <br>
    
    Gender: <br> <input type="text" name="gender"> <br>
    <input type="submit">
    </form>
    
    <br>

    <?php echo "Hello"; echo $_GET["user"]; echo "you are welcome" ?>
    <br>
    Your age is <?php echo $_GET["age"] ?> 
    <br>
    You are a <?php echo $_GET["gender"] ?>

  <!--2nd example of form accepting values from HTML and pass it to php#-->

  <!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <tittle></tittle>
</head>
<body>
    <!--game#-->
    <form action ="site.php" Method="POST"> <br>
    
    Name: <br> <input type="text" name="name"> <br>

    Gender: <br> <input type="text" name="gender"> <br>

    Age: <br> <input type="text" name="age"> <br>

    email: <br> <input type="text" name="email"> <br>
    
    Country: <br> <input type="text" name="country"> <br>

    State: <br> <input type="text" name="state"> <br>

    Province: <br> <input type="text" name="province"> <br>

    Password: <br> <input type="text" name="password"> <br>
    <input type="submit">
    </form>
    
    <br>
    <?php 

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $provine = $_POST["province"];
    $password = $_POST["password"];

    echo "Hello $name <br>"; 
    echo "You are from $country <br>";
    echo "What can and I do for you today $name <br>"
    ?>
    
</body>
</html>

    

</body>
</html>
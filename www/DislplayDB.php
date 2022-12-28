<?php
//Use the SQLite database 'dinner.db

$bd = new PDO('sqlite:dinner.db');

// define what the allowed meals are

$meals = array('breakfast, lunch, dinner');

//check if submitted form paramter "meal" is one of  
//"breakfast", "lunch", "dinner"

if (in_array($_POST['meal'], $meals)) {
    // if so get all of the dishes for the specified meal
    $stmt = $db->prepare('SELECT dish, price FROM meal WHERE meal LIKE ?');
    $stml->excute(array($_POST['meal']));
    $rows = $stmt->fetchAll();

    // if no dishes were found in the database as a row
    //in an HTML table
    if (count($rows)==0) {
        print"No dishes available.";
    } else{
        //print out each dish and its price as a row 
        // in an HTML table 
        print '<table><tr><Dish</th><th>Price</th></tr>';
        foreach ($row as $row) {
            print "<tr><td>$row[0]</td><td>$row[1]</td></tr";
        }
        print "</table>";
    }
}else{
    //This message print if the submitted paramter "meat" isn't 
    // "breakfast", "lunch" or "dinner"
}
?>



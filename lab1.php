<!DOCTYPE html>
<?php include 'index.php'; ?>
<html>
    
<head>
    <title>Lab 1 - My Favorite Fruits</title>
</head>

<style>
    *, 
    *::before, *::after {
  box-sizing: border-box;
}
.wrapper {
    display: flex;
    gap: 40px;
    align-items: flex-start;
    justify-content: center;
    
}
h1 {
    color: maroon;
    margin-left: 40px;
}
input[type="text"] {
    padding: 5px;

}
.mainfruit {
     display: flex;
    flex-direction: column;
    gap: 8px;
    width: 250px;
    
}
body {
    background-color: pink;
}
    ul li:nth-child(1) { color: red; }
    ul li:nth-child(2) { color: maroon; }
    ul li:nth-child(3) { color: yellow; }
    ul li:nth-child(4) { color: green; }
    ul li:nth-child(5) { color: purple; }
ul li {
    font-size: 18px;
    font-weight: bold;
    
}
.fruits {
    font-size: 22px;
    
}
.form-card {
    background: white;
    padding: 20px;
    width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    
    
}
.result-card {
    background: white;
    padding: 20px;
    width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    
}

</style>
<body>
<div class="wrapper">
     <div class="form-card">
    <h1>My Favorite Fruits</h1>

    <!-- TODO: Create a form with method="post" -->
    <!-- Create 5 text inputs: fruit1, fruit2, fruit3, fruit4, fruit5 -->
    <!-- Add a submit button -->

    
    <form action="lab1.php" method="post">
    <div class="mainfruit">

    <label>Fruit 1:</label>
    <input type="text" name="fruit1">

    <label>Fruit 2:</label>
    <input type="text" name="fruit2">

    <label>Fruit 3:</label>
    <input type="text" name="fruit3">

    <label>Fruit 4:</label>
    <input type="text" name="fruit4">

    <label>Fruit 5:</label>
    <input type="text" name="fruit5">

    <input type="submit" value="Save My Fruits">

</div>
</div>
    </form>
        
   
    
    
<div class="result-card">
    <?php
    
        // TODO: Check if form was submitted
        // TODO: Create an array called $fruits with the 5 submitted values
        // TODO: Use foreach loop to display each fruit
        // TODO: Display the first fruit (index 0) as favorite
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
             echo "<p>Your Fruits Choices is Submitted!</p>";
    $fruits = array(
        $_POST["fruit1"],
        $_POST["fruit2"],
        $_POST["fruit3"],
        $_POST["fruit4"],
        $_POST["fruit5"]
    );

    echo "<h2>Your Fruits:</h2>";
    echo "<ul>";

    foreach ($fruits as $fruit) {
    echo "<li class='fruits'>" . $fruit . "</li>";
    }   

echo "</ul>";

    echo "<h3>Your Favorite Fruit: " . $fruits[0] . "</h3>";
}

        
        
    ?>
    </div>

</div> 
</body>
</html>
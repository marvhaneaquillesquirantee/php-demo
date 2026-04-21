<!DOCTYPE html>
<html>
    <?php include 'index.php'; ?>
<head>
    <title>Lab 2 - Temperature Converter</title>
</head>
<style>
  body {
    margin: 0;
    font-family: Arial;
    background-color: #f8b9c4;
}

/* main card */
.container {
    width: 320px;
    margin: 60px auto;
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    color: #b30059;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 2px solid #ffb3c6;
    border-radius: 8px;
    outline: none;
}

/* button */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #ff66a3;
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
}

input[type="submit"]:hover {
    background: #e05590;
}

/* result box */
.result {
    margin-top: 15px;
    padding: 10px;
    background: #ffe6ee;
    border-left: 5px solid #ff66a3;
    border-radius: 8px;
    color: #b30059;
}
</style>
<body>
    <!-- TODO: Create a form with method="post" -->
    <!-- Create a text input for celsius -->
    <!-- Add a submit button -->

    <h1>Temperature Converter</h1>
    <div class="container">
     <form method="post">
        <label>Enter Celsius:</label> 
        <input type="text" name="temperature"> <input type="submit" value="Enter Fahrenheit">
     </form>


    <?php
        // TODO: Create function celsiusToFahrenheit($celsius)
        // Formula: Fahrenheit = (Celsius × 9/5) + 32
        // Return the calculated value

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $celsius = $_POST["temperature"];

        $fahrenheit = celsiusToFahrenheit($celsius);

        echo "<h3>Result:</h3>";
        echo $celsius . "°C = " . $fahrenheit . "°F";
}
        
        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }
        
        // TODO: Check if form was submitted
        // TODO: Get the celsius value from $_POST
        // TODO: Call the function and display result
    ?>
</div>
</body>
</html>
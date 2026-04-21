<!DOCTYPE html>
<html>
    <?php include 'index.php'; ?>
<head>
    <title>Lab 3 - ATM Machine Simulation</title>
</head>
<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(135deg, #f8b9c4, #ffd6e7);
}

.page {
    display: flex;
    justify-content: center;
    gap: 25px;
    margin-top: 60px;
    flex-wrap: wrap; 
}


.card {
    width: 320px;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #b30059;
}

input, select {
    width: 100%;
    padding: 8px;
    margin: 6px 0 12px;
    border: 1px solid #ffb3c6;
    border-radius: 8px;
    outline: none;
}

input[type="submit"] {
    background: #ff66a3;
    color: white;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #e05590;
}

.result {
    background: #ffe6ee;
    border-left: 5px solid #ff66a3;
    padding: 10px;
    border-radius: 8px;
    margin-top: 10px;
    color: #b30059;
}
</style>
<body>
<div class="page">
     <div class="card">
    <h1>ATM Machine Simulation</h1>

    <!-- TODO: Create a form with method="post" -->
    <!-- Fields needed: -->
    <!-- - account_name (text) -->
    <!-- - initial_balance (number) -->
    <!-- - action (select: Check Balance, Deposit, Withdraw) -->
    <!-- - amount (number, only for Deposit/Withdraw) -->
    <!-- Add a submit button -->

    <form method="post">
    <label>Account Name:</label><br>
    <input type="text" name="account_name"><br><br>

    <label>Initial Balance:</label><br>
    <input type="number" name="initial_balance"><br><br>

    <label>Action:</label><br>
    <select name="action">
        <option value="check">Check Balance</option>
        <option value="deposit">Deposit</option>
        <option value="withdraw">Withdraw</option>
    </select><br><br>

    <label>Amount:</label><br>
    <input type="number" name="amount"><br><br>

    <input type="submit" value="Submit">

    </form>
</div>
<div class="card">
    <?php
        // TODO: Create ATM class with:
        // - Private properties: $accountName, $balance
        // - Constructor that sets account name and initial balance
        // - Methods: getBalance(), deposit($amount), withdraw($amount), getAccountName()
        // - withdraw() should check if sufficient balance exists
        
        class ATM {
            private $accountName;
            private $balance;
            
            function __construct($accountName, $balance) {
                $this->accountName = $accountName;
                $this->balance = $balance;
            }

            public function getAccountName(){
            return $this->accountName;
            }
            
            public function getBalance() {
                return $this->balance;
            }
            public function deposit($amount) {
                $this->balance += $amount;
                return "Deposited: $" . $amount;
            }

          public function withdraw($amount) {
            if ($amount > $this->balance) {
            return "Insufficient balance!";
        } else {
            $this->balance -= $amount;
            return "Withdrawn: $" . $amount;
         }
        

        }
        
 }
   
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $accountName = $_POST["account_name"];
    $initialBalance = $_POST["initial_balance"];
    $action = $_POST["action"];
    $amount = $_POST["amount"];

    $atm = new ATM($accountName, $initialBalance);

    echo "<div class='result'>";

    echo "<h3>Account: " . $atm->getAccountName() . "</h3>";

    if ($action == "check") {
        echo "Current Balance: $" . $atm->getBalance();
    }

    elseif ($action == "deposit") {
        echo $atm->deposit($amount);
        echo "<br>New Balance: $" . $atm->getBalance();
    }

    elseif ($action == "withdraw") {
        echo $atm->withdraw($amount);
        echo "<br>Current Balance: $" . $atm->getBalance();
    }

    echo "</div>";
    
}
 
        // TODO: Check if form was submitted
        // TODO: Create ATM object using form data
        // TODO: Perform the selected action (Check Balance, Deposit, Withdraw)
        // TODO: Display appropriate messages and current balance
    ?>
    </div>
    </div>

</body>
</html>
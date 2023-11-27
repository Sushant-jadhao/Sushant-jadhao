<?php
function convertCurrency($amount, $from_currency, $to_currency) {
    // Hardcoded exchange rates (replace with actual rates)
    $exchange_rates = [
        'USD' => 1.0,
        'EUR' => 0.85,
        'GBP' => 0.74,
        'JPY' => 110.0,
        'INR' => 74.50, // Replace with the actual exchange rate for INR
    ];

    if (!isset($exchange_rates[$from_currency]) || !isset($exchange_rates[$to_currency])) {
        return "Invalid currency code";
    }

    $from_rate = $exchange_rates[$from_currency];
    $to_rate = $exchange_rates[$to_currency];

    $converted_amount = $amount * ($to_rate / $from_rate);

    return $converted_amount;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];

    $converted_amount = convertCurrency($amount, $from_currency, $to_currency);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>

<body>
    <h2>Currency Converter</h2>

    <form method="post">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" required>
        <br>

        <label for="from_currency">From Currency:</label>
        <select name="from_currency" required>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="JPY">JPY</option>
            <option value="INR">INR</option>
        </select>
        <br>

        <label for="to_currency">To Currency:</label>
        <select name="to_currency" required>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="JPY">JPY</option>
            <option value="INR">INR</option>
        </select>
        <br>

        <button type="submit">Convert</button>
    </form>

    <?php
    if (isset($converted_amount)) {
        echo "<p>Converted Amount: $converted_amount $to_currency</p>";
    }
    ?>
</body>

</html>

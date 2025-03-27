<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-width, initial-scale=1.0">
        <title>Currency Converter</title>
    </head>
    <body>
        <h3>Currency Converter</h3>
        <label for="currency-options">Currency conversion options</label>
        <select name="" id="">
            <option value="usd-to-kes">USD to KES</option>
            <option value="gbp-to-kes">GBP to KES</option>
            <option value="eur-to-kes">EUR to KES</option>
            <option value="jpy-to-kes">JPY to KES</option>
        </select>
        <form action="index.php" method="post">
            <label for="amount">Amount: </label>
            <input type="number" name="amount" id="amount" placeholder="Enter amount" required>
            <input type="submit" value="Convert">
        </form>
        <h5>Ksh <?= $usdtokes;?></h5>
    </body>
</html>
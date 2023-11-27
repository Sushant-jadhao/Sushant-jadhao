<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Generated</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: #333;
            padding: 20px 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #333;
            border-radius: 10px;
        }
        .info {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }
        .bill {
            font-size: 24px;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Bill Generated</h1>
    <div class="container">
        <?php
            $n = $_GET["bill"];
            $n1 = $_GET["unit"];
            $n2 = $_GET["id"];
            $n3 = $_GET["date"];
            $n4 = $_GET["mon"];

            echo "<div class='info'>User Name: " . $n . "</div>";
            echo "<div class='info'>User ID: " . $n2 . "</div>";
            echo "<div class='info'>Date: " . $n3 . "</div>";
            echo "<div class='info'>City: " . $n4 . "</div>";

            if ($n1 < 50) {
                $electricBill = $n1 * 3.5;
            } elseif ($n1 >= 50 && $n1 < 150) {
                $result = $n1 - 50;
                $electricBill = 3.5 * 50 + $result * 4;
            } elseif ($n1 >= 150 && $n1 < 250) {
                $res = $n1 - 50;
                $res1 = $n1 - 100;
                $res2 = $n1 - 150;
                $electricBill = 3.5 * 50 + 4.00 * 100 + $res2 * 5.20;
            } else {
                $res = $n1 - 50;
                $res1 = $n1 - 100;
                $res2 = $n1 - 100;
                $res3 = $n1 - 250;
                $electricBill = 3.5 * 50 + 4.00 * 100 + 100 * 5.20 + $res3 * 6.50;
            }

            echo "<div class='bill'>Electric Bill: $" . number_format($electricBill, 2) . "</div>";
        ?>
    </div>
</body>
</html>

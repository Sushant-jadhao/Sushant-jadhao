<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSEB Department Bill Generation</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        #form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #333;
            background-color: #fff;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #btn2 {
            text-align: center;
        }
        #btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }
        #btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>MSEB Department Bill Generation</h1>
    <form id="form" action="input.php">
        <label for="bill">Enter Name of Holder:</label>
        <input type="text" id="bill" name="bill" required>

        <label for="id">Enter ID:</label>
        <input type="number" id="id" name="id" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <label for="mon">City:</label>
        <input type="text" id="mon" name="mon">

        <label for="unit">Enter Unit:</label>
        <input type="number" id="unit" name="unit" required>

        <div id="btn2">
            <input id="btn" type="submit" value="Submit">
        </div>
    </form>
</body>
</html>

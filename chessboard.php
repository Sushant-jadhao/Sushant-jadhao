<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resizable Chessboard</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #chessboard {
            border-collapse: collapse;
            border: 2px solid #000;
            table-layout: fixed;
        }

        #chessboard td {
            width: 30px;
            height: 30px;
            border: 1px solid #000;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <label for="dimension">Chessboard Dimension:</label>
    <input type="number" id="dimension" value="8" min="1" max="20">
    <button onclick="createChessboard()">Create Chessboard</button>

    <table id="chessboard"></table>

    <script>
        function createChessboard() {
            const dimension = document.getElementById("dimension").value;
            const chessboard = document.getElementById("chessboard");

            // Clear previous chessboard
            chessboard.innerHTML = "";

            for (let i = 0; i < dimension; i++) {
                const row = chessboard.insertRow(i);

                for (let j = 0; j < dimension; j++) {
                    const cell = row.insertCell(j);
                    cell.textContent = (i + j) % 2 === 0 ? "♟" : "♙";
                }
            }
        }

        // Initial chessboard creation
        createChessboard();

        // Update chessboard on input change
        document.getElementById("dimension").addEventListener("input", createChessboard);
    </script>
</body>

</html>

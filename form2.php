<!-- Rut Naomi F55123057 -->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Prediksi Kolesterol dan Diabetes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(194, 255, 186);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            justify-content: space-between;
        }

        .form-group label {
            flex: 1;
            text-align: left;
            font-size: 16px;
            font-weight: bold;
        }

        .input-container {
            display: flex;
            align-items: center;
            flex: 1.5;
        }

        input[type="text"] {
            width: 100px;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
        }

        .unit {
            font-size: 16px;
            color: #555;
            font-weight: bold;
            margin-left: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Prediksi Kolesterol & Diabetes</h2>
        <form method="POST" action="supervisedlearning2.php">
            <div class="form-group">
                <label for="beratbadan">Berat Badan</label>
                <div class="input-container">
                    <input type="text" name="beratbadan" id="beratbadan" placeholder="00">
                    <span class="unit">Kg</span>
                </div>
            </div>

            <div class="form-group">
                <label for="usia">Usia</label>
                <div class="input-container">
                    <input type="text" name="usia" id="usia" placeholder="00">
                    <span class="unit">Tahun</span>
                </div>
            </div>

            <input type="submit" value="Hitung Kolesterol Total">
        </form>
    </div>

</body>

</html>
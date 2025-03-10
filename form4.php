<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Prediksi Jantung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(93, 23, 23);
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

        label {
            font-size: 16px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 110px;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
        }

        input[type="submit"]:hover {
            color: white;
            background-color: rgb(93, 23, 23);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Prediksi Kesehatan Jantung</h2>
        <form method="POST" action="prediksiJantung.php">
            <div class="form-group">
                <label for="tekanan_darah">Tekanan Darah Sistolik: </label>
                <br><input type="text" name="tekanan_darah" id="tekanan_darah" placeholder="Masukkan mmHg" required><br>
            </div>
            <br><input type="submit" value=" Prediksi Kondisi Jantung">
        </form>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background: #f9f9f9;
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: inline-block;
            padding: 30px;
        }
        h1 {
            color: #333;
        }
        .angka {
            font-size: 32px;
            font-weight: bold;
            color: #2c7be5;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Hasil Penjumlahan</h1>
        <p class="angka">{{ $hasil }}</p>
    </div>
</body>
</html>


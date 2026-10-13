<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 14px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            padding: 25px;
        }

        h1, h2, h3 {
            margin-top: 0;
            color: #1e3a8a;
        }

        .info-box {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .badge {
            background: #dbeafe;
            color: #1d4ed8;
            padding: 10px 15px;
            border-radius: 10px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dfe7f1;
            padding: 12px 10px;
            text-align: left;
        }

        th {
            background: #eff6ff;
            color: #1e3a8a;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }
    </style>
</head>
<body>

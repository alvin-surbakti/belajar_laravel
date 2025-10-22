<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Harga Produk</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
            color: #555;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head> 
<body> 
    <div class="container">
        <h2>Form Ubah Harga Produk</h2> 
 
        <p>Nama Produk: <b>Laptop ASUS</b></p> 
        <p>Kategori: <b>Elektronik</b></p>
        <p>Harga Saat Ini: <b>Rp5.000.000</b></p> 
        <form action="/produk/update-harga" method="POST"> 
            @csrf 
            @method('PATCH') 
            <label>Harga Baru:</label><br> 
            <input type="number" name="harga" value="5000000" required><br><br> 
            <button type="submit">Perbarui Harga</button> 
        </form> 
    </div>
</body> 
</html>

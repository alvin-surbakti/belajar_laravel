<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Form Input Produk</title> 
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
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input, select {
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
        <h2>Form Input Produk</h2> 
        <form action="/kirim-produk" method="POST"> 
            @csrf <!-- Token keamanan wajib di setiap form POST -->
            <label>Nama Produk:</label><br> 
            <input type="text" name="nama" required><br><br> 
            <label>Harga Produk:</label><br> 
            <input type="number" name="harga" required><br><br> 
            <label>Kategori:</label><br> 
            <select name="kategori"> 
                <option value="Makanan">Makanan</option> 
                <option value="Minuman">Minuman</option> 
                <option value="Elektronik">Elektronik</option> 
            </select><br><br> 
            <button type="submit">Kirim</button> 
        </form> 
    </div>
</body> 
</html>

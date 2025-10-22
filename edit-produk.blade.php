<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Data Produk</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4B0082, #6A0DAD); /* Kombinasi ungu gelap */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: white;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #4B0082;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
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
            background-color: #8A2BE2; /* Ungu gelap untuk button */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #6A0DAD;
        }
    </style>
</head> 
<body> 
    <div class="container">
        <h2>Form Edit Produk</h2> 
 
        <form action="/produk/update" method="POST"> 
            @csrf 
            @method('PUT') 
 
            <label>Nama Produk:</label><br> 
            <input type="text" name="nama" value="Laptop Lama"><br><br>
            <label>Harga Produk:</label><br> 
            <input type="number" name="harga" value="5000000"><br><br> 
            <label>Kategori:</label><br> 
            <select name="kategori"> 
                <option value="Elektronik">Elektronik</option> 
                <option value="Makanan">Makanan</option> 
                <option value="Minuman">Minuman</option> 
            </select><br><br> 
            <button type="submit">Perbarui Data</button> 
        </form> 
    </div>
</body> 
</html>

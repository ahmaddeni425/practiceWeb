<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk dengan Harga di Atas 100</title>
</head>
<body>

    <h1>Daftar Produk dengan Harga di Atas 100</h1>

    @if(count($expensiveProducts) > 0)
        <ul>
            @foreach($expensiveProducts as $product)
                <li>
                    <strong>Nama Produk:</strong> {{ $product->name }}<br>
                    <strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada produk dengan harga di atas 100.</p>
    @endif

</body>
</html>

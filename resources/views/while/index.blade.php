<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Tersedia</title>
</head>
<body>

    <h1>Daftar Produk Tersedia</h1>

    @if(count($availableProducts) > 0)
        <ul>
            @foreach($availableProducts as $product)
                <li>
                    <strong>{{ $product->name }}</strong><br>
                    ID Produk: {{ $product->id }}<br>
                    Stok: {{ $product->stock }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada produk yang tersedia.</p>
    @endif

</body>
</html>

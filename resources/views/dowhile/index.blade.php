<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi Gagal</title>
</head>
<body>

    <h1>Daftar Transaksi Gagal</h1>

    @if(count($failedTransactions) > 0)
        <ul>
            @foreach($failedTransactions as $transaction)
                <li>
                    <strong>ID Transaksi:</strong> {{ $transaction->id }}<br>
                    <strong>Jumlah:</strong> Rp {{ number_format($transaction->amount, 0, ',', '.') }}<br>
                    <strong>Status:</strong> {{ $transaction->status }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada transaksi gagal.</p>
    @endif

</body>
</html>

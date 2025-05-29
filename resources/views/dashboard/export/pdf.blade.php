<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Pembayaran SPP</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #444;
            padding: 6px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        h3 {
            text-align: center;
            margin-bottom: 0;
        }
        .header {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>Laporan Pembayaran SPP</h3>
        <p>Tanggal Cetak: {{ date('d-m-Y') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pembayaran</th>
                <th>users</th>
                <th>Siswa</th>
                <th>Kelas</th>
                <th>Bulan SPP</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal Bayar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pembayaran as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->users->name ?? 'N/A' }}</td>
                    <td>{{ $item->siswa->nama ?? 'N/A' }}</td>
                    <td>{{ $item->siswa->kelas->nama_kelas ?? 'N/A' }}</td>
                    <td>{{ ucfirst($item->spp_bulan) }}</td>
                    <td>Rp {{ number_format($item->jumlah_bayar, 0, ',', '.') }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align:center;">Tidak ada data pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

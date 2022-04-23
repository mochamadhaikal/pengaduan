<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Laporan Pengaduan</title>
</head>
<body>
    <div class="text-center">
        <h5>Laporan Pengaduan Masyarakat</h5>
        <h6>Created By. Nursyafriady</h6>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Isi laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $key=>$item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->tgl_pengaduan->format('d-M-Y') }}</td>
                        <td>{{ $item->isi_laporan }}</td>
                        <td>{{ $item->status == '0' ? 'Pending' : ucwords($item->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">Data Barang Masuk</h1>
    <p class="text-center">Data Laporan Barang Masuk Tahun 2021</p>
    <br>
    <table id="table-data" class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TGL MASUK</th>
                <th>JUMLAH</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach($product as $key)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->harga}}</td>
                <td>{{$key->stok}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </table>
</body>
</html>

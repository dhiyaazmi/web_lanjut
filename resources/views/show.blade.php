<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @extends('components.navbar')

    <div class="container">
        <div class="row justify-content-between">
            <h1 class="mt-5 col-sm-6">Halaman Produk</h1>
            <a href="{{ route("create") }}" class="col-auto" style="margin-top: 4.5%;"><button class="btn btn-primary">Tambah Produk</button></a>
        </div>
            <table class="table table-primary table-bordered">
            <tr class="table table-primary">
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
            @foreach ($arr as $i)
            <tr class="table table-info">
                <td>{{ $i["kode"] }}</td>
                <td>{{ $i["nama"] }}</td>
                <td>{{ $i["jenis"] }}</td>
                <td>{{ $i["harga"] }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
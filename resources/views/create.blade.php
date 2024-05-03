<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @extends('components.navbar')

    <div class="container">
        <h1 class="mt-5">Form Tambah Produk</h1>
        <form action="#">
            <div class="row">
                <div class="col-4">
                    <label class="label-form" id="inputGroup-sizing-sm">Kode Produk</label>
                    <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="kode" placeholder="Input Kode Produk">
                </div>
                <div class="col-4">
                    <label class="label-form" id="inputGroup-sizing-sm">Nama Produk</label>
                    <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="nama" placeholder="Input Nama Produk">
                </div>
                <div class="col-4">
                    <label class="label-form" id="inputGroup-sizing-sm">Jenis Produk</label>
                    <select class="form-select" aria-label="select example" name="jenis">
                        <option selected>Pilih Jenis Produk</option>
                        @foreach ($arr as $i)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="label-form" id="inputGroup-sizing-sm">Harga</label>
                    <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="harga" placeholder="Input Harga Produk">
                </div>
                <div class="col-6 mt-4">
                    <button type="submit" class="btn btn-success form-control">simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
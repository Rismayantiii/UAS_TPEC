<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Belajar Laravel 9</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                    <tr>
                        <td>Kategori Produk</td>
                        <td>{{$kategori_produk = $_POST['kategori_produk']}}</td>
                    </tr>
                    <tr>
                        <td>Nama Produk</td>
                        <td>{{$nama_produk = $_POST['nama_produk']}}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>{{$stok = $_POST['stok']}}</td>
                    </tr>
                    <tr>
                        <td>Harga Produk</td>
                        <td>{{$harga_produk = $_POST['harga_produk']}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
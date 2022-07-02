<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1FFRitFm5rLQihCFPSNPkwLNBTbVZHUAnYc5iRYaWz9emXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warga</title>
</head>
<body>
        <div class="container">
        <h1>Data Warga</h1>
        <a href="/warga/create" class="btn btn-warning">Tambah Nama</a>
        <table border class="table table-dark table-hover">
        
            <tr>
                <th>No.</th>
                <th>NAMA</th>
                <th>NIK</th>
                <th>No.KK</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($warga as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>{{$w->nama}}</td>
                    <td>{{$w->nik}}</td>
                    <td>{{$w->no_kk}}</td>
                    <td>{{$w->jenis_kelamin}}</td>
                    <td>{{$w->alamat}}</td>
                    <td>
                        <a class="btn btn-success" href="/warga/{{$w->id}}/edit">Ubah</a>
                        <form action="/warga/{{$w->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Hapus">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
         
        </div>
</body>
</html>


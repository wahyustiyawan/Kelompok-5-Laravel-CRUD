<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" class="table table-dark table-striped container-fluid col">
        <tr>
            <th>id buku</th>
            <th>Nama Buku</th>
            <th>Nama Pengarang</th>
            <th>Kategori</th>
            <th>Jumlah Buku</th>            
            <th>Cover Buku</th>
            <th>Edit</th>
            <th><th>
        </tr>

        @foreach($books as $b)
        <tr>
            <td>{{ $b->idbuku }}</td>
            <td>{{ $b->NamaBuku }}</td>
            <td>{{ $b->NamaPengarang }}</td>
            <td>{{ $b->Kategori }}</td>
            <td>{{ $b->qty }}</td>
            <td><image src="{{ Storage::url($b->Image) }}" width="150" height="200"></td>
           <td><a href="/show/{{$b->idbuku }}"><button type="button" class="btn btn-success btn" style="padding-right:20px; textx-align:center;">Edit</button></a></td>
            <td><a href="/hapus/{{$b->idbuku }}"><button type="button" class="btn btn-danger btn">Hapus</button> </a><td>
        </tr>
        @endforeach
</table>
    
</body>
</html>
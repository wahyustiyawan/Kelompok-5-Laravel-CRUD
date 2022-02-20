<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="mt-4 p-5 bg-dark text-white rounded" style="background-color: grey; color: white;">
        <div class="col-8"></div>
    <div class="col-8" style="background-color: dark;  font-family: Cambria; font-size: 18px;">
    <form action="/edit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<table class="table table-active" style="color:white;">
        <tr>
            @foreach($books as $a)
           <td style="color:white;">Id Buku : {{ $a->idbuku }}</td><td><input type="hidden" name="idbuku" value="{{ $a->idbuku }}"></td>
            
            </tr>
            <tr>
                <td>Judul :</td><td><input type="text" id="NamaBuku" name="NamaBuku"  class="form-control" value="{{ $a->NamaBuku }}"></td>
            </tr>
            <tr>
                <td>Nama Pengarang :</td><td><input type="text" id="NamaPengarang" name="NamaPengarang"  class="form-control" value="{{ $a->NamaPengarang }}"></td>
            </tr>
            <tr>
                <td>Qty :</td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control" value="{{ $a->qty }}"></td>
            </tr>
            <tr>
                <td>Jenis Buku :</td>
                <td>
                    <select name="Kategori" id="Kategori" style="width: 200px; height:40px; font-size: 16px;" class="form-select form-select-lg" value="{{ $a->Kategori }}">
                        <option value="Novel">Novel</option>
                        <option value="Kartun">Kartun</option>
                        <option value="Fiksi">Fiksi</option>
                        <option value="Romantis">Romantis</option>
                        <option value="Inspiratif">Inspiratif</option>
                                                                        
                    </select>
                </td>
            </tr>          

            
        </table>

        <image src="{{ Storage::url($a->Image) }} " style="padding: 40px;" width="350" height="400">

     </br>
        <div style="padding-left: 400px;">
        <input type="submit" class="btn btn-danger" value="Simpan" style="width:100px; margin-bottom:60px;">
        </div>
    </form>
    <div class="col-4"></div>
</div>
</div>
    @endforeach
</body>
</html>

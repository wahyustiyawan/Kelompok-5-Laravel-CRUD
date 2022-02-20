<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script type="text/javascript">
          function lihatpustaka(){
            $.ajax({
                type: "GET",
                url: "/tabel"
                }).done(function(data){
                    $('#tabel').html(data);
                });
        }

        function caripustaka(){
            var idbuku = document.getElementById("idbuku").value;
            $.ajax({
                type: "GET",
                url: "/cari/"+idbuku
                }).done(function(data){
                    $('#tabel').html(data);
                });
        }
    </script>
    <title>Document</title>

    

</head>


<body onload="lihatpustaka();">
<h1></h1>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" > 
        <img src="Storage/pp.jpg" alt="Avatar Logo" style="width:80px;" class="rounded-pill"> Kampus Gratis</a>
        <button type="button" id="isi" class="btn btn-danger btn" data-bs-toggle="modal" data-bs-target="#ModalInsert">Pendaftaran Buku Baru</button>
        <label for="idbuku" style="color:rgb(233, 233, 233); font-size: 20px;">Masukkan Identitas Buku</label>
        <td><input type="text" id="idbuku" class="form-control form-control" style="width: 300px;"></td>
    <td><button type="button" style="color:white;" id="submit" class="btn btn-warning btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
    
    
    
      
    </div>
    </nav>

    <h3 style="text-align: center ; padding-top: 30px ;">Daftar Koleksi Buku Di Kampus Gratis</h3>
    <br>
    <div id="tabel">
    
    </div>
    
    <br/>
    
    <table>
    </table>
    <br/>

    


    <div class="modal" id="ModalInsert">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
    <form action="/tambah" id="formdata" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Koleksi Buku Baru</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
        <table>
        <tr>
                <td>Id Buku :</td><td><input type="text" id="idbuku" name="idbuku" class="form-control"></td>
            </tr>
            <tr>
                <td>Judul :</td><td><input type="text" id="NamaBuku" name="NamaBuku"  class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Pengarang :</td><td><input type="text" id="NamaPengarang" name="NamaPengarang"  class="form-control"></td>
            </tr>
            <tr>
                <td>Qty :</td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control"></td>
            </tr>
            
  
            <tr>
                <td>Jenis Buku :</td>
                <td>
                    <select name="Kategori" id="Kategori" style="width: 200px;" class="form-select form-select-lg">
                        <option value="Novel">Novel</option>
                        <option value="Kartun">Kartun</option>
                        <option value="Fiksi">Fiksi</option>
                        <option value="Romantis">Romantis</option>
                        <option value="Inspiratif">Inspiratif</option>                        
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload Cover</td> <td><input type="file" name="file"></td>
            </tr>

            
        </table>
        
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <input type="submit" class="btn btn-danger" value="submit" id="submit">
      </div>
      </form>
    </div>
  </div>
</div>
<footer>
            <div class="bawah" style=" background-color: rgb(29, 29, 29); color: rgb(255, 249, 249); padding: 50px;font-size:30px; text-align:center;">
                <br>
              <p> Kelompok 5 </p>
            </p>

          </footer>
</body>
</html>

<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Belajar SweetAlert</title>
 <link rel="stylesheet" href="/css/bootstrap.min.css">
 </head>
 <body>
 <div class="container mt-5">
 <h1>Belajar SweetAlert</h1>
 <hr>

 <form method="POST" action="/swal-validate-banyak">
     @csrf
     <div class="row mb-3">
     <label class="col-3 col-form-label">Nama</label>
     <div class="col-4">
     <input type="text" class="form-control col-3" name="nama">
     </div>
     </div>
    
     <div class="row mb-3">
     <label class="col-3 col-form-label">Nama Kepala Jurusan</label>
     <div class="col-4">
     <input type="text" class="form-control col-3" name="kepala_jurusan">
     </div>
     </div>
    
     <div class="row mb-3">
     <label class="col-3 col-form-label">Daya Tampung</label>
     <div class="col-4">
     <input type="text" class="form-control col-3" name="daya_tampung">
     </div>
     </div>
    
     <button type="submit" class="btn btn-primary">Submit</button>
     </form>

 </div>
 @include('sweetalert::alert')
 </body>
 </html>
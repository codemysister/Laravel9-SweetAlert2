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
 <form action="{{url('/swal-delete/'.$id)}}" method="POST">
 @csrf @method('DELETE')
 <button type="submit" class="btn btn-danger btn-hapus"
 data-name="{{$nama}}">Hapus Data</button>
 </form>
 </div>
 @include('sweetalert::alert')
 <script>
 let tombol = document.getElementsByClassName('btn-hapus')[0];
 tombol.addEventListener('click',konfirmasi);

 function konfirmasi(event){
 event.preventDefault();
 Swal.fire({
 title: 'Apakah anda yakin?',
 text: 'Hapus data mahasiswa '+ event.target.getAttribute('data-name'),
 icon: 'warning',
 showCancelButton: true,
 cancelButtonColor: '#6c757d',
 confirmButtonColor: '#dc3545',
 confirmButtonText: 'Ya, hapus!',
 reverseButtons: true,
 }).then((result) => {
 if (result.value) {
 event.target.parentElement.submit();
 }
 })
 }
 </script>
 </body>
 </html>

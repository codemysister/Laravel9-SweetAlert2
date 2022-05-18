<!DOCTYPE html>
 <html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Belajar SweetAlert</title>
 </head>
 <body>
 <h1>Belajar SweetAlert</h1>

 <button onclick="alertNone()">none</button>
 <button onclick="alertSuccess()">success</button>
 <button onclick="alertInfo()">info</button>
 <button onclick="alertError()">error</button>
 <button onclick="alertWarning()">warning</button>
 <button onclick="alertQuestion()">question</button>

 <script src="/js/sweetalert2@11.js"></script>

 <script>
 function alertNone(){
 Swal.fire('Selamat!','Anda berhasil menjalankan Sweet Alert',)
 }

 function alertSuccess(){
 Swal.fire('Selamat!','Anda berhasil menjalankan Sweet Alert','success')
 }

 function alertInfo(){
 Swal.fire('Informasi','Anda mendapat 1 pesan baru','info')
 }

 function alertError(){
 Swal.fire('Error','Username harus diisi','error')
 }

 function alertWarning(){
 Swal.fire('Peringatan','Anda sudah melebihi quota','warning')
 }

 function alertQuestion(){
 Swal.fire('Pertanyaan','Bumi bulat atau bumi datar?','question')
 }
 </script>
 </body>
 </html>
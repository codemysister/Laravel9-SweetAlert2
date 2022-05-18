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
 <button id="tombol">Click Me</button>

 <script src="/js/sweetalert2@11.js"></script>

 <script>
 let tombol = document.getElementById('tombol');
 tombol.addEventListener('click',jalankanSweetAlert);

 function jalankanSweetAlert(){
 Swal.fire('Selamat!','Anda berhasil menjalankan Sweet Alert', 'success')
 }
 </script>
 </body>
 </html>

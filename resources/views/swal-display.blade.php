<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Belajar SweetAlert</title>
 <link rel="stylesheet" href="/css/bootstrap.min.css">
 <link rel="stylesheet" href="/css/animate.min.css">
 </head>
 <body>
 <div class="container mt-5">
 <h1>Belajar SweetAlert</h1>
 <hr>
 <button class="btn btn-primary" onclick="alertFooter()">footer</button>
 <button class="btn btn-primary" onclick="alertHtml()">html</button>
 <button class="btn btn-primary" onclick="alertImage()">image</button>
 <button class="btn btn-primary" onclick="alertPosition()">position</button>
 <button class="btn btn-primary" onclick="alertTimer()">timer</button>
 <button class="btn btn-primary" onclick="alertConfirm()">confirm</button>
 <button class="btn btn-primary" onclick="alertToast()">toast</button>
 <button class="btn btn-primary" onclick="alertToast2()">toasttimer</button>
 <button class="btn btn-primary" onclick="alertAnimate()">animate</button>
 </div>

 <script src="/js/sweetalert2@11.js"></script>
 <script>
 function alertFooter(){
 Swal.fire({
 icon: 'success',
 title: 'Selamat!',
 text: 'Anda berhasil menjalankan Sweet Alert',
 footer: '<span>Dipersembahkan oleh '+

 '<a href="https://sweetalert2.github.io">'+
 'sweetalert2</a> </span>',
 })
 }

 function alertHtml(){
 Swal.fire({
 icon: 'info',
 title: '<strong>Pesan sponsor</strong>',
 html: '<i>Belajar programming?</i> di '+
 '<a href="https://www.duniailkom.com"> Duniailkom</a> aja!',
 footer: '<span>Di sponsori oleh <a href="https://www.duniailkom.com"> '+
 'Duniailkom</a></span>',
 })
 }

 function alertImage(){
 Swal.fire({
 title: 'Selamat!',
 text: 'Anda berhasil menjalankan Sweet Alert',
 footer: 'Dipersembahkan oleh <a href="https://www.duniailkom.com"> '+
 'Duniailkom</a>',
 imageUrl: 'https://picsum.photos/450/200',
 imageWidth: 450,
 imageHeight: 200,
 imageAlt: 'Sebuah gambar random'
 })
 }

 function alertPosition(){
 Swal.fire({
 title: 'Selamat!',
 text: 'Anda berhasil menjalankan Sweet Alert',
 position: 'top-end',
 })
 }

 function alertTimer(){
 Swal.fire({
 position: 'top-end',
 icon: 'success',
 title: 'Email sudah berhasil dikirim',
 showConfirmButton: false,
 timer: 1500
 })
 }

 function alertConfirm(){
 Swal.fire({
 title: 'Konfirmasi',
 text: "Apakah anda yakin ingin menghapus data ini?",
 icon: 'warning',
 showCancelButton: true,
 confirmButtonColor: '#3085d6',
 cancelButtonColor: '#d33',

 confirmButtonText: 'Ya, hapus!'
 }).then((result) => {
 if (result.value) {
 Swal.fire(
 'Di hapus',
 'Data berhasil di hapus',
 'success'
 )
 }
 })
 }

 function alertToast(){
 Swal.fire({
 toast: true,
 title: "Anda mendapat 1 pesan baru",
 icon: 'info',
 position: 'top-end',
 showConfirmButton: false,
 showCloseButton: true,
 })
 }

 function alertToast2(){
 Swal.fire({
 toast: true,
 title: "Anda mendapat 1 pesan baru",
 icon: 'info',
 position: 'top-end',
 showConfirmButton: false,
 timer: 3000,
 timerProgressBar: true,
 })
 }

 // Perlu tambahan animate.css
 function alertAnimate(){
 Swal.fire({
 title: 'Selamat!',
 icon: 'success',
 text: 'Anda berhasil menjalankan Sweet Alert',
 showClass: {
 popup: 'animate__animated animate__jackInTheBox animate__fast'
 },
 hideClass: {
 popup: 'animate__animated animate__hinge animate__slow'
 }
 })
 }

 </script>
 </div>
 </body>
 </html>
